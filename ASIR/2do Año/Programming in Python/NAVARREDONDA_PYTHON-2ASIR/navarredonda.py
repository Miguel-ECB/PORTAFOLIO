import random
import datetime

print("PARQUE DE ATRACCIONES DE NAVARREDONDA")

#Variables

#EDAD
edad = int(input("Escribe tu edad: "))
print("Edad: " + str(edad)) #Valor de edad

#TIPO DE DIA
tipoDia = input("Escribe el tipo de dia ('L' Laboral, 'F' Fin de Semana): ")
if (tipoDia == 'L' or tipoDia == 'l'):
  print("El tipo de dia es: Laboral")
  tipoDia = 'Laboral' #Valor de tipoDia
elif (tipoDia == "F" or tipoDia == 'f'):
  print("El tipo de dia es: Fin de semana")
  tipoDia = 'Fin de Semana' #Valor de tipoDia
else:
  print("El tipo de dia no es valido")

#TIPO DE GRUPO
tipoGrupo = input("Escribe tu tipo de grupo ('F' Familiar, 'C' Colegio, 'I' Individual): ")
if (tipoGrupo == 'F' or tipoGrupo == 'f'):
  print("El tipo de grupo es: Familiar")
  tipoGrupo = 'Familiar' #Valor de tipoGrupo
elif (tipoGrupo == 'C' or tipoGrupo == 'c'):
  print("EL tipo de grupo es: Colegio")
  tipoGrupo = 'Colegio' #Valor de tipoGrupo
elif (tipoGrupo == 'I' or tipoGrupo == 'i'):
  print("EL tipo de grupo es: Individual")
  tipoGrupo = 'Individual' #Valor de tipoGrupo
else:
  print("El tipo de grupo no es valido")

#RESIDENCIA
residencia = input("Donde resides ('M' Madrid, 'O' Otra Provincia): ")
if (residencia == 'M' or residencia == 'm'):
  print("Residencia: Madrid")
  residencia = 'Madrid' #Valor de residencia
elif (residencia =='O' or residencia == 'o'):
  print("Residencia: Otra provincia")
  residencia = 'Otra provincia' #Valor de residencia
else:
  print("Residencia no valida")

#DIA DE LA SEMANA
diaSemana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"]
dia = diaSemana[datetime.date.today().weekday()] #dia = random.choice(diaSemana) Valor de dia (borrador)
print("Dia de la semana: " + dia)

#SOCIO
esSocio = ["Si", "Si", "Si", "Si", "Si", "Si", "Si", "Si", "No", "No"]

socio = random.choice(esSocio) #Valor de socio
print("Es socio del club: " + socio)

#ALTURA
altura = int(input("Escribe tu altura (cm): ")) #Valor de altura
print("Altura: " + str(altura) + " cm")

