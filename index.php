<!DOCTYPE html>
<html>
<head>
	<title>Mia - Tu psicologa</title>
	<link rel="stylesheet" href="css/styles.css?v=<?php echo(rand()); ?>"/>
	<link rel="icon" type="image/png" href="/images/icon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
</head>
<body>


	<nav class="main-container">
		<div class="main-nav">
			<ul class="ul-0">
				<li id="logo">
					<a href="#"><img src="images/logo.png" id="logo"></a>
				</li>
			</ul>
			<ul class="ul-1">
				<li><a href="#sec-0">Inicio</a></li>
				<li><a href="#sec-1">Yo</a></li>
				<li><a href="#sec-2">Hablemos</a></li>
			</ul>
		</div>
	</nav>


	<div class="container">
		<section id="sec-0" class="sections">
			<img src="images/bg0.gif">
			<div class="content">
				<h1>Hola! se que ultimamente la cuarentena nos está afectando mucho... Quiero que me conozcas un poco, quizá pueda acompañarte y ayudar en algo</h1>
				<a href="#sec-1"><button class="bubbly-button">CONOCEME</button></a>
			</div>		
		</section>

		<section id="sec-1" class="sections">
			<img src="images/bg1.gif">
			<div class="content">
				<h1>Hola! Me presento, soy Mia y junto a la Lic. Mayra Fiorella Flores Salazar de Lima - Perú, estoy aqui para ayudarte, para charlar un poco, para que me cuentes como te sientes y busquemos una forma de encontrar una solución para ayudarte, y lo haremos juntos, me encantaría conocerte, tienes tiempo? Hablemos un rato y consigamos una manera de dejar de pensar en esta odiosa cuarentena, me imagino que estarás un poco con ansiedad, no te preocupes, hablemos y miremos que podemos hacer!</h1>

				<a href="#sec-2"><button class="bubbly-button">HABLEMOS!</button></a>

			</div>		
		</section>

		<section id="sec-2" class="sections">
			<img src="images/bg2.gif">
			<div class="content">
				<h1>Aqui abajo hacia la derecha hay un botón para que podamos hablar, no tengas miedo, solo apretalo y hablemos, cuentame un poco de ti para ver que podemos hacer juntos!</h1>
			</div>
		</section>
	</div>

<!--Importar Watson-->

	<script>
  window.watsonAssistantChatOptions = {
      integrationID: "570f29ca-2e27-4704-a1b2-6d3faad1da8b", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "7304f40a-2ab7-4a42-83cc-2e2831969acd", // The ID of your service instance.
       carbonTheme: 'g90',
    onLoad: function(instance) {
      // Instance method to adjust specific CSS variables
      instance.updateCSSVariables({
        'BASE-font-family': '"Times New Roman", Times, serif',
        '$focus': '#FFA1D0',
        '$hover-primary': '#FFA1D0',
        '$interactive-01': '#ff0081'
      });
      instance.render();
    }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

<!--Fin importar Watson-->

<!--Importar efecto-->

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

<!--Fin importación-->

<!--Código efecto-->

<script id="rendered-js">
var animateButton = function (e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');

  e.target.classList.add('animate');
  setTimeout(function () {
    e.target.classList.remove('animate');
  }, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {if (window.CP.shouldStopExecution(0)) break;
  bubblyButtons[i].addEventListener('click', animateButton, false);
}window.CP.exitedLoop(0);
//# sourceURL=pen.js
    </script>

<!--Fin códifo efecto-->

</body>
</html>