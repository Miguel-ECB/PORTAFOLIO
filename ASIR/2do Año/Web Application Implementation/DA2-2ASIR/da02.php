<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA2 - Resultado</title>
    <link rel="icon" type="image/png" href="img/dadito.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('img/vidrio.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            perspective: 1200px;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            padding: 2.5em 3.5em;
            text-align: center;
            max-width: 600px;
            width: 90%;
            transform-style: preserve-3d;
            transition: transform 0.1s linear;
            transform: rotateX(var(--rotate-x, 0)) rotateY(var(--rotate-y, 0));
        }
        h1 {
            font-weight: 600;
            font-size: 3.5rem;
            color: #fff;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.7), 
                         0 2px 5px rgba(0, 0, 0, 0.3);
            transform: translateZ(40px);
            animation: none;
        }
        h2 { 
            font-weight: 500; 
            font-size: 1.5rem; 
            color: #111;
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.5); 
            transform: translateZ(30px);
        }
        h3 { 
            font-weight: 300; 
            font-size: 1.2rem; 
            font-style: italic; 
            color: #333;
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.3); 
            transform: translateZ(30px);
        }
        .levitate {
            display: inline-block;
            animation: levitate-anim 3s ease-in-out infinite alternate;
        }
        .contenedor-dado {
            position: relative; 
            display: inline-block; 
            text-align: center;
            margin: 15px;
            animation: flip-in 0.6s ease-out backwards;
            animation-delay: calc(var(--i) * 0.15s);
            transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .contenedor-dado:hover {
            transform: translateZ(30px) scale(1.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }
        .contenedor-dado img {
            max-width: 150px;
            border-radius: 15px;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
        }
        .texto-encima {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            font-size: 50px;
            font-weight: 600;
            color: white;
            text-shadow: 0 5px 10px rgba(0,0,0,0.7);
        }
        .ganaste, .pierdes, .empate {
            font-size: 3rem;
            font-weight: 600;
            transform: translateZ(40px);
            animation: colored-levitate-anim 3s ease-in-out infinite alternate;
            text-shadow: none; 
        }
        .ganaste { color: #39ff14; }
        .pierdes { color: #ff1100; }
        .empate { color: #fff; }
                
        @keyframes levitate-anim {
            from {
                transform: translateY(0px) translateZ(0px);
                text-shadow: 0 0 15px rgba(255, 255, 255, 0.7), 
                             0 2px 5px rgba(0, 0, 0, 0.3);
            }
            to {
                transform: translateY(-8px) translateZ(5px);
                text-shadow: 0 8px 20px rgba(255, 255, 255, 0.5), 
                             0 10px 8px rgba(0, 0, 0, 0.2);
            }
        }
        @keyframes flip-in {
            from { transform: rotateY(-90deg) scale(0.8); opacity: 0; }
            to { transform: rotateY(0) scale(1); opacity: 1; }
        }
        @keyframes colored-levitate-anim {
            from {
                transform: translateY(0px) translateZ(40px);
                text-shadow: 0 0 15px currentColor, 0 2px 5px rgba(0,0,0,0.3);
            }
            to {
                transform: translateY(-8px) translateZ(45px);
                text-shadow: 0 8px 25px currentColor, 0 10px 8px rgba(0,0,0,0.2);
            }
        }
    </style>
</head>
<body>  
    <div class="glass-panel">
        <h1>RESULTA<span class="levitate">2</span></h1>

        <?php
        $numDados = $_POST['opciones'];
        $numCaras = $_POST['caras'];
        $puntosOponente = $_POST['puntos'];
        
        $dado;

        switch ($numCaras) {
            case 4: $dado = "<img src='img/cuatro.png' alt='Dado de 4 caras'>"; break;
            case 6: $dado = "<img src='img/seis.png' alt='Dado de 6 caras'>"; break;
            case 8: $dado = "<img src='img/ocho.png' alt='Dado de 8 caras'>"; break;
            case 10: $dado = "<img src='img/diez.png' alt='Dado de 10 caras'>"; break;
            case 12: $dado = "<img src='img/doce.png' alt='Dado de 12 caras'>"; break;
            case 20: $dado = "<img src='img/veinte.png' alt='Dado de 20 caras'>"; break;
        }
        
        echo "<h2>DADOS:</h2>";
        
        $puntosObtenidos = 0; 

        for ($i = 0; $i < $numDados; $i++) {  
            $tirada = rand(1, $numCaras);
            $puntosObtenidos += $tirada;
            
            echo "<div class='contenedor-dado' style='--i: $i'>";
            echo $dado;    
            echo "<div class='texto-encima'>$tirada</div>";   
            echo "</div>";
        }

        echo "<h2>Puntos Obtenidos: $puntosObtenidos</h2>";
        echo "<h3>Puntos del Oponente: $puntosOponente</h3>";

        if ($puntosObtenidos > $puntosOponente) {
            echo "<h1 class='ganaste'>¡GANASTE!</h1>";
        } elseif ($puntosObtenidos < $puntosOponente) {
            echo "<h1 class='pierdes'>PIERDES</h1>";
        } else {
            echo "<h1 class='empate'>¡EMPATE!</h1>";
        }
        ?>
    </div> 
    <script>
        const panel = document.querySelector('.glass-panel');
        const body = document.body;
        body.addEventListener('mousemove', (e) => {
            const xPos = (e.clientX / window.innerWidth - 0.5) * 2;
            const yPos = (e.clientY / window.innerHeight - 0.5) * 2;
            const maxRotate = 6;
            const rotateX = yPos * -maxRotate;
            const rotateY = xPos * maxRotate;
            panel.style.setProperty('--rotate-x', `${rotateX}deg`);
            panel.style.setProperty('--rotate-y', `${rotateY}deg`);
        });
        body.addEventListener('mouseleave', () => {
            panel.style.setProperty('--rotate-x', '0deg');
            panel.style.setProperty('--rotate-y', '0deg');
        });
    </script>
</body>
</html>