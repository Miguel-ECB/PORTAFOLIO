# Configuración Inicial: Base de Datos

![alt text](img/Captura%20desde%202025-10-04%2015-57-51.png)

![alt text](img/Captura%20desde%202025-10-04%2015-59-12.png)

![alt text](img/Captura%20desde%202025-10-04%2016-01-46.png)

--- 

## 1. Indica el nombre de las tablas que aparecen en tu base de datos mysql

![alt text](img/Captura%20desde%202025-10-04%2016-03-39.png)

---

## 2. 3. 4. Crear los usuarios Bego, Mati y Mifli

![alt text](img/Captura%20desde%202025-10-04%2016-09-27.png)

---

## 5. Muestra los usuarios creados

![alt text](img/Captura%20desde%202025-10-04%2016-11-00.png)

--- 

## 6. Muestra el usuario con el que te has logado

![alt text](img/Captura%20desde%202025-10-04%2016-12-51.png)

## 7. Cambia la contraseña de Mati

![alt text](img/Captura%20desde%202025-10-04%2016-15-17.png)

---

## 8. Muestra los privilegios del usuario Bego

![alt text](img/Captura%20desde%202025-10-04%2016-17-30.png)

---

## 9. Muestra los privilegios del usuario actual

![alt text](img/Captura%20desde%202025-10-04%2016-18-51.png)

---

## 10. Concede permisos a Bego

![alt text](img/Captura%20desde%202025-10-04%2016-19-55.png)

---

## 11. Conéctate como Bego y lanza sentencias

![alt text](img/Captura%20desde%202025-10-04%2016-22-55.png)

---

## 12. Concede permisos a Mati

![alt text](img/Captura%20desde%202025-10-04%2016-24-50.png)

---

# 13. Crea a Crispula con permisos especiales

![alt text](img/Captura%20desde%202025-10-04%2016-26-54.png)

![alt text](img/Captura%20desde%202025-10-04%2016-48-25.png)

![alt text](img/Captura%20desde%202025-10-04%2016-56-11.png)

- Tuve que hacer cambios, ya que no pude conectarme con el usuario 'Crispula'@'lasalleinstitucion.es' porque la seguridad de MySQL exige que coincidan tanto el nombre de usuario como el lugar de conexión (host). Aunque el nombre y contraseña eran correctos, cree el usuario para que solo pudiera acceder desde el host lasalleinstitucion.es.

---

## 14. 15. Conéctate como Crispula e interactúa

![alt text](img/Captura%20desde%202025-10-04%2016-58-49.png)

---

## 16. 17. Conceder más permisos

![alt text](img/Captura%20desde%202025-10-04%2017-00-44.png)

---

## 19. Concede permisos totales a Mifli

![alt text](img/Captura%20desde%202025-10-04%2017-03-00.png)

---

## 20. Quita permisos de borrado a Mifli

![alt text](img/Captura%20desde%202025-10-04%2017-04-54.png)

---

## 21. Muestra los usuarios y sus privilegios

![alt text](img/Captura%20desde%202025-10-04%2017-08-46.png)

![alt text](img/Captura%20desde%202025-10-04%2017-11-56.png)

![alt text](img/Captura%20desde%202025-10-04%2017-12-29.png)

---

## 22. Cambia la contraseña de Mifli directamente

![alt text](img/Captura%20desde%202025-10-04%2017-26-27.png)

---

## 23. FLUSH PRIVILEGES;

![alt text](img/Captura%20desde%202025-10-04%2017-28-23.png)

- Este comando es necesario para que el cambio anterior tenga efecto.

---

## 24. ¿Puedo utilizar la funcion PASSWORD con GRANT?

- No, no se debe utilizar la función PASSWORD() con la sentencia GRANT, porque se produciría un doble cifrado de la contraseña.

---

## 25. Elimina el usuario Mifli

![alt text](img/Captura%20desde%202025-10-04%2017-40-45.png)

---
# COMPROBACIONES

![alt text](img/Captura%20desde%202025-10-04%2017-50-00.png)







