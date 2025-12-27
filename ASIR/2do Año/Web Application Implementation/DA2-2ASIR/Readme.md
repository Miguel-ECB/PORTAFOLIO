# Desarrollo Web con PHP: Simulador de Dados RPG

- **Descripción:** Aplicación web dinámica desarrollada en PHP que simula un juego de azar basado en dados de rol. El proyecto separa la lógica en dos capas: una interfaz de entrada (da01.php) para la configuración de la partida y un script de procesamiento (da02.php) que ejecuta la lógica del juego, genera resultados aleatorios y determina el ganador comparando la puntuación con la del oponente.

- **Tecnologías:** PHP (Procesamiento del lado del servidor), HTML5, CSS3.

- **Funcionalidades Clave:**
    - **Procesamiento de Formularios:** Captura y validación de datos enviados mediante métodos HTTP (POST/GET) desde la interfaz de usuario.
    - **Lógica de Juego Personalizable:** Algoritmo que permite seleccionar la cantidad de dados (1 a 3) y el tipo de dado según sus caras (d4, d6, d8, d10, d12, d20), adaptando la generación de números aleatorios.
    - **Generación Dinámica de Resultados:** Renderizado condicional de imágenes según el tipo de dado seleccionado (ej: tetraedros para 4 caras) y cálculo automático de la suma total.
    - **Evaluación de Condiciones de Victoria:** Comparación lógica entre la suma obtenida y los "Puntos Oponente" ingresados, mostrando alertas visuales de victoria o derrota.

- **Aprendizaje:** Manejo de variables de formulario, uso de funciones matemáticas de aleatoriedad (rand/mt_rand), estructuras de control de flujo y separación de la vista y el controlador en scripts básicos. 