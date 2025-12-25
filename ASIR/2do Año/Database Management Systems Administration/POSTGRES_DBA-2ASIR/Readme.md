# Gestión de Información en PostgreSQL: Equitación Suave

- **Descripción:** Proyecto de administración de base de datos PostgreSQL centrado en la gestión de un centro de equitación. Se abarcan tareas completas de DBA, desde la instalación y configuración del servidor en Linux hasta la implementación de estructuras de datos avanzadas (JSON, Arrays) y gestión de roles mediante entorno gráfico (pgAdmin) y consola.

    - **Tecnologías:** PostgreSQL, pgAdmin, SQL (DDL, DML, DCL), JSON.

    - **Funcionalidades Clave:** 
        - **Infraestructura de Datos:** Creación de base de datos EquitacionSuave con relaciones 1:N entre jinetes y caballos (Foreign Keys).

        - **Gestión de Identidad (Roles):** Implementación de jerarquía de seguridad con usuarios específicos: administrador (admin_equitacion), consulta (user_consultas) y solo lectura (user_lectura), asignando privilegios granulares (SELECT, INSERT, UPDATE, DELETE). 

        - **Administración Híbrida:** Uso combinado de la consola psql para operaciones de bajo nivel y la interfaz gráfica pgAdmin para gestión visual de esquemas y usuarios.

        - **Funcionalidades No-SQL y Avanzadas:** Integración de campos modernos como JSON para almacenar detalles de competencias y ARRAYS para listas de certificaciones.
        
        - **Optimización y Herencia:** Implementación de Vistas Materializadas (vista_jinetes_avanzados) para optimizar consultas frecuentes y uso de Herencia de Tablas para modelar jerarquías de equipos (equipo_base -> equipo_de_salto).

    - **Aprendizaje:** Instalación de servicios en Linux, manejo de tipos de datos complejos en bases de datos relacionales, administración de vistas materializadas y herencia de tablas como alternativa al modelado tradicional.