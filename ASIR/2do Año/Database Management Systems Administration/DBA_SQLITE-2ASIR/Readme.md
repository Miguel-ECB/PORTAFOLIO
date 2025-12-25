# Administración SQLite: Gestión de Producción Frutícola

- **Descripción:** Ejercicio de administración de base de datos (DBA) para una aplicación de gestión de frutas. El proyecto se centra en la creación, mantenimiento y optimización de una base de datos SQLite que almacena información detallada sobre diferentes tipos de frutas y sus características específicas.

    - **Tecnologías:** SQLite 3, Bash Scripting (Linux), SQL.

    - **Funcionalidades Clave:** 
        - **Modelado de Datos Específico:** Creación de tablas para Mandarinas, Melocotones y Caquis , definiendo tipos de datos y restricciones (Booleanos para "tiene_pelusa" o "tiene_pedunculo").
        - **Automatización de Seguridad:** Script para realizar copias de seguridad automáticas con nomenclatura específica (frutitas_bonitas_bonitas.db) , programado mediante Cron para ejecutarse diariamente a las 23:55. 
        - **Diagnóstico de Rendimiento:** Análisis de logs de consultas (fecha 27 de octubre)  para identificar cuellos de botella y justificar decisiones de optimización.
        - **Configuración Avanzada (Tuning)**: Investigación y configuración de parámetros PRAGMA y modos de Journaling (DELETE, TRUNCATE, WAL) para mejorar la integridad y velocidad de la base de datos.

    - **Aprendizaje:** Profundización en los mecanismos de "Journaling" de SQLite, impacto de los cambios de PRAGMA en el tamaño/rendimiento y automatización de tareas de recuperación en Linux.
