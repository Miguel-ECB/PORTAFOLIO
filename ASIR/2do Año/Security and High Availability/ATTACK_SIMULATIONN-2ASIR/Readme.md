# Simulación de Ciberataques: Auditoría de Fuerza Bruta (SSH & HTTP)

- **Descripción:** Proyecto de seguridad ofensiva (Red Teaming) realizado en Kali Purple. El objetivo es simular vectores de ataque basados en fuerza bruta para comprender la importancia de las políticas de contraseñas robustas y la monitorización de logs. Se abarca desde la generación de diccionarios personalizados hasta la explotación controlada de servicios de red y aplicaciones web.

- **Tecnologías:** Kali Purple, Hydra, Pydictor, Dymerge, OpenSSH, Apache, DVWA (Damn Vulnerable Web App).

- **Funcionalidades Clave:**
    - **Generación de Wordlists:** Creación de diccionarios personalizados (numéricos y de mayúsculas) mediante Pydictor y fusión de listas de palabras con Dymerge para optimizar los ataques.
    
    - **Ataque a Infraestructura (SSH):** Configuración de un servidor OpenSSH objetivo y ejecución de ataques de fuerza bruta automatizados con Hydra. Análisis posterior de logs del sistema para identificar intentos de intrusión.

    - **Ataque a Aplicaciones Web (HTTP):** Despliegue de entorno vulnerable (DVWA) en servidor Apache local. Identificación de parámetros de formularios de login y ejecución de ataques de diccionario contra paneles de autenticación web.
    
    - **Análisis y Mitigación:** Estudio de los resultados obtenidos para proponer medidas defensivas contra ataques de fuerza bruta en entornos reales.

- **Aprendizaje:** Uso de herramientas de auditoría de contraseñas, gestión de diccionarios de ataque, comprensión del protocolo HTTP/SSH desde la perspectiva del atacante y análisis forense básico de logs.