# PARÁMETROS DE MySQL/MariaDB

### Memoria y Caché
- **innodb_buffer_pool_size:** La memoria RAM principal que InnoDB usa para guardar datos e índices. El parámetro más importante para el rendimiento.

- **query_cache_size:** Memoria para guardar resultados de consultas SELECT. Obsoleto en versiones modernas.

- **table_open_cache:** Número máximo de tablas que el servidor puede mantener abiertas a la vez.

- **tmp_table_size / max_heap_table_size:** El tamaño máximo de las tablas temporales creadas en memoria RAM antes de pasarse a disco (lo que las ralentiza).

### Rendimiento y Almacenamiento
- **innodb_log_file_size:** El tamaño del diario de transacciones, que mejora la velocidad de escritura.

- **innodb_flush_log_at_trx_commit:** Controla el balance entre seguridad (valor 1) y velocidad (valor 2) en las escrituras.

- **innodb_file_per_table:** Si está activado, cada tabla se guarda en su propio fichero, lo cual es la práctica recomendada.

### Registros (Logs)
- **log_bin:** Activa el log binario, esencial para replicación y copias de seguridad.

- **slow_query_log:** Activa (1) o desactiva (0) el registro de consultas lentas.

- **slow_query_log_file:** Define el nombre y la ruta del fichero de consultas lentas.

- **long_query_time:** El tiempo en segundos a partir del cual una consulta se considera lenta.

### Conexión y Monitorización
- **max_connections:** El número máximo de conexiones de usuarios simultáneas.

- **bind-address:** La dirección IP en la que el servidor acepta conexiones, clave para la seguridad.

- **performance_schema:** Activa las herramientas de monitorización avanzada del rendimiento.

---

# BASE DE DATOS Mysql/Mariadb

### Empresa 1: Commerce Boquerón Caliente (Tienda de comercio electrónico)

