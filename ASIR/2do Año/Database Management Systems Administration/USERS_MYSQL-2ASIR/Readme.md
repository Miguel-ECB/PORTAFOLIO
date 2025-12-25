# Gestión de Identidad y Privilegios (RBAC) en MySQL

- **Descripción:** Implementación de un esquema de seguridad robusto para una base de datos relacional ("Red Social"). El proyecto abarca desde el diseño del modelo entidad-relación hasta la administración granular de usuarios y permisos. Se simula un entorno real donde distintos roles requieren diferentes niveles de acceso y restricción geográfica (localhost vs dominio).

    - **Tecnologías:** MariaDB/MySQL Server, Kali Linux, SQL (DDL para estructura, DCL para control).
    - **Funcionalidades Clave:** 
        - **Modelado Relacional:** Despliegue de esquema BBDD con integridad referencial (Claves Foráneas) entre tablas usuario, grupo y comentario.
        - **Seguridad de Acceso:** Creación de usuarios con restricciones de host específicas (acceso local vs remoto/dominio lasalleinstitucion.es).
        - **Gestión de Privilegios (Least Privilege):** Asignación granular de permisos (SELECT, UPDATE, DELETE) según el rol del usuario, evitando accesos no autorizados.
        - **Delegación de Roles:** Implementación de la cláusula WITH GRANT OPTION para permitir a usuarios avanzados gestionar permisos de terceros.
        - **Auditoría y Mantenimiento:** Modificación directa de la tabla de sistema mysql.user, gestión de contraseñas y comprensión crítica del comando FLUSH PRIVILEGES.

    - **Aprendizaje:** Dominio del lenguaje DCL (Data Control Language) y administración avanzada de la seguridad interna del motor de base de datos.