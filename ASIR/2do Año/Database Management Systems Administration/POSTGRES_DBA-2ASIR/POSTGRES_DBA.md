# Índice
- [1. Instalación de PostgreSQL en Linux](#1-Instalación-de-PostgreSQL-en-Linux)
  - [1.1. Actualiza los repositorios del sistema e instala PostgreSQL.](#11-Actualiza-los-repositorios-del-sistema-e-instala-PostgreSQL)
  - [1.2. Inicia el servicio de PostgreSQL y configura el servicio para que se inicie automáticamente.](#12-Inicia-el-servicio-de-PostgreSQL-y-configura-el-servicio-para-que-se-inicie-automáticamente)
  - [1.3. Cambia al usuario postgres y abre la consola de PostgreSQL.](#13-Cambia-al-usuario-postgres-y-abre-la-consola-de-PostgreSQL)
- [2. Creación de la Base de Datos y Tablas](#2-Creación-de-la-Base-de-Datos-y-Tablas)
  - [Paso 1: Crear la base de datos](#Paso-1-Crear-la-base-de-datos)
    - [2.1.1. Conéctate a la consola de PostgreSQL como el usuario postgres.](#211-Conéctate-a-la-consola-de-PostgreSQL-como-el-usuario-postgres)
    - [2.1.2. Crea una base de datos llamada EquitacionSuave y conéctate a ella.](#212-Crea-una-base-de-datos-llamada-EquitacionSuave-y-conéctate-a-ella)
  - [Paso 2: Crear las tablas principales](#Paso-2-Crear-las-tablas-principales)
    - [2.2.1. Crea una tabla llamada jinetes.](#221-Crea-una-tabla-llamada-jinetes)
    - [2.2.2. Crea una tabla llamada caballos.](#222-Crea-una-tabla-llamada-caballos)
- [3. Gestión de Usuarios y Roles](#3-Gestión-de-Usuarios-y-Roles)
  - [Ejercicio 1: Crear usuarios con distintos niveles de permisos](#Ejercicio-1-Crear-usuarios-con-distintos-niveles-de-permisos)
    - [3.1.1. Crea un usuario admin_equitacion...](#311-Crea-un-usuario-admin_equitacion)
    - [3.1.2. Crea un usuario user_consultas...](#312-Crea-un-usuario-user_consultas)
    - [3.1.3. Crea un usuario user_lectura...](#313-Crea-un-usuario-user_lectura)
  - [Ejercicio 2: Asignar permisos](#Ejercicio-2-Asignar-permisos)
    - [3.2.1. Conéctate a la base de datos EquitacionSuave.](#321-Conéctate-a-la-base-de-datos-EquitacionSuave)
    - [3.2.2. Asigna permisos de consulta (SELECT) a user_consultas...](#322-Asigna-permisos-de-consulta-SELECT-a-user_consultas)
    - [3.2.3. Configura permisos para user_lectura...](#323-Configura-permisos-para-user_lectura)
    - [3.2.4. Da permisos completos (SELECT, INSERT, UPDATE, DELETE) al usuario admin_equitacion...](#324-Da-permisos-completos-SELECT-INSERT-UPDATE-DELETE-al-usuario-admin_equitacion)
- [4. Inserción de Datos en las Tablas](#4-Inserción-de-Datos-en-las-Tablas)
  - [4.1. Inserta varios registros en la tabla jinetes...](#41-Inserta-varios-registros-en-la-tabla-jinetes)
  - [4.2. Inserta varios registros en la tabla caballos...](#42-Inserta-varios-registros-en-la-tabla-caballos)
- [5. Consultas de Datos](#5-Consultas-de-Datos)
  - [5.1. Realiza una consulta para obtener todos los registros de la tabla jinetes.](#51-Realiza-una-consulta-para-obtener-todos-los-registros-de-la-tabla-jinetes)
  - [5.2. Realiza una consulta que muestre solo los jinetes con más de dos años de experiencia.](#52-Realiza-una-consulta-que-muestre-solo-los-jinetes-con-más-de-dos-años-de-experiencia)
  - [5.3. Realiza una consulta para obtener los nombres de los caballos junto con los nombres de sus respectivos jinetes.](#53-Realiza-una-consulta-para-obtener-los-nombres-de-los-caballos-junto-con-los-nombres-de-sus-respectivos-jinetes)
- [ESTADO DE LAS TABLAS 1](#ESTADO-DE-LAS-TABLAS-1)
- [6. Actualización y Eliminación de Datos](#6-Actualización-y-Eliminación-de-Datos)
  - [6.1. Realiza una actualización en la tabla jinetes para cambiar la categoría de un jinete.](#61-Realiza-una-actualización-en-la-tabla-jinetes-para-cambiar-la-categoría-de-un-jinete)
  - [6.2. Realiza una eliminación en la tabla jinetes para borrar un registro específico.](#62-Realiza-una-eliminación-en-la-tabla-jinetes-para-borrar-un-registro-específico)
- [7. Uso de pgAdmin para Administración Visual](#7-Uso-de-pgAdmin-para-Administración-Visual)
  - [Paso 1: Acceso a pgAdmin y conexión al servidor PostgreSQL](#Paso-1-Acceso-a-pgAdmin-y-conexión-al-servidor-PostgreSQL)
  - [Paso 2: Crear la base de datos EquitacionSuave](#Paso-2-Crear-la-base-de-datos-EquitacionSuave)
  - [Paso 3: Crear las tablas jinetes y caballos](#Paso-3-Crear-las-tablas-jinetes-y-caballos)
    - [7.3.1. Crear la tabla jinetes](#731-Crear-la-tabla-jinetes)
    - [7.3.2. Crear la tabla caballos](#732-Crear-la-tabla-caballos)
  - [Paso 4: Insertar y consultar datos](#Paso-4-Insertar-y-consultar-datos)
  - [Paso 5: Crear y administrar usuarios y roles en pgAdmin](#Paso-5-Crear-y-administrar-usuarios-y-roles-en-pgAdmin)
    - [7.5.1. Crear los usuarios](#751-Crear-los-usuarios)
    - [7.5.2. Asignar permisos](#752-Asignar-permisos)
- [8. Características Avanzadas de PostgreSQL](#8-Características-Avanzadas-de-PostgreSQL)
  - [Ejercicio 1: Uso de JSON en la tabla jinetes](#Ejercicio-1-Uso-de-JSON-en-la-tabla-jinetes)
  - [Ejercicio 2: Uso de arreglos (ARRAYS) para certificaciones](#Ejercicio-2-Uso-de-arreglos-ARRAYS-para-certificaciones)
  - [Ejercicio 3: Creación de Vistas Materializadas](#Ejercicio-3-Creación-de-Vistas-Materializadas)
  - [Ejercicio 4: Herencia en Tablas](#Ejercicio-4-Herencia-en-Tablas)

---

# 1. Instalación de PostgreSQL en Linux

## 1.1. Actualiza los repositorios del sistema e instala PostgreSQL.

- **sudo apt update**: Actualice los paquetes
- **sudo apt install postgresql postgresql-contrib**: Para asegurarme, instale el servidor PostgreSQL y el paquete 'contrib' (Es un repositorio de código fuente que contiene extensiones y utilidades que no forman parte del código principal de PostgreSQL).

## 1.2. Inicia el servicio de PostgreSQL y configura el servicio para que se inicie automáticamente.

- **sudo systemctl start postgresql**: Inicie el servicio.
- **sudo systemctl status postgresql**: Comprobe el estado del servicio.
- **sudo systemctl enable postgresql**: Habilite el inicio automatico.

## 1.3. Cambia al usuario postgres y abre la consola de PostgreSQL.

![alt text](img/Captura%20desde%202025-11-14%2013-52-42.png)

---

# 2. Creación de la Base de Datos y Tablas

## Paso 1: Crear la base de datos

### 2.1.1. Conéctate a la consola de PostgreSQL como el usuario postgres.

- Ya se hizo en el apartado 1.3

### 2.1.2. Crea una base de datos llamada EquitacionSuave y conéctate a ella.

![alt text](img/Captura%20desde%202025-11-14%2014-03-41.png)

## Paso 2: Crear las tablas principales

### 2.2.1. Crea una tabla llamada jinetes.

![alt text](img/Captura%20desde%202025-11-14%2014-08-11.png)

### 2.2.2. Crea una tabla llamada caballos.

![alt text](img/Captura%20desde%202025-11-14%2014-14-37.png)

---

# 3. Gestión de Usuarios y Roles

## Ejercicio 1: Crear usuarios con distintos niveles de permisos

### 3.1.1. Crea un usuario admin_equitacion...

![alt text](img/Captura%20desde%202025-11-14%2018-53-35.png)

- He usado CREATE ROLE porque es un alias de CREATE USER. La única diferencia entre los dos comandos es que CREATE USER asume por defecto que el rol que se está creando si podrá iniciar sesión, mientras que CREATE ROLE asume que no podrá. Al usar CREATE ROLE, me veo obligado a especificar si este rol puede o no iniciar sesión. Añadí WITH LOGIN explícitamente, porque si hubiera usado CREATE USER, el permiso LOGIN estaría implícito. "Ser explícito siempre es mejor que ser implícito".

### 3.1.2. Crea un usuario user_consultas...

![alt text](img/Captura%20desde%202025-11-14%2019-01-21.png)

### 3.1.3. Crea un usuario user_lectura...

![alt text](img/Captura%20desde%202025-11-14%2019-02-35.png)

## Ejercicio 2: Asignar permisos

### 3.2.1. Conéctate a la base de datos EquitacionSuave.

- \c equitacionsuave

### 3.2.2. Asigna permisos de consulta (SELECT) a user_consultas...

![alt text](img/Captura%20desde%202025-11-14%2019-07-32.png)

### 3.2.3. Configura permisos para user_lectura...

![alt text](img/Captura%20desde%202025-11-14%2019-08-57.png)

### 3.2.4. Da permisos completos (SELECT, INSERT, UPDATE, DELETE) al usuario admin_equitacion...

![alt text](img/Captura%20desde%202025-11-14%2019-14-46.png)

- Para poder usar los campos SERIAL (autoincrementados), también necesita permisos sobre las "secuencias" que los generan.

![alt text](img/Captura%20desde%202025-11-14%2019-19-44.png)

---

# 4. Inserción de Datos en las Tablas

- \c equitacionsuave

## 4.1. Inserta varios registros en la tabla jinetes...

![alt text](img/Captura%20desde%202025-11-14%2019-24-34.png)

- No inserté el id porque es SERIAL y se genera automáticamente.

## 4.2. Inserta varios registros en la tabla caballos...

![alt text](img/Captura%20desde%202025-11-14%2019-29-05.png)

---

# 5. Consultas de Datos

## 5.1. Realiza una consulta para obtener todos los registros de la tabla jinetes.

![alt text](img/Captura%20desde%202025-11-14%2019-30-36.png)

## 5.2. Realiza una consulta que muestre solo los jinetes con más de dos años de experiencia.

![alt text](img/Captura%20desde%202025-11-14%2019-32-03.png)

## 5.3. Realiza una consulta para obtener los nombres de los caballos junto con los nombres de sus respectivos jinetes.

![alt text](img/Captura%20desde%202025-11-14%2019-34-57.png)

- El INNER JOIN es una forma de combinar filas de dos tablas basándose en una condición que ambas compartan, solo devuelve los resultados que tienen coincidencias en ambas tablas.

---

# ESTADO DE LAS TABLAS 1


![alt text](img/Captura%20desde%202025-11-14%2019-46-31.png)

---

# 6. Actualización y Eliminación de Datos

## 6.1. Realiza una actualización en la tabla jinetes para cambiar la categoría de un jinete.

![alt text](img/Captura%20desde%202025-11-14%2019-40-39.png)

## 6.2. Realiza una eliminación en la tabla jinetes para borrar un registro específico.

- Al crear la tabla caballos, especifiqué ON DELETE SET NULL. Esto significa que al borrar a Javier, su caballo Bambi no se borrará, sino que su columna jinete_id se pondrá en NULL.

![alt text](img/Captura%20desde%202025-11-14%2019-53-41.png)

---

# 7. Uso de pgAdmin para Administración Visual

- pgAdmin es una aplicación/herramienta con interfaz gráfica que se conecta al servidor PostgreSQL para gestionarlo de forma visual.

- No se puede instalar con apt por un conflicto de dependencias. El paquete pgadmin4 fue creado para funcionar con Python 3.12 y Kali Purple usa Python 3.11.

- Usaré Docker, el cual es como una caja mágica que evita este problema. Docker descarga una imagen pre-fabricada de pgAdmin que ya trae su propio Python 3.12.

- **Pasos para su instalción**: 
    - sudo apt install docker.io
    - sudo systemctl start docker
    - sudo usermod -aG docker $USER
        - En este punto debemos cerrar sesion con el usuario y volver a iniciar.
    - docker run --name pgadmin-servidor \
    - -p 8080:80 \
    - -e "PGADMIN_DEFAULT_EMAIL=mike@dominio.com" \
    - -e "PGADMIN_DEFAULT_PASSWORD=mike" \
    - -d dpage/pgadmin4
        - Accedemos en http://127.0.0.1:8080

- **Establecer contraseña para el usuario postgres**: ALTER USER postgres WITH PASSWORD 'adm';

## Paso 1: Acceso a pgAdmin y conexión al servidor PostgreSQL

- **Primero**:  Configurar PostgreSQL para que acepte nuestra conexión.
    - sudo -i -u postgres
    - psql
    - SHOW config_file;
        - /etc/postgresql/17/main/postgresql.conf
        - sudo nano /etc/postgresql/17/main/postgresql.conf
        - Buscar la línea que dice listen_addresses = 'localhost' y cambiarla por listen_addresses = '*'
    - SHOW hba_file;
        - /etc/postgresql/17/main/pg_hba.conf
        - sudo nano /etc/postgresql/17/main/postgresql.conf
        - Ir hasta el final del archivo y añadir host    all             all             172.17.0.0/16           md5
    - sudo systemctl restart postgresql
    - Utilizaremos commo Nombre/Dirección de servidor (Host name/address): 172.17.0.1

![alt text](img/Captura%20desde%202025-11-14%2022-13-49.png)

## Paso 2: Crear la base de datos EquitacionSuave

  En el panel izquierdo "Browser", buscar tu servidor (MiServidoKali).

- Hacer clic derecho sobre Databases.

- Seleccionar Crear -> Base de Datos

- En la pestaña General, escribir EquitacionSuave en Database.

- En Dueño, asegúrars de que postgres esté seleccionado.

- Hacer clic en Save.

![alt text](img/Captura%20desde%202025-11-14%2022-26-44.png)

## Paso 3: Crear las tablas jinetes y caballos

- En el panel izquierdo, navegar hasta l base de datos: EquitacionSuave -> Esquemas -> public.

- Hacer clic derecho sobre Tablas y selecciona Crear -> Tablas.

![alt text](img/Captura%20desde%202025-11-14%2022-33-12.png)

###  7.3.1. Crear la tabla jinetes

![alt text](img/Captura%20desde%202025-11-18%2012-37-00.png)

### 7.3.2. Crear la tabla caballos

![alt text](img/Captura%20desde%202025-11-18%2013-48-06.png)

## Paso 4: Insertar y consultar datos

- JINETES

    ![alt text](img/Captura%20desde%202025-11-18%2014-13-04.png)

    ![alt text](img/Captura%20desde%202025-11-18%2014-19-04.png)

- CABALLOS

    ![alt text](img/Captura%20desde%202025-11-18%2014-14-46.png)

    ![alt text](img/Captura%20desde%202025-11-18%2014-16-34.png)

## Paso 5: Crear y administrar usuarios y roles en pgAdmin

### 7.5.1. Crear los usuarios

- admin_equitacion2

    ![alt text](img/Captura%20desde%202025-11-20%2012-11-38.png)

- user_consultas2

    ![alt text](img/Captura%20desde%202025-11-19%2010-17-37.png)

- user_lectura2

    ![alt text](img/Captura%20desde%202025-11-20%2012-17-54.png)

### 7.5.2. Asignar permisos

- JINETES
  - admin_equitacion2

    ![alt text](img/Captura%20desde%202025-11-20%2012-07-36.png)

  - user_consultas2

    ![alt text](img/Captura%20desde%202025-11-20%2012-14-25.png)

  - user_lectura2

    ![alt text](img/Captura%20desde%202025-11-20%2012-16-57.png)

- CABALLOS
  - admin_equitacion2

    ![alt text](img/Captura%20desde%202025-11-20%2012-21-58.png)

  - user_consultas2

    ![alt text](img/Captura%20desde%202025-11-20%2012-23-37.png)

  - user_lectura2

    ![alt text](img/Captura%20desde%202025-11-20%2012-24-34.png)

--- 

# 8. Características Avanzadas de PostgreSQL

## Ejercicio 1: Uso de JSON en la tabla jinetes

- Añadir la columna:

  - detalles_competencias

    ![alt text](img/Captura%20desde%202025-11-20%2012-44-00.png)

- Insertar datos:

    ![alt text](img/Captura%20desde%202025-11-20%2013-47-46.png)

    ![alt text](img/Captura%20desde%202025-11-20%2013-48-54.png)

## Ejercicio 2: Uso de arreglos (ARRAYS) para certificaciones

- Añadir la columna:
  
  - certificaciones
  
    ![alt text](img/Captura%20desde%202025-11-20%2013-52-35.png)

- Actualizar datos:

    ![alt text](img/Captura%20desde%202025-11-20%2014-00-34.png)

    ![alt text](img/Captura%20desde%202025-11-20%2014-05-01.png)

## Ejercicio 3: Creación de Vistas Materializadas

- En el panel izquierdo, EquitacionSuave -> Esquemas -> public.

- Buscar Vistas Materializadas. Clic derecho -> Crear -> Vista Materializada....

- Pestaña General -> Nombre: vista_jinetes_avanzados.
  
![alt text](img/Captura%20desde%202025-11-20%2014-12-46.png)

![alt text](img/Captura%20desde%202025-11-20%2014-09-06.png)

  - Funcionamiento:

    ![alt text](img/Captura%20desde%202025-11-20%2014-18-04.png)

## Ejercicio 4: Herencia en Tablas

- Creacion de Equipo Base y Equipo de Salto:

 ![alt text](img/Captura%20desde%202025-11-20%2014-20-42.png)

- Insertar datos en Equipo de Salto:

 ![alt text](img/Captura%20desde%202025-11-20%2014-23-29.png)

- TABLA Equipo de Salto:
  
    ![alt text](img/Captura%20desde%202025-11-20%2014-26-34.png)

- TABLA Equipo Base:

    ![alt text](img/Captura%20desde%202025-11-20%2014-27-48.png)




    
















