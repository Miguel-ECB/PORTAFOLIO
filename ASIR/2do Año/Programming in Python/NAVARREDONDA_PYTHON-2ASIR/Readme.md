# Simulador de Tarifas: Parque de Atracciones Navarredonda

- **Descripción:** Desarrollo de un algoritmo en Python para la gestión automática de venta de entradas. El programa calcula el precio final de acceso basándose en un sistema complejo de reglas de negocio jerarquizadas. Combina la entrada de datos manual por parte del usuario con la obtención automática de variables del sistema (fechas y probabilidad).

- **Tecnologías:** Python 3, Librería datetime (fecha del sistema), Librería random (probabilidad estadística).

- **Funcionalidades Clave:**
    - **Gestión de Parámetros Mixtos:** Procesamiento de 7 variables de entrada, incluyendo datos demográficos (edad, altura, residencia), temporales (día de la semana, laborable/festivo) y de fidelización (socio).
    
    - **Algoritmo de Prioridad:** Implementación de un motor de decisiones con 12 reglas de modificación de precio (descuentos y recargos) que se evalúan en estricto orden de prioridad (desde gratuidad total hasta recargos por fin de semana).

    - **Automatización de Datos:** 
        - Detección automática del día de la semana actual mediante el sistema.
        - Simulación probabilística del estado de "Socio" (80% de probabilidad de serlo mediante random).

    - **Salida Visual (ASCII Art):** Renderizado del precio final utilizando caracteres ASCII gigantes para mejorar la experiencia de usuario en terminal.

- **Aprendizaje:** Manejo avanzado de estructuras de control condicional (if-elif-else) anidadas, manipulación de tipos de datos flotantes y enteros, y uso de módulos estándar de Python para simulación y fechas.

