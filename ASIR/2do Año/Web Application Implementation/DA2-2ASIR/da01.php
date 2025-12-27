<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA2 - Selección</title>
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
            max-width: 500px;
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
            margin-bottom: 0.5em;
            animation: none;
            transform: translateZ(40px);
        }
        
        .levitate {
            display: inline-block;
            animation: levitate-anim 3s ease-in-out infinite alternate;
        }
        label {
            font-size: 1.2rem;
            color: #f0f0f0;
            font-weight: 500;
            display: block;
            margin-bottom: 0.5em;
            transform: translateZ(25px);
            text-shadow: 0 1px 3px rgba(0,0,0,0.4);
        }
        select, input[type="submit"] {
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.7);
            color: #000;
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 0.8em;
            font-size: 1rem;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 1.5em;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        select option {
            background: rgba(40, 40, 40, 0.95);
            color: #fff;
        }
        select:focus {
            outline: none;
            animation: select-focus-pulse 1s infinite alternate;
        }
        select:hover {
            transform: translateZ(20px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            background: #000;
            color: #fff;
            font-weight: 600;
            font-size: 1.2rem;
            animation: box-levitate-anim 3s ease-in-out infinite alternate;
        }
        input[type="submit"]:hover {
            animation: none;
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(25px);
            transform: translateZ(25px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
    
        input[type="submit"]:active {
            animation: none;
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(25px);
            transform: translateZ(10px) scale(0.98);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
                
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
        @keyframes select-focus-pulse {
            from {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15), 0 0 5px rgba(255,255,255,0.3);
            }
            to {
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2), 0 0 15px rgba(255,255,255,0.7);
            }
        }
        @keyframes box-levitate-anim {
            from {
                transform: translateY(0px) translateZ(0px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            }
            to {
                transform: translateY(-8px) translateZ(5px);
                box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
            }
        }
    </style>
</head>
<body>
    <div class="glass-panel">
        <h1>DA<span class="levitate">2</span></h1>
        
        <form action="da02.php" method="post">
            <div>
                <label for="opciones">¿Cuantos dados quieres tirar?:</label>
                <select name="opciones" id="opciones">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div>
                <label for="caras">¿Cuantas caras tienen los dados?:</label>
                <select name="caras" id="caras">
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div>
                <label for="puntos">Puntos del Oponente:</label>
                <select name="puntos" id="puntos">
                    <?php
                    $inicio = 0;
                    $fin = 60;
                    for ($i = $inicio; $i <= $fin; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <input type="submit" value="¡SUERTE!">
            </div>
        </form>
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