#Calculo de tarifa
print("TARIFA, DESCUENTOS Y RECARGOS")
if (socio == 'Si' and edad >= 65):
  print("Entrada gratuita (€0.00)" + (r'''
  d8888b. 
d88P  Y88b
888    888
888    888
888    888
888    888
d88P  Y88b
  Y8888P. 
''') )
elif (socio == 'Si' and residencia == 'Madrid'):
  print("Descuento del 50% (€22.5)" + (r'''
 d8888b.      d8888b.         888888888 
d88P  Y88b  d88P  Y88b        888       
      .d88P       .d88P        888       
     d88P'       d88P'         8888888b. 
   .d88P       .d88P                "Y88b
  d88P'       d88P'                  888
d88P_____   d88P_____    d8b   Y88b  d88P
888888888   888888888    Y8P   "Y8888P"  
'''))
elif (altura < 120 or edad < 4):
  print("Descuento del 45% (€24.75)" + (r'''
 d8888b.      d88b         88888888888   888888888 
d88P  Y88b    d88`8b              d88P   888       
      .d88P   d88' `8b            d88P    888       
     d88P'   d88YaaaaY8b          d88P    8888888b. 
   .d88P     `8888888888'        d88P          "Y88b
  d88P'            `88b         d88P             888
d88P_____           88b   d8b  d88P       Y88b  d88P
888888888           88b   Y8P d88P         "Y8888P"  
'''))
elif (tipoGrupo == 'Colegio' and (dia == 'Lunes' or dia == 'Viernes')):
  print("Descuentos del 35% (€29.25)" + (r'''
 d8888b.    .d8888b.           d8888b.    888888888 
d88P  Y88b  d88P  Y88b        d88P  Y88b  888       
      .d88P 888    888              .d88P  888       
     d88P'  Y88b. `888             d88P'   8888888b. 
   .d88P     `Y88b. 888           .d88P         "Y88b
  d88P'           `888          d88P'              888
d88P_____   Y88b  d88P   d8b   d88P_____    Y88b  d88P
888888888    `Y8888P'    Y8P   888888888    "Y8888P"  
'''))
elif (dia == 'Jueves' and tipoDia == 'Laboral'):
  print("Descuento del 30% (€31.5) ¡Feliz dia del Estudiante! Optienes una promocion" + (r'''
d888888b.      d888        888888888 
     `Y88b   d8888         888       
       888      888         888       
     .d88P      888         8888888b. 
    d88P'       888              "Y88b
       888      888                888
Y88b. .d88P     888    d8b   Y88b  d88P
 "Y88888P"   88888888  Y8P   "Y8888P"  
'''))
elif (edad < 18 and tipoDia == 'Laboral'):
  print("Descuento del 25% (€33.75)" + (r'''
d888888b.  d888888b.         888888888   888888888 
     `Y88b      `Y88b             d88P   888       
       888        888             d88P    888       
     .d88P      .d88P             d88P    8888888b. 
  .d88P'       .d88P'            d88P          "Y88b
       888         888          d88P             888
Y88b. .d88P Y88b. .d88P   d8b  d88P      Y88b   d88P
 "Y88888P"   "Y88888P"    Y8P  d88P        "Y8888P"  
'''))
elif (tipoGrupo == 'Familiar' and residencia == 'Otra provincia'):
  print("Descuento del 20% (€36)" + (r'''
d888888b.   . d88b.  
     `Y88b  d88P Y88b
       888 888       
     .d88P 888d888b. 
    .d88P' 888P' `Y88
       888 888    888
Y88b. .d88P Y88b  d88P
 "Y88888P"   `Y8888P' 
'''))
elif ((edad >= 18 and edad <= 25) and socio == 'No'):
  print("Descuentos del 10% (€40.5)" + (r'''
    d88b        d8888b.         888888888 
   d88`8b      d88P  Y88b       888       
  d88' `8b     888    888        888       
 d88YaaaaY8b   888    888         8888888b. 
 `8888888888'  888    888             "Y88b
       `88b    888    888                888
        88b    d88P  Y88b   d8b   Y88b  d88P
        88b      Y8888P.    Y8P   "Y8888P"  
'''))
elif ((dia == 'Sabado' or dia == 'Domingo') and tipoGrupo == 'Familiar'):
  print("Recargo del 5% (€47.25)" + (r'''
    d88b        888888888         d8888b.    888888888 
   d88`8b             d88P       d88P  Y88b  888       
  d88' `8b            d88P             .d88P  888       
 d88YaaaaY8b          d88P              d88P'  8888888b. 
 `8888888888'        d88P             .d88P         "Y88b
       `88b         d88P             d88P'            888
        88b        d88P      d8b    d88P_____  Y88b  d88P
        88b       d88P       Y8P    888888888   "Y8888P"  
'''))
elif (dia == 'Miercoles' and residencia == 'Otra provincia'):
  print("Recargo del 10% (€49.50)" + (r'''
    d88b        .d8888b.         888888888     d8888b. 
   d88`8b      d88P  Y88b        888          d88P  Y88b
  d88' `8b     888    888         888         888    888
 d88YaaaaY8b    Y88b. `888        8888888b.   888    888
 `8888888888'   `Y88b8.888             "Y88b  888    888
       `88b           `888               888  888    888
        88b     Y88b  d88P   d8b   Y88b  d88P  d88   Y88
        88b      `Y8888P'    Y8P   "Y8888P"     Y8888P. 
'''))
elif (tipoDia == 'Fin de Semana' and tipoGrupo == 'Individual' and residencia == 'Otra provincia'):
  print("Recargo fijo de €8.00 (€53)" + (r'''
888888888  d888888b. 
888            `  Y88b
888               888
8888888b.      .d88P
     "Y88b    .d88P' 
       888         888
Y88b  d88P Y88b. . d88P
 "Y8888P"   "Y88888P" 
'''))
else:
  print("Tarifa base (€45.00)" + (r'''
    d88b       888888888 
   d88`8b      888       
  d88' `8b      888       
 d88YaaaaY8b    8888888b. 
 `8888888888'        "Y88b
       `88b            888
        88b    Y88b  d88P
        88b     "Y8888P"  
'''))

print("¡Disfruta de tu visita al Parque de Atracciones de Navarredonda!")
