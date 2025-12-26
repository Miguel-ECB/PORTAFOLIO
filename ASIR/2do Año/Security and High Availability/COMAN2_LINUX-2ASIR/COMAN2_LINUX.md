# FASE 1: Gestión de Permisos

## Ejercicio 1: Gestión de Permisos en un Entorno Multiusuario

### Crear los usuarios:

![alt text](img/image.png)

### Crear el grupo y añadir los usuarios:

![alt text](img/Captura%20desde%202025-10-08%2014-07-57.png)

### Crear el directorio del proyecto y asignar el grupo:

![alt text](img/Captura%20desde%202025-10-08%2014-10-17.png)


### Aplicar los permisos y verificarlos:

![alt text](img/Captura%20desde%202025-10-08%2014-12-56.png)


### Cambiar el propietario del directorio a monon1 y ajustar los permisos para el grupo:

- Se quiere que el grupo deveria2 solo pueda leer y ejecutar, pero no escribir.

![alt text](img/Captura%20desde%202025-10-08%2014-22-23.png)

---

## Respuestas a las preguntas:

### ¿Que sucede si un usuario fuera del grupo deveria2 intenta acceder al directorio? 

- Recibirá un error de "Permiso denegado". La última cifra de los permisos es 0, lo que significa que la categoría "otros" no tiene ningún permiso, ni siquiera para entrar al directorio.

### ¿Qué sucede si tronko2 intenta modificar un archivo dentro del directorio?

- Recibirá un error de "Permiso denegado". tronko2 pertenece al grupo deveria2, y los permisos para el grupo son r-x (lectura y ejecución), pero no w (escritura). Por lo tanto, puede listar el contenido del directorio pero no crear, modificar o eliminar archivos dentro de él.

---

## Ejercicio 2: Control de Acceso con el Bit SGID

### Crear el subdirectorio, asignar el grupo, aplicar el bit SGID y verificar los permisos

![alt text](img/Captura%20desde%202025-10-08%2020-37-49.png)

![alt text](img/Captura%20desde%202025-10-08%2020-38-51.png)

![alt text](img/Captura%20desde%202025-10-08%2020-39-41.png)

### Prueba de creación de archivos:

![alt text](img/Captura%20desde%202025-10-08%2021-33-48.png)

---

## Respuestas a las preguntas:

### ¿Cuál es el grupo propietario del archivo creado por tronko2?

- El grupo propietario es deveria2, no el grupo primario de tronko2. Esto ocurre gracias al bit SGID en el directorio contenedor.

### ¿Qué ventaja aporta el bit SGID en un entorno de colaboración?

- Asegura que todos los archivos del proyecto compartido mantengan una propiedad de grupo consistente, sin importar qué miembro del equipo los cree. Esto evita problemas de permisos y simplifica la gestión del acceso.

--- 

## Ejercicio 3: Gestión de Archivos Temporales con Sticky Bit

### Crear el directorio, darle permisos abiertos.

![alt text](img/image2.png)

### Aplicar el Sticky Bit y verificar permisos.

![alt text](img/Captura%20desde%202025-10-09%2021-54-57.png)

### Prueba de creación y borrado

![alt text](img/Captura%20desde%202025-10-09%2021-56-45.png)

---

## Respuestas a las preguntas:

### ¿Pudo birmingan3 eliminar el archivo de monon1? ¿Por qué?

- No. El "sticky bit" en un directorio significa que solo el propietario del archivo (o el propietario del directorio, o root) puede eliminar o renombrar un archivo dentro de él, aunque otros usuarios tengan permisos de escritura en el directorio.

### ¿Cómo ayuda el sticky bit a mejorar la seguridad en directorios compartidos?

- Previene que los usuarios borren o modifiquen accidental o maliciosamente los archivos de otros en un espacio de trabajo común, garantizando la integridad de los datos de cada usuario.

---

## Ejercicio 4: Configuración de umask

### Verificar, cambiar umask y crear un archivo de prueba

![alt text](img/Captura%20desde%202025-10-09%2022-05-43.png)

### Restaurar el umask

![alt text](img/Captura%20desde%202025-10-09%2022-08-14.png)

---

## Respuestas a las preguntas:

### ¿Cómo afectó el valor de umask a los permisos de los nuevos archivos?

- umask 077 eliminó todos los permisos para el grupo y para otros en el archivo recién creado, dejándolo con permisos 600 (rw-------). El archivo es completamente privado para su propietario.

### ¿Cómo podrías usar umask para mejorar la seguridad?

- Estableciendo un umask restrictivo (como 077 o 027) por defecto para los usuarios (por ejemplo, en el archivo /etc/profile), se asegura que los archivos creados no sean accidentalmente legibles o modificables por otros.

---

## Ejercicio 5: Implementación de ACLs

### Crear el entorno y aplicar la ACL 

![alt text](img/Captura%20desde%202025-10-09%2022-14-12.png)

### Verificar la ACL

![alt text](img/Captura%20desde%202025-10-09%2022-16-11.png)

---

---

# FASE 2: Reto de Búsquedas Avanzadas

## Crear la estructura

![alt text](img/Captura%20desde%202025-10-09%2022-20-33.png)

## Rellenar el contenido y verificar la creación

![alt text](img/Captura%20desde%202025-10-09%2022-22-21.png)

![alt text](img/Captura%20desde%202025-10-09%2022-25-51.png)

---

## Ejercicios con grep (Búsqueda de Contenido)

### Buscar Errores Críticos

![alt text](img/Captura%20desde%202025-10-09%2022-29-10.png)

### Buscar la Configuración de Producción

![alt text](img/Captura%20desde%202025-10-09%2022-30-34.png)

### Contar fallos y lineas sin comentarios

![alt text](img/Captura%20desde%202025-10-09%2022-32-28.png)

## Ejercicios con find (Búsqueda de Archivos por Propiedad)

### Archivos de Configuración y Directorios Específicos

![alt text](img/Captura%20desde%202025-10-09%2022-39-37.png)

### Archivos Grandes (Simulación)

![alt text](img/Captura%20desde%202025-10-09%2022-42-52.png)

![alt text](img/Captura%20desde%202025-10-09%2022-41-54.png)

## Archivos Modificados Recientemente

![alt text](img/Captura%20desde%202025-10-09%2022-45-38.png)

## Ejercicios con locate (Búsqueda Rápida en Base de Datos)

### Busqueda general

![alt text](img/Captura%20desde%202025-10-09%2022-49-10.png)

### Busqueda sin destincion

![alt text](img/Captura%20desde%202025-10-09%2022-51-02.png)







