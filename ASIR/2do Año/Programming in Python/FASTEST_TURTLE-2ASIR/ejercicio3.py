from turtle import *

title("Perrito ¡ONDA VITAAAAAL!")
speed(2)
bgcolor("#f0ead6")
pensize(3)
shape("turtle")
hideturtle()

# Cabeza
color("saddlebrown")
fillcolor("wheat")
penup()
goto(0, 50)
pendown()
begin_fill()
circle(50)
end_fill()

# Oreja Izquierda
penup()
goto(-40, 100)
pendown()
fillcolor("saddlebrown")
begin_fill()
setheading(90)
circle(30, 180)
end_fill()

# Oreja Derecha
penup()
goto(40, 110)
pendown()
begin_fill()
setheading(90)
circle(-30, 180)
end_fill()

# Hocico
penup()
goto(-18, 80)
pendown()
fillcolor("antiquewhite")
begin_fill()
circle(20)
end_fill()

# Nariz
color("black")
penup()
goto(-3, 90)
pendown()
begin_fill()
circle(5)
end_fill()

# Ojo Izquierdo
penup()
goto(-20, 100)
pendown()
begin_fill()
circle(6)
end_fill()

# Ojo Derecho
penup()
goto(15, 100)
pendown()
begin_fill()
circle(6)
end_fill()

# Cuerpo
color("saddlebrown")
fillcolor("wheat")
penup()
goto(30, 50)
pendown()
begin_fill()
setheading(-90)
forward(80)
right(90)
forward(60)
right(90)
forward(80)
right(90)
forward(60)
end_fill()

# Pata inferior izquierda
penup()
goto(-10, -30)
pendown()
begin_fill()
setheading(-90)
forward(40)
right(90)
forward(15)
right(90)
forward(40)
right(90)
forward(15)
end_fill()

# Pata inferior derecha
penup()
goto(26, -30)
pendown()
begin_fill()
setheading(-90)
forward(40)
right(90)
forward(15)
right(90)
forward(40)
right(90)
forward(15)
end_fill()

# Patas superiores
color("saddlebrown")
fillcolor("sienna")
penup()
goto(-30, 20)
pendown()
begin_fill()
circle(12)
end_fill()

penup()
goto(30, 10)
pendown()
begin_fill()
circle(12)
end_fill()
hideturtle()

# onda vital
speed(0)
bgcolor("black")
colors = ['#00FFFF', 'blue', 'white']

for x in range(220):
    pencolor(colors[x % 3])
    pensize((x // 20) + 1)
    circle(x * 2) 
    left(5) 

hideturtle()
done()  