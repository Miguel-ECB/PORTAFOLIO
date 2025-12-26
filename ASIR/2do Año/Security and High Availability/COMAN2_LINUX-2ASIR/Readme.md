# Administración Linux: Gestión de Permisos y Búsquedas Avanzadas

- **Descripción:** Proyecto práctico de administración de sistemas Linux enfocado en la seguridad del sistema de archivos y la auditoría de datos. Se simulan escenarios multiusuario para implementar políticas de control de acceso robustas (Standard y Special Permissions) y se resuelven retos de localización de información crítica en logs y directorios mediante comandos de búsqueda avanzada.

- **Tecnologías:** Linux (Bash), ACLs, Regex, Herramientas CLI (grep, find, locate).

- **Funcionalidades Clave:**
    - **Control de Acceso Multiusuario:** Configuración de permisos de lectura/escritura/ejecución (rwx) para grupos de desarrollo y usuarios específicos (chmod, chown).

    - **Permisos Especiales:** Implementación de SGID para herencia de grupos en directorios colaborativos y Sticky Bit para proteger el borrado de archivos en directorios temporales compartidos.

    - **Seguridad Granular:** Endurecimiento de la creación de archivos mediante umask (restrictivo 077) y uso de ACLs (Listas de Control de Acceso) para permisos fuera del modelo estándar usuario-grupo-otros.

    - **Auditoría y Forense:** Uso avanzado de grep con expresiones regulares para filtrar logs de errores, y find para localizar archivos por metadatos (tamaño, fecha de modificación, extensión).

- **Aprendizaje:** Gestión profunda de la seguridad a nivel de inodo en sistemas Linux, comprensión de la máscara de usuario (umask) y dominio de flujos de tuberías para la búsqueda de patrones de texto.