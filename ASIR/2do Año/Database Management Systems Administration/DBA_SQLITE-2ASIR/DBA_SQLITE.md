# Configuración de la Base de Datos

## Crear y Conectar a la Base de Datos

![alt text](img/Captura%20desde%202025-10-15%2022-20-39.png)

## Creación de Tablas y Estructura

### Crear la tabla Mandarinas

![alt text](img/Captura%20desde%202025-10-15%2022-23-15.png)

### Crear la tabla Melocotones

![alt text](img/Captura%20desde%202025-10-15%2022-26-26.png)

### Crear la tabla Caquis

![alt text](img/Captura%20desde%202025-10-15%2022-27-38.png)

---

# Verificación de la Estructura Creada

![alt text](img/Captura%20desde%202025-10-15%2022-29-13.png)

---

# TAMAÑO Y MAS...

- ls -lh frutitas.db

![alt text](img/Captura%20desde%202025-10-16%2013-42-26.png)

---

# Optimización del Rendimiento y Mantenimiento

## Análisis del Log y Justificación de la Optimización

- **Análisis:** Al examinar el fichero _frutitasdb20241027.log, noté que la base de datos es "bombardeada" con consultas de lectura SELECT sobre la tabla Mandarinas. Las consultas más repetidas buscan mandarinas por color, size y fecha_recogida.

- **Problema:** Sin una optimización, cada una de estas consultas fuerza a SQLite a leer la tabla Mandarinas entera, fila por fila, para encontrar los datos que coinciden. 

- **Solución:** Para mi, la estrategia correcta es crear índices en las columnas utilizadas en las cláusulas WHERE (color, size, fecha_recogida). Esto permite a la base de datos encontrar registros muy rápidamente, similar al índice de un libro.

## Demostración del Problema con EXPLAIN QUERY PLAN

![alt text](img/Captura%20desde%202025-10-18%2010-56-50.png)

## Creación de Índices

![alt text](img/Captura%20desde%202025-10-18%2010-59-39.png)

## Verificación de la Optimización

![alt text](img/Captura%20desde%202025-10-18%2011-01-21.png)

---

# Copias de Seguridad y Restauración

## Realización de una Copia de Seguridad

![alt text](img/Captura%20desde%202025-10-18%2011-05-21.png)

## Restauración desde la Copia de Seguridad

![alt text](img/Captura%20desde%202025-10-18%2011-07-46.png)

## Automatización de Backups

- 59 23 * * * sqlite3 /home/miguel/Documentos/frutitas.db ".backup '/home/miguel/Documentos/backups/frutitas_$(date +\%Y-\%m-\%d).db'"

![alt text](img/Captura%20desde%202025-10-18%2011-15-40.png)

---
# Preguntas Teóricas

### ¿Cómo impactan los cambios en el PRAGMA en el rendimiento y la seguridad?

- Estos comandos pueden llegar a mejorar significativamente la concurrencia, hacer las escrituras mucho más rápidas a costa de un mayor riesgo de corrupción de la base de datos si hay un corte de energía y ajustar la cantidad de memoria RAM que SQLite usa, pudiendo acelerar consultas repetitivas. En cuanto a la seguridad, es crucial para la integridad de los datos, ya que impide que se inserten o borren datos que romperían las relaciones entre tablas.

### ¿Qué mecanismos adicionales usarías para proteger una base de datos SQLite en un entorno de producción?

- Luego de investigar un poco, usaria mecanismos como "Cifrado en Reposo" (Encryption at Rest), el cual Utiliza extensiones como SQLCipher para cifrar completamente el archivo de la base de datos. Tambien usaria otros mecanismos como "Control de Acceso a Nivel de Sistema de Archivos", "Validación y Saneamiento de Entradas" y "Auditoría y Monitoreo".

### ¿Qué diferencia existe entre los modos de journaling como DELETE, TRUNCATE y WAL en SQLite?

- **DELETE:** Es el modo más seguro. Para hacer un cambio, SQLite copia la información original a un archivo "rollback journal". Si la operación se completa, el journal se borra. Si el sistema falla a mitad, al reiniciar, SQLite ve el journal, deshace los cambios parciales y deja la base de datos en un estado consistente. Es seguro, pero más lento porque requiere escrituras extra.

- **TRUNCATE:** Similar a DELETE, pero en lugar de borrar el archivo journal al final, lo trunca a cero bytes. En algunos sistemas de archivos, esto es más rápido que borrarlo.

- **WAL (Write-Ahead Logging):**  Es el modo de mayor rendimiento y el preferido en aplicaciones modernas. Los cambios no se escriben directamente en el archivo de la base de datos, sino que se añaden a un archivo separado (-wal). Esto permite que los lectores sigan consultando la base de datos original sin ser bloqueados por un escritor.



