<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="../public/img/carta.png">
    <title>Carta de San Valentín</title>
    <style>
        body {
            background-color: #fce4ec;
            /* Rosa suave */
            font-family: 'Outfit', sans-serif;
            text-align: center;
            padding: 30px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: #d81b60;
            margin-bottom: 15px;
        }

        .psorpresa {
            font-size: 1.2rem;
            color: #555;
            font-style: italic;
            margin-bottom: 20px;
        }

        .contenedor {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            padding: 25px;
            max-width: 600px;
            margin: auto;
            transition: transform 0.3s ease-in-out;
            display: none;
        }

        .mensaje {
            font-family: 'Dancing Script', cursive;
            font-size: 1.5rem;
            color: #444;
            line-height: 1.6;
        }

        .mensaje h2 {
            color: #d81b60;
            font-size: 2rem;
        }

        .mensaje p {
            margin-bottom: 15px;
        }

        .carta {
            font-size: 3rem;
            color: #d81b60;
            margin-top: 15px;
        }

        .botones {
            margin-top: 20px;
        }

        .boton {
            background-color: #d81b60;
            color: white;
            font-size: 1.2rem;
            border: none;
            border-radius: 30px;
            padding: 10px 25px;
            cursor: pointer;
            transition: background 0.3s;
            margin: 10px;
        }

        .boton:hover {
            background-color: #ad1457;
        }

        a.boton {
            text-decoration: none;
            display: inline-block;
        }

        #flores {
            pointer-events: none;
            opacity: 0.5;
        }

        .pista {
            font-size: 1.2rem;
            color: #333;
            font-weight: bold;
            margin-top: 30px;
            background-color: #ffeb3b;
            padding: 15px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .contenedor {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <h1>¡Feliz Día de la Amistad! ❤️ Has completado con éxito este desafío de preguntas y adivinanzas. 🎉✨</h1>
    <p class="psorpresa">Un pequeño regalo para ti 🎁✨ Espero que te guste mucho. ❤️</p>

    <div class="contenedor" id="AbrirContenedor">
        <div class="mensaje">
            <h2>Hola, mi querida chica</h2>
            <p>¿Cómo estás? Espero que estés bien. Hoy quiero dedicarte unas palabras a la persona más especial que tuve en mi vida.</p>
            <p>Antes, esta carta hablaba de cuánto te quiero, y aunque las cosas han cambiado, ese sentimiento sigue ahí de alguna forma.</p>
            <p>Sigues siendo una persona increíble. Has traído felicidad a muchas vidas, incluida la mía. Eres dulce, fuerte y maravillosa.</p>
            <p>Aunque ya no sea yo quien comparta tu camino, siempre sonreiré al recordar los momentos que vivimos.</p>
            <h4>Mi niña, mi amor, mi corazón…</h4>
            <h5>Que tengas un hermoso día. ❤️</h5>
        </div>
        <div class="carta">
            <i class="bx bxs-heart"></i>
        </div>
    </div>

    <!-- Botón para abrir -->
    <button class="boton" id="Abrir">Abrir</button>

    <div class="botones">
        <button class="boton" id="Cerrar">Cerrar</button>
        <a class="boton" id="flores" href="mensaje.html">Otro regalo</a>
    </div>

    <!-- Pista al final -->
    <div class="pista">
        Un enigma escondido hay,
        un número y un término en un solo lugar,
        al principio un año clave está,
        y al final un concepto clave encontrarás.¿Puedes adivinarla? 🎉
    </div>
    <!-- Incluir SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Mostrar el contenedor con el mensaje al hacer clic en "Abrir"
        document.getElementById('Abrir').addEventListener('click', function() {
            document.getElementById('AbrirContenedor').style.display = 'block';
            document.getElementById('flores').style.pointerEvents = 'auto';
            document.getElementById('flores').style.opacity = '1';
        });

        // Cerrar el contenedor
        document.getElementById('Cerrar').addEventListener('click', function() {
            document.getElementById('AbrirContenedor').style.display = 'none';
        });

        // Easter Egg: Redirigir si se escribe "2021final"
        let inputCode = ""; // Almacena lo que el usuario escribe
        const secretCode = "2021final"; // Código secreto

        document.addEventListener("keydown", function(event) {
            inputCode += event.key; // Agrega la tecla presionada al inputCode

            // Verifica si el inputCode contiene el código secreto
            if (inputCode.includes(secretCode)) {
                // Muestra una alerta de confirmación con SweetAlert
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'La siguiente página podría contener contenido que impacte en tu relación. ¿Estás seguro de que deseas continuar?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, continuar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si el usuario confirma, redirige a la página
                        window.location.href = "mensajeSecreto.php"; // Redirige a la página deseada
                    } else {
                        // Si el usuario cancela, no hace nada
                        Swal.fire('¡Cancelado!', 'Tu relación sigue intacta.', 'info');
                    }
                });
            }

            // Limita el inputCode a la longitud del código secreto para evitar acumulación infinita
            if (inputCode.length > secretCode.length) {
                inputCode = inputCode.slice(-secretCode.length);
            }
        });
    </script>

</body>

</html>