[*AUDIO - ENTREVISTA 1*](https://drive.google.com/file/d/15vGCLb1T2sdz5X-SolCOGR2kKohXRQBV/view?usp=sharing)

- Este es un sistema procesamiento de transacciones en línea. Las prioridades son manejar una alta concurrencia de usuarios, garantizar la integridad de las transacciones de compra y ofrecer tiempos de respuesta muy bajos, con un gran volumen de operaciones de escritura y lectura simultáneas.

| Parámetro | Valor Sugerido | Porqué lo pongo así |
| :--- | :--- | :--- |
| `innodb_buffer_pool_size` | 70-80% de la RAM | Lo bien grande para que casi toda la tienda quepa en la memoria RAM. Así, cuando la gente busque productos o compre, todo irá a una velocidad considerable. |
| `innodb_log_file_size` | 512M - 1G | Como hay muchísimas compras a la vez, necesito un registro de transacciones grande para no estar escribiendo a cada rato, lo que haría todo más lento. |
| `max_connections` | 1000+ | La tienda aguanta "miles de usuarios simultáneos", así que necesito abrir la puerta a muchas conexiones para que nadie se quede fuera. |
| `query_cache_size` | 0 | Esta caché no sirve de nada aquí. Con el inventario cambiando a cada segundo, la caché se invalidaría constantemente y sería más un estorbo que una ayuda. |
| `table_open_cache` | 4096 | Con tanta gente conectada, se van a usar un montón de tablas a la vez. Subo este número para que el sistema no pierda tiempo abriendo y cerrando ficheros. |
| `tmp_table_size` | 256M | Para que las consultas más complejas, como ordenar productos por precio o popularidad, se hagan en la memoria RAM, que es mucho más rápida que el disco. |
| `max_heap_table_size` | 256M | Lo igualo al anterior para asegurar que las tablas temporales tengan espacio de sobra en la memoria y no haya cuellos de botella. |
| `innodb_flush_log_at_trx_commit`| 1 | Con el dinero no se juega. Pongo esto en '1' para que cada compra se guarde en el disco al instante y sea 100% segura. |
| `log_bin` | ON | Lo activo sí o sí. Es el seguro de vida que me permite recuperar la base de datos a cualquier segundo exacto si algo peta. |
| `slow_query_log` | ON | Quiero un chivato que me diga qué consultas van lentas. Así puedo pillarlas y optimizarlas para que la tienda vaya siempre como un tiro. |
| `slow_query_log_file` | /var/log/mysql/slow-query.log | Le digo dónde guardar el fichero con las consultas lentas para tenerlo localizado. |
| `long_query_time` | 1 | Para mí, si una consulta en la tienda tarda más de un segundo, ya es lenta. Pongo el listón bajo para que nada se me escape. |
| `bind-address` | IP privada del servidor | Por seguridad, la base de datos solo debe escuchar a la aplicación. Así evito que alguien intente conectarse desde fuera. |
| `innodb_file_per_table` | ON | Prefiero que cada tabla tenga su propio fichero. Es más ordenado.|
| `performance_schema` | ON | Activo el modo "inspector" para poder ver hasta el último detalle de lo que pasa en la base de datos si en algún momento algo no va tan rápido como debería. |




---

### Empresa 2: Data Warehouse People4 (Almacenamiento de datos)

[*AUDIO - ENTREVISTA 2*](https://drive.google.com/file/d/1JmlDn8JOgeOOEbhqsb8le2aMVFsrJKMd/view?usp=sharing)

- Este es un sistema de procesamiento analítico en línea. Su función principal es almacenar grandes volúmenes de datos históricos y ejecutar consultas complejas y pesadas para análisis de negocio. La carga de trabajo es de lectura intensiva, con escrituras periódicas y no en tiempo real.



| Parámetro | Valor Sugerido | Porqué lo pongo así |
| :--- | :--- | :--- |
| `innodb_buffer_pool_size` | 80-90% de la RAM | Aquí necesito toda la memoria posible. Los análisis que hacemos leen "grandes volúmenes de datos" y quiero que todo quepa en RAM para que no tarden una eternidad. |
| `innodb_log_file_size` | 1G - 2G | Las cargas de datos son periódicas pero bestiales. |
| `max_connections` | 50 - 100 | No se van a conectar miles de usuarios, sino unos pocos analistas o herramientas. No necesito más conexiones, así ahorro recursos. |
| `query_cache_size` | 0 | La quito porque las consultas de análisis casi nunca se repiten. Cada una es diferente, así que la caché no aportaría nada. |
| `table_open_cache` | 2048 | Las consultas aquí cruzan un montón de tablas enormes. Subo el valor para que el sistema tenga muchas tablas "a mano" y no se ralentice. |
| `tmp_table_size` | 1G | Las "consultas de agregación" y los análisis complejos necesitan crear tablas temporales gigantes. Les doy mucho espacio en memoria para que no usen el disco. |
| `max_heap_table_size` | 1G | Lo pongo igual que el de arriba para que no haya problemas si las tablas temporales en memoria necesitan crecer mucho. |
| `innodb_flush_log_at_trx_commit`| 2 | Como no es un sistema "en tiempo real", puedo relajar un poco la seguridad a cambio de mucha más velocidad al cargar datos. El riesgo es mínimo. |
| `log_bin` | ON | Aunque las cargas son periódicas, quiero tener un registro por si necesito recuperar los datos históricos a un punto concreto en caso de desastre. |
| `slow_query_log` | ON | Fundamental. Necesito registrar las consultas que tardan mucho para entender por qué y optimizarlas, que al final es el pan de cada día en este trabajo. |
| `slow_query_log_file` | /var/log/mysql/slow-query.log | Dejo aquí el fichero de los chivatazos para tenerlo a mano. |
| `long_query_time` | 10 | No voy a considerar "lenta" una consulta hasta que no pase de los 10 segundos. |
| `bind-address` | IP privada del servidor | El almacén de datos es una joya. Solo se debe poder acceder desde dentro de la red de la empresa, nunca desde fuera. |
| `innodb_file_per_table` | ON | Me viene genial para gestionar tablas que pueden llegar a ser gigantescas. Si un día hay que archivar o borrar una, es mucho más limpio. |
| `performance_schema` | ON | Lo activo para poder meterme hasta la cocina y ver exactamente qué hace una consulta compleja y dónde está perdiendo tiempo. |



---


### Empresa 3: Inverna Forever (Red social)

[*AUDIO - ENTREVISTA 3*](https://drive.google.com/file/d/1ufC0xcWbO2O_ep3I5_7jrm1HE6dNd_Bq/view?usp=sharing)

- Este sistema tiene una carga de trabajo mixta, pero es predominantemente de lectura intensiva. Los usuarios leen perfiles, publicaciones y comentarios con mucha más frecuencia de la que escriben contenido nuevo. La concurrencia puede ser alta y la consistencia de los datos es importante para la experiencia del usuario.



| Parámetro | Valor Sugerido | Porqué lo pongo así |
| :--- | :--- | :--- |
| `innodb_buffer_pool_size` | 70-80% de la RAM | La gente en una red social no para de mirar perfiles y publicaciones. Con esto grande, toda esa "alta carga de lecturas" se sirve desde la memoria y la web vuela. |
| `innodb_log_file_size` | 256M - 512M | La gente escribe de vez en cuando, no es una locura constante. Un tamaño medio es suficiente para aguantar los picos de actividad sin pasarse. |
| `max_connections` | 500 - 1000 | Aquí se conecta "mucha gente a la vez", así que abro bastantes conexiones para que todo el mundo pueda entrar y cotillear sin problemas. |
| `query_cache_size` | 0 | Aunque se lee mucho, el contenido cambia (nuevos comentarios, likes...). Es mejor usar otras cachés fuera de la base de datos. |
| `table_open_cache` | 2048 | Un montón de usuarios mirando perfiles, comentarios, fotos... eso son muchas tablas abiertas a la vez. Le doy un buen número para que vaya fluido. |
| `tmp_table_size` | 128M | Para las operaciones típicas de una red social, como ordenar los comentarios o generar el feed de noticias de un usuario, con este tamaño en memoria vamos sobrados. |
| `max_heap_table_size` | 128M | Lo dejo igual que el de arriba, para que no haya sorpresas y todo lo que sea temporal se pueda gestionar sin problemas en la memoria. |
| `innodb_flush_log_at_trx_commit`| 1 |  Con este valor, me aseguro de que lo que se escribe, se guarda al momento y es visible. |
| `log_bin` | ON | Lo activo para poder recuperar la base de datos si pasa algo y también porque es la base si el día de mañana queremos montar réplicas para aguantar más usuarios. |
| `slow_query_log` | ON | Quiero saber si, por ejemplo, cargar el muro de alguien muy famoso es lento. Este log me ayudará a pillar esas consultas y meterles mano. |
| `slow_query_log_file` | /var/log/mysql/slow-query.log | Aquí dejo el fichero para ir revisando de vez en cuando qué se cuece. |
| `long_query_time` | 2 | En una red social, todo tiene que parecer instantáneo. Si algo tarda más de 2 segundos, los usuarios se impacientan, así que ese es mi límite. |
| `bind-address` | IP privada del servidor | Los datos de los usuarios son sagrados. La base de datos solo debe ser accesible desde los servidores de la aplicación, punto. |
| `innodb_file_per_table` | ON | Me gusta tener cada tabla en su fichero. Si un usuario se da de baja y borro sus datos, recupero ese espacio en disco fácilmente. Es más limpio. |
| `performance_schema` | ON | Si la red social empieza a crecer y notamos que algo va lento, esto me dará todas las pistas que necesito para saber dónde está el problema. |

---

# FICHEROS MODIFICADOS

- En la instalación de MySQL/MariaDB, los parámetros se configuran en */etc/mysql/my.cnf*

- **Empresa 1:** Commerce Boquerón Caliente
 ![alt text](img/Captura%20desde%202025-09-23%2022-09-27.png)

 - **Empresa 2:** Data Warehouse People4 
![alt text](img/Captura%20desde%202025-09-23%2022-15-35.png)

- **Empresa 3:** Inverna Forever
![alt text](img/Captura%20desde%202025-09-23%2022-18-53.png)

