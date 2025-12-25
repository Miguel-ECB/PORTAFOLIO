# Optimización y Tuning de Servidores MySQL/MariaDB 

- **Descripción:** Simulación de un rol de DBA (Database Administrator) para una consultora informática. El proyecto consiste en el análisis y configuración a medida de instancias MySQL/MariaDB para tres clientes con necesidades de negocio distintas. Se han ajustado variables de sistema críticas para optimizar el rendimiento, la gestión de memoria y la seguridad.

    - **Tecnologías:** MySQL / MariaDB, Linux (Edición de ficheros de configuración), Markdown.
    - **Funcionalidades Clave:**
        - **Tuning de Rendimiento:** Cálculo y ajuste de memoria (innodb_buffer_pool_size, tmp_table_size) y caché según la carga de trabajo. 
        - **Gestión de Concurrencia:** Configuración de límites de conexiones (max_connections) y caché de tablas abiertas.
        - **Auditoría y Logs:** Implementación de slow_query_log para detectar cuellos de botella y configuración de logs binarios para recuperación.
        - **Persistencia:** Modificación directa de ficheros de configuración (my.cnf / 50-server.cnf) para hacer permanentes los cambios.

- **Aprendizaje:** Comprensión profunda de la arquitectura interna de MySQL (InnoDB, Buffers, Threads) y cómo traducir requisitos de negocio (entrevistas) en configuraciones técnicas precisas.