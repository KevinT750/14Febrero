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
    <title>Carta de despedida</title>
    <style>
        body {
            background-color: #1f1f1f;
            font-family: 'Outfit', sans-serif;
            color: #f0f0f0;
            text-align: center;
            padding: 30px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: #f39c12;
            margin-bottom: 15px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .psorpresa {
            font-size: 1.2rem;
            color: #aaa;
            font-style: italic;
            margin-bottom: 20px;
        }

        .contenedor {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 25px;
            max-width: 600px;
            margin: auto;
            display: none;
            backdrop-filter: blur(10px);
        }

        .mensaje {
            font-family: 'Dancing Script', cursive;
            font-size: 1.5rem;
            color: #f0f0f0;
            line-height: 1.8;
        }

        .mensaje h2 {
            color: #f39c12;
            font-size: 2rem;
        }

        .mensaje p {
            margin-bottom: 15px;
            color: #ddd;
        }

        .botones {
            margin-top: 20px;
        }

        .boton {
            background-color: #f39c12;
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
            background-color: #e67e22;
        }

        #reproductor {
            display: none;
            margin-top: 15px;
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
    <h1>Un último adiós... 💔</h1>
    <p class="psorpresa">Un regalo de despedida para ti... 🌙✨</p>
    <!-- Botón para abrir -->

    <div class="botones">
        <button class="boton" id="Reproducir">Canción 1</button>
        <button class="boton" id="Reproducir1">Canción 2</button>
        <button class="boton" id="Historia">Nuestra Historia</button>
        <button class="boton" id="Abrir">Abrir</button>
        <button class="boton" id="Ques">¿Qué me has hecho?</button>
        <button class="boton" id="Cerrar">Cerrar</button>
    </div>

    <div class="contenedor" id="AbrirContenedor">
        <div class="mensaje">
            <h2>Carta de despedida</h2>
            <p>Querida Emily,</p>
            <p>Espero que al leer estas palabras te encuentres bien. Si estás viendo este mensaje, es porque lograste descifrar el mensaje secreto de la página anterior. Como ves en el título, esta es una carta de despedida, una despedida que nunca imaginé tener que escribir.</p>
            <p>No sé exactamente cuándo leerás esto, pero lo escribo unos días antes de darte este regalo, esos días que, de alguna manera, fueron diferentes para los dos. La verdad, no hemos hablado mucho últimamente. Nuestros mensajes se han vuelto fríos, como si no hubiera ganas, y siento que, poco a poco, te has ido alejando. Yo también me alejé, dejando pasar hasta tres o más días sin decir palabra alguna. Ese silencio, ese vacío, me dolió mucho. Me hizo sentir que la persona que alguna vez quise y que, estoy seguro, me quiso también, ya no quería hablar conmigo.</p>
            <p>Recuerdo que en las llamadas ya no había esa chispa, esa química que nos unía, y sentí que tus palabras ya no reflejaban el deseo de compartir un momento conmigo. A pesar de todo, quiero que sepas que cada momento a tu lado me hizo feliz, y aunque ahora llegamos a este punto, sigo sintiendo lo mismo.</p>
            <p>Pero creo que ha llegado el momento de que tú sigas adelante con tu vida, de que me dejes atrás. Me gustaría que tengas nuevos amigos en Argentina, que salgas, que disfrutes de la vida, que conozcas nuevas personas. Tal vez entre ellas esté alguien que te acompañe en los momentos más importantes de tu vida, a quien le digas "amor". Quiero que logres todo lo que te propongas, que dejes atrás esos pensamientos negativos, porque sé que lo que te propones lo lograrás. Yo también seguiré adelante, aunque no sé si lograré hacerlo del todo bien, ya que no soy muy sociable, pero haré mi intento.</p>
            <p>Al escribir estas palabras, lo hago con todo el amor que todavía siento por ti, con todo el cariño que siempre te tendré, y con la esperanza de que algún día podamos reencontrarnos solo para hablar de lo que hemos vivido. Siempre te recordaré con una sonrisa, porque fuiste y serás una parte muy especial de mi vida.</p>
            <h4>Te quiero, mi niña, mi cuchurrumin, mi amor, mi vida. Este es un adiós, pero no un adiós para siempre. Cuídate mucho.</h4>
            <h5>Con todo mi amor,</h5>
            <p>Kevin.</p>
        </div>
    </div>

    <!-- Reproductor de audio oculto -->
    <div id="reproductor">
        <audio id="miAudio" controls>
            <source src="../public/audios/The Turtles - Happy Together (Sub. Español).mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>

    <!-- Contenedor del mensaje oculto -->
    <div class="contenedor" id="mensajeContenedor">
        <div class="mensaje">
            <h2>Happy Together</h2>

            <p>Quiero contarte por qué esta canción es tan especial para mí… y creo que también para ti. Todo comenzó después de una discusión. No recuerdo bien el motivo, pero sí recuerdo el silencio que quedó entre nosotros. Me dolía estar así contigo, así que intenté arreglar las cosas.</p>

            <p>Una noche, mientras veía videos, apareció esta canción. Sentí que era perfecta para decirte lo que no podía con palabras, para pedirte una oportunidad, para recordarte cuánto significas para mí. Te la envié junto a un mensaje sincero, lleno de lo que sentía, de lo que aún siento… Fue tarde, quizá demasiado tarde—eran como las 00:30—y no obtuve respuesta en ese momento. Pero al día siguiente, por fin me escribiste.</p>

            <p>Después de días de distancia, ver tu mensaje me hizo sentir vivo otra vez. La persona que amo, que amé y que siempre amaré, me había respondido. Dijiste que ya conocías la canción, pero que te había gustado el mensaje… y que también te gustaba la canción.</p>

            <p>Desde entonces, cada vez que la escucho, me transporta a ese instante, a la esperanza de que todo podía estar bien, a la emoción de volver a leerte. Para mí, esta canción es un deseo, un anhelo, un sentimiento que nunca desaparecerá.</p>

            <p><strong>"Happy Together"… Ojalá encuentres a alguien con quien realmente lo seas.</strong></p>

        </div>
    </div>

    <!-- Reproductor de audio oculto 2 -->
    <div id="reproductor1" style="display: none;">
        <audio id="miAudio1" controls>
            <source src="../public/audios/Kevin Kaarl - Es Que Yo Te Quiero A Ti (Lyric Video).mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>

    <div class="contenedor" id="mensajeContenedor1" style="display: none;">
        <div class="mensaje">
            <h2>Es Que Yo Te Quiero A Ti</h2>

            <p>Esta es otra canción que, al escucharla, no puedo evitar derrumbarme. Sabes que soy una persona sentimental, y esta melodía tiene la capacidad de romperme en pedazos, de hacerme revivir uno de los momentos más hermosos y dolorosos que compartimos.</p>

            <p>Me transporta a ese día en el que estábamos en videollamada. No recuerdo bien qué estabas haciendo, pero en medio de nuestra conversación—hablábamos de cómo había sido nuestro día, de tonterías, de la vida—dejaste todo a un lado. Tomaste tu ukulele y comenzaste a tocar. Me dedicaste varias canciones, todas hermosas, pero hubo una que se quedó grabada en lo más profundo de mi alma: <strong>Es Que Yo Te Quiero A Ti</strong> de Kevin Kaarl.</p>

            <p>Tu voz, tan dulce y suave, junto con el sonido de tu ukulele, hicieron que mi corazón se estremeciera. Tal vez no lo notaste, pero en ese momento mis ojos se llenaron de lágrimas. Me tocaste el alma. Fue tan especial, tan íntimo… como si cada palabra de esa canción fuera un reflejo de lo que sentíamos el uno por el otro.</p>


            <p><em>"Me he encontrado viéndote a los ojos<br>
                    Y abrazarte me calma<br>
                    Todo el miedo que hay en mí<br>
                    Dime que estarás en cada noche y cada día de dolor<br>
                    Es que yo te quiero a ti<br>
                    Yo te cuidaré cuando estés triste<br>
                    O bien contenta, corazón<br>
                    Es que yo te quiero a ti."</em></p>

            <p>Esa parte en especial me golpea cada vez que la escucho. Porque cuando estaba contigo, cuando te abrazaba, todo mi miedo, mis preocupaciones, simplemente desaparecían. Y cuando tú estabas triste, lo único que quería era encontrar la manera de hacerte sonreír.</p>

            <p>Era diciembre… o tal vez noviembre. Los últimos días, los últimos meses que nos quedaban juntos antes de que el destino nos separara. Sabía que pronto te irías, que te alejarías de mis brazos para empezar una nueva vida en otro lugar, con nuevas personas, con nuevos recuerdos que ya no me incluirían.</p>

            <p>Ojalá hubiera grabado esa videollamada, para poder escuchar tu voz cada vez que me siento solo, para revivir ese instante y engañarme, aunque sea por un momento, haciéndome creer que todavía estás aquí.</p>

            <p>Perdóname… si alguna vez te hice sentir mal, si alguna vez te hice llorar. Lo último que quise fue lastimarte. Y aunque sé que lo nuestro ya es solo un recuerdo para ti, aunque sé que este sentimiento dejó de ser mutuo hace tiempo… yo aún te amo.</p>

            <p>Te deseo lo mejor, pero sobre todo… <strong>es que yo te quiero a ti.</strong></p>


        </div>
    </div>

    <div class="contenedor" id="AbrirHistoria">
        <div class="mensaje">
            <h2>Nuestra Historia</h2>

            <p>Aquí quiero contar nuestra historia...</p>

            <p>Tú y yo ya nos conocíamos mucho antes, desde segundo grado, aunque apenas intercambiábamos palabras. Solo éramos dos niños cruzando caminos sin saber lo que el destino nos tenía preparado. Pero todo cambió en noveno grado, cuando empezamos a hablar más seguido. Al principio, lo admito, mi amistad era algo egoísta, te escribía solo para preguntarte sobre tareas, para pedirte ayuda... pero en décimo grado todo tomó un rumbo diferente.</p>

            <p>Dejamos de hablar por un tiempo, hasta que un día tú me escribiste para preguntarme si había deberes. Respondí que no… y sin darnos cuenta, con ese mensaje comenzó todo. Poco a poco, las conversaciones se hicieron más largas, más sinceras. Me contabas sobre tus días, tus deberes, las mingas, cada pequeño detalle de tu vida. Y yo también comencé a abrirme contigo. Así, sin darnos cuenta, nos hicimos buenos amigos… y sin querer, sin planearlo, empecé a sentir algo más por ti.</p>

            <p>No sé en qué momento exacto sucedió, no sé si tú ya sentías lo mismo por mí en ese entonces, pero había algo en ti que me hacía verte de una manera diferente. Hubo momentos que se quedaron grabados en mi memoria como si hubieran ocurrido ayer: aquella vez que te abracé en el aula cuando me acompañaste a limpiar, o cuando me abrazaste en agradecimiento porque te presté mi libro. Pequeños instantes que significaban tanto para mí.</p>

            <p>Y luego llegó ese día… esa reunión para ensayar la obra, cuando decidimos ir a mi casa. De algún modo, los demás se alejaron y quedamos solos. Aún recuerdo que tenemos versiones distintas de esa tarde: tú dices que me quedé serio, que parecía triste, y por eso te quedaste conmigo. Yo, en cambio, recuerdo que quería contarte lo que había leído del libro que me prestaste. Te lo conté, sonreíste y me dijiste "sí lo leíste" antes de abrazarme.</p>

            <p>Y entonces, sucedió… Nuestro primer beso.</p>

            <p>Fue torpe, inesperado, pero para mí, fue lo más especial que había vivido hasta ese momento. Tu expresión era de confusión, me dijiste que eso no debía pasar, pero no te dejé terminar… te besé otra vez. No me arrepiento de nada. Ojalá pudiera detener el tiempo en ese instante, en ese primer beso contigo. Quiero que recuerdes lo vivido junto a mí, quiero que perdones lo malo, quiero que sepas que nunca, nunca olvidaré esos besos.</p>

            <p>Luego de eso, pasaron más momentos. Nos seguimos viendo, seguimos besándonos en silencio, como si ambos supiéramos que algo estaba pasando entre nosotros, pero ninguno se atreviera a ponerle un nombre. Terminó décimo grado, las clases acabaron, pero aún hablábamos. Y yo tenía un propósito claro: cuando regresáramos al colegio, intentaría besarte otra vez.</p>

            <p>Pero el tiempo es cruel.</p>

            <p>En primero de bachillerato todo cambió. Seguíamos hablando, sí… pero ya no como antes. La confianza se fue desvaneciendo, las miradas ya no eran las mismas, y sin darme cuenta, poco a poco nos fuimos distanciando. Hasta que un día, simplemente dejamos de hablar. Pensé que ya no me escribías, así que dejé de buscarte. Luego supe que te gustaba alguien más… que tenías novio. Me dolió, no lo voy a negar. No supe cómo reaccionar. No supe qué hacer con todo lo que sentía por ti.</p>

            <p>Llegó la pandemia y nos alejó aún más. Pero un día, el destino hizo de las suyas otra vez. Vi una notificación en Facebook que decía que éramos amigos desde hace cuatro años. Y fue la excusa perfecta para escribirte. "Hola, felices 4 años", te dije, sin saber que con ese mensaje íbamos a comenzar de nuevo.</p>

            <p>Volvimos a hablar como antes. Jugábamos, nos enviábamos letras de canciones, nos reíamos de tonterías. Y entonces, me invitaste a caminar. Recuerdo haber esperado por casi una hora en el lugar donde me dijiste que nos veríamos. Casi me voy, pero justo cuando estaba a punto de rendirme, llegaste. Caminamos, hablamos, y como si el tiempo no hubiera pasado, volvimos a besarnos. Te dije "te quiero" y, con otro beso, me respondiste que también.</p>

            <p>Después, vinieron más días, más recuerdos. Hasta que, finalmente, fuimos novios. Ese día también te esperé, pero valió la pena cada segundo. Fuimos al parque, caminamos, comimos el peor consomé y pollo asado de nuestras vidas, pero aun así, todo fue perfecto. Y cuando nos despedimos, te abracé y te dije: "Mi chica". Me preguntaste qué significaba y te respondí: "Pareja". Sonreíste y me dijiste que sí.</p>

            <p>Ese fue el mejor momento de todos.</p>

            <p>Esta canción captura perfectamente el sentimiento que experimenté en ese momento cuando comenzamos nuestra relación. Cada nota, cada palabra, me recuerda lo especial que fue ese tiempo para mí.</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zJrrMbHPn8Y?si=OxSlnsThzCbdH1jb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <p>Desde el primer beso, el primer "te quiero", el primer "te amo". Gracias por ser mi primera vez en tantas cosas, en tantos sentimientos, en tantas emociones.</p>

            <p>Gracias por haber estado en mi vida, por cada recuerdo, por cada sonrisa, por cada beso.</p>

            <p>Aunque el destino nos haya llevado por caminos diferentes, aunque ahora todo sea distinto… quiero que sepas que siempre serás mi persona favorita.</p>

            <p>Te amo. Te amaré siempre.</p>

            <p>Gracias por todo, mi querida chica. 💔</p>

        </div>
    </div>


    <div class="contenedor" id="Que">
        <div class="mensaje">
            <h2>¿Qué me has hecho?</h2>

            <p>Estoy enojado contigo… pero más que enojo, es dolor. ¿Qué me has hecho? Estoy perdido en este sentimiento que no me suelta, atrapado en un amor que me consume. Estoy perdidamente enamorado de ti… ¿qué me has hecho?</p>

            <p>Te quiero más de lo que debería, más de lo que es sano, más de lo que mi corazón puede soportar… ¿qué me has hecho?</p>

            <p>Han pasado solo unos días desde que decidí alejarme, pero cada segundo sin ti se siente eterno. No dejo de pensarte, no dejo de extrañarte, no dejo de preguntarme si en algún momento piensas en mí… <strong>¿qué me has hecho?</strong></p>

            <p>Ni siquiera puedo dormir en paz, porque cuando cierro los ojos, ahí estás… invadiendo mis sueños, recordándome todo lo que fuimos, todo lo que ya no somos. <strong>¿Qué me has hecho?</strong></p>

            <p>No puedo concentrarme, mi mente se aferra a ti. Me pregunto qué estarás haciendo, si estarás sonriendo, si alguien más es la razón de esa sonrisa… y el simple pensamiento de que puedas tener a alguien más me destruye por dentro. <strong>¿Qué me has hecho?</strong></p>

            <p>Haces que desee correr a buscarte, besarte, abrazarte como si al hacerlo pudiera recuperar todo lo que se ha perdido. <strong>¿Qué me has hecho?</strong></p>

            <p>Tu silencio pesa más que cualquier palabra. Me hace sentir vacío, solo… como si ya no significara nada para ti. <strong>¿Qué me has hecho?</strong></p>

            <p>Ver cómo me ignoras duele más de lo que imaginé. Saber que la persona que amo ya no quiere hablarme, que me ha dejado en este frío abandono, me destroza. <strong>¿Qué me has hecho?</strong></p>

            <p>Extraño todo… nuestras conversaciones interminables, nuestras risas, nuestras tonterías, incluso esos momentos íntimos donde solo existíamos tú y yo. <strong>¿Qué me has hecho?</strong></p>

            <p>Sin ti, todo parece perder sentido. Sin ti, mi mundo se siente incompleto. Sin ti… <strong>no sé cómo seguir.</strong></p>

            <p><strong>¿Qué me has hecho?</strong></p>

        </div>
    </div>


    <script>
        document.getElementById('Reproducir').addEventListener('click', function() {
            let audio = document.getElementById("miAudio");
            let reproductor = document.getElementById("reproductor");
            let mensajeContenedor = document.getElementById("mensajeContenedor");
            let boton = document.getElementById("Reproducir");

            // Ocultar otros contenedores y detener otras músicas
            document.getElementById('AbrirContenedor').style.display = 'none';
            document.getElementById('AbrirHistoria').style.display = 'none';
            document.getElementById('mensajeContenedor1').style.display = 'none';
            document.getElementById('reproductor1').style.display = 'none';
            document.getElementById("miAudio1").pause();
            document.getElementById("miAudio1").currentTime = 0;
            document.getElementById("Reproducir1").textContent = "Canción 2";

            // Mostrar el reproductor
            reproductor.style.display = "block";

            // Reproducir o pausar la música
            if (audio.paused) {
                audio.play();
                boton.textContent = "Pausar";
                mensajeContenedor.style.display = "block"; // Mostrar el mensaje
            } else {
                audio.pause();
                boton.textContent = "Reproducir";
                mensajeContenedor.style.display = "none"; // Ocultar el mensaje si se pausa
            }
        });

        document.getElementById('Reproducir1').addEventListener('click', function() {
            let audio1 = document.getElementById("miAudio1");
            let reproductor1 = document.getElementById("reproductor1");
            let mensajeContenedor1 = document.getElementById("mensajeContenedor1");
            let boton1 = document.getElementById("Reproducir1");

            // Ocultar otros contenedores y detener otras músicas
            document.getElementById('AbrirContenedor').style.display = 'none';
            document.getElementById('AbrirHistoria').style.display = 'none';
            document.getElementById('mensajeContenedor').style.display = 'none';
            document.getElementById('reproductor').style.display = 'none';
            document.getElementById("miAudio").pause();
            document.getElementById("miAudio").currentTime = 0;
            document.getElementById("Reproducir").textContent = "Canción 1";

            // Mostrar el reproductor solo cuando se haga clic
            reproductor1.style.display = "block";

            // Reproducir o pausar la música
            if (audio1.paused) {
                audio1.play();
                boton1.textContent = "Pausar";
                mensajeContenedor1.style.display = "block"; // Mostrar el mensaje
            } else {
                audio1.pause();
                boton1.textContent = "Reproducir";
                mensajeContenedor1.style.display = "none"; // Ocultar el mensaje si se pausa
            }
        });

        document.getElementById('Abrir').addEventListener('click', function() {
            // Ocultar otros contenedores y detener otras músicas
            document.getElementById('AbrirHistoria').style.display = 'none';
            document.getElementById('mensajeContenedor').style.display = 'none';
            document.getElementById('reproductor').style.display = 'none';
            document.getElementById('mensajeContenedor1').style.display = 'none';
            document.getElementById('reproductor1').style.display = 'none';
            document.getElementById("miAudio").pause();
            document.getElementById("miAudio1").pause();
            document.getElementById("Reproducir").textContent = "Canción 1";
            document.getElementById("Reproducir1").textContent = "Canción 2";

            document.getElementById('AbrirContenedor').style.display = 'block';
        });

        document.getElementById('Ques').addEventListener('click', function() {
            // Ocultar otros contenedores y detener otras músicas
            document.getElementById('AbrirHistoria').style.display = 'none';
            document.getElementById('AbrirContenedor').style.display = 'none';
            document.getElementById('mensajeContenedor').style.display = 'none';
            document.getElementById('reproductor').style.display = 'none';
            document.getElementById('mensajeContenedor1').style.display = 'none';
            document.getElementById('reproductor1').style.display = 'none';
            document.getElementById("miAudio").pause();
            document.getElementById("miAudio1").pause();
            document.getElementById("Reproducir").textContent = "Canción 1";
            document.getElementById("Reproducir1").textContent = "Canción 2";

            document.getElementById('Que').style.display = 'block';
        });

        document.getElementById('Historia').addEventListener('click', function() {
            // Ocultar otros contenedores y detener otras músicas
            document.getElementById('AbrirContenedor').style.display = 'none';
            document.getElementById('mensajeContenedor').style.display = 'none';
            document.getElementById('reproductor').style.display = 'none';
            document.getElementById('mensajeContenedor1').style.display = 'none';
            document.getElementById('reproductor1').style.display = 'none';
            document.getElementById("miAudio").pause();
            document.getElementById("miAudio1").pause();
            document.getElementById("Reproducir").textContent = "Canción 1";
            document.getElementById("Reproducir1").textContent = "Canción 2";

            document.getElementById('AbrirHistoria').style.display = 'block';
        });

        document.getElementById('Cerrar').addEventListener('click', function() {
            document.getElementById('AbrirContenedor').style.display = 'none';
            document.getElementById('AbrirHistoria').style.display = 'none';
            document.getElementById('mensajeContenedor').style.display = 'none';
            document.getElementById('reproductor').style.display = 'none';
            document.getElementById('mensajeContenedor1').style.display = 'none';
            document.getElementById('reproductor1').style.display = 'none';

            let audio = document.getElementById("miAudio");
            let audio1 = document.getElementById("miAudio1");

            // Detener la música
            audio.pause();
            audio.currentTime = 0;
            audio1.pause();
            audio1.currentTime = 0;

            // Restaurar los textos de los botones
            document.getElementById("Reproducir").textContent = "Canción 1";
            document.getElementById("Reproducir1").textContent = "Canción 2";
        });
    </script>

</body>

</html>