<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESCENIKA HOME</title>
		<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css">
		<!-- meta para iphone, ipad quita estilo que da por defecto para telefonos -->
	<meta name="format-detection" content="telephone=no">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

/* The ModalPhotoVirtual (background) */
.modalPhotoVirtual, .modalPhotoVirtual2 {
    display: none;
    position: fixed;
    z-index: 4;
    padding-top: 1%;
    /* left: 0; */
    top: 0;
    width: 100%;
    height: 100vh;
    overflow: auto;
    /* background-color: rgb(0,0,0); */
    background-color: rgba(0, 0, 0, 0.58);
}

/* ModalPhotoVirtual Content */
.modalPhotoVirtual-content, .modalPhotoVirtual-content2 {
    background-color: var(--grey);
    margin: auto;
    padding: 20px;
    margin-top: 50px;
    width: 90%;
    height: 85vh;
}

/* The CloseBtnPhoto Button */
.closeBtnPhoto, .closeBtnPhoto2, .closeBtnPhoto3, .closeBtnPhoto5 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeBtnPhoto:hover,
.closeBtnPhoto:focus,
.closeBtnPhoto2:hover,
.closeBtnPhoto2:focus,
.closeBtnPhoto3:focus,
.closeBtnPhoto3:hover,
.closeBtnPhoto5:focus,
.closeBtnPhoto5:hover
 {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
		            /*       EEFCTOS DE IMAGENES        */
        .imagenPano{
        background-image: url('image/demoPanoView.jpg');
        background-repeat: repeat-x;
        	width: 100%;
		    height: 100vh;
		    position: relative;
		    background-size: cover;
        }
        .imagenPano{
		    -webkit-animation: animatedBackground 280s alternate ease-in-out infinite;
		    animation-name: mov-izq;
		    animation-duration: 280s;
		    animation-iteration-count: infinite;
		    animation-timing-function: linear;
		    animation-delay: 0s;
		    -moz-animation-name: mov-izq;
		    -moz-animation-duration: 280s;
		    -moz-animation-iteration-count: infinite;
		    -moz-animation-timing-function: linear;
		    -moz-animation-delay: 0s;
		    -webkit-animation-name: mov-izq;
		    -webkit-animation-duration: 280s;
		    -webkit-animation-iteration-count: infinite;
		    -webkit-animation-timing-function: linear;
		    -webkit-animation-delay: 0s;
        }
        /*

         */
	    @keyframes mov-izq{
	    	    0% { background-position: 0em }
          100%{background-position:-3000px}
        }
        @-webkit-keyframes mov-izq{
        	    0% { background-position: 0em }
            100%{background-position:-3000px}
        }


        #myBtnUp{
    	    position: fixed;
		    bottom: 20px;
		    right: 30px;
		    z-index: 2;
		    /* font-size: 18px; */
		    /* border: none; */
		    outline: none;
		    background-color: var(--greyHigh);
		    color: white;
		    cursor: pointer;
		    padding: 10px;
		    border-radius: 10px;
        }
		#myBtnUp:hover{background-color:var(--green);}

	.banSlider {
    background-image: url(image/15.jpg);
    /* width: 200%; */
    /* height: 400px; */
    text-align: center;
    font-size: 18px;
    /* display: -webkit-box; */
    display: -ms-flexbox;
    /* display: -webkit-flex; */
    /* display: flex; */
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    background-size: cover;
    background-position: 0px 0px;
    position: relative;
    box-sizing: border-box;
    -webkit-animation: animatedBackground 5s alternate ease-in-out infinite;
    -moz-animation: animatedBackground 5s alternate ease-in-out infinite;
    -ms-animation: animatedBackground 5s alternate ease-in-out infinite;
    -o-animation: animatedBackground 5s alternate ease-in-out infinite;
    /* margin-top: -25%; */
    }

/* Full-width input fields */
input[type=text], input[type=tel], input[type=email], input[type=password], input[type=select] {
    width: 90%;
    padding: 12px;
    margin: 7px 0px 8px 0px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    outline: none;
    border-bottom: var(--green) solid 3px;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=tel]:focus, input[type=email]:focus, input[type=password]:focus, input[type=select]:focus {
    background-color: var(--green);
    outline: none;
    border-bottom: var(--whitteSolid) solid 3px;
    color: var(--textHover);
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn {
  float: left;
  width: 50%;
}

/* The ModalInfo (background) */
.modalInfo {
    position: fixed;
    top: 0px;
    width: 100%;
    overflow-y: auto;
    height: 100%;
    right: 10px;
}

.modalInfo-content {
    width: 500px;
    float: right;
}

/* The Close Button (x) */
.close {
    position: relative;
    bottom: 0px;
    top: 0px;
    font-size: 0.5em;
    color: #ffffff;
    background-color: black;
}

.close:hover,
.close:focus {
    color: var(--green);
    cursor: pointer;
}

/* Add Zoom Animation */
.animateInfo {
    -webkit-animation: animateInfozoom 0.6s;
    animation: animateInfozoom 0.6s;
}

@-webkit-keyframes animateInfozoom {
    from {top: -500px;-webkit-transform: scale(0)}
    to {top: 0px;-webkit-transform: scale(1)}
}

@keyframes animateInfozoom {
    from {top: -500px; transform: scale(0)}
    to {top: 0px;transform: scale(1)}
}


body{
    background-color: coral
}

.flag {
    box-sizing: border-box;
    width: 500px;
    height: auto;
    margin: 0 auto;
    /* padding-top: 30px; */
    position: relative;
    background-color: #B8C1CF;
    color: white;
    font-size: 28px;
    letter-spacing: 0.2em;
    text-align: center;
    font-size: 20px;
    text-transform: uppercase;
}

.triangulo-equilatero-bottom:hover, .button:hover .triangulo-equilatero-bottom{
	border-bottom: 150px solid #000000;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
.triangulo-equilatero-bottom:hover .btn1{

      background-color: black;
}
.triangulo-equilatero-bottom {
    position: absolute;
    bottom: 180px;
    width: 0px;
    height: 0px;
    top: 600px;
    border-right: 300px solid transparent;
    border-top: 0px solid transparent;
    border-left: 200px solid transparent;
    border-bottom: 150px solid #59AF31;
    /* margin: 0 auto; */
}

.button {
    background-color: #59AF31;
    border: none;
    color: white;
    /* padding: 0px 0px 0px 0px; */
    display: inline-flex;
    font-size: 35px;
    margin: 75px 0px 0px -40px;
    cursor: pointer;
}
.pieTri{
    width: 100%;
    height: 300px;
    background-color: goldenrod;
}

.pieTriangulo{
    /*Para Web Desktop*/
    position: relative;
    width: 0px;
    height: 0px;
    margin: 0 auto;
    border-right: 300px solid var(--greyLow);
    border-top: 5px solid var(--greyLow);
    border-left: 200px solid var(--greyLow);
    border-bottom: 150px solid #090c0700;
}

.containerFlag{
        width: 500px;
}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: var(--green);
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: var(--green);
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

</head>
	<body id="escenika" data-spy="scroll" data-target=".navbar" data-offset="60">
		<header id="header" class="header">
			<div class="backImg">
					<svg class="contTriangulo" height="50%" width="100%">
					  <polygon class="triangulo" points="350,0 980,400 0,400"></polygon>
					</svg>
				<div class="menu">
					<a href="#mapaGoolePlugIn">
						<button id="btnShowroom" class="boton bTri btn1 btnInformes">SHOWROOM</button>
					</a>
					<button id="btnStart" class="boton bTri btn1 btnInformes" onclick="document.getElementById('id01').style.display='block'" >INFORMES</button>
				</div>
				<div class="backgroundHome colorDegradado">
					<div class="contLogo">
						<div class="logoEsc">
							<img class="logoImg" src="image/Escenika-LogoHome.png" alt="Logo de Escenika">
						</div>
					</div>
				</div>
			</div>
		</header>
	<!-- /header -->
		<content id="content">
			<div id="contentHeader" class="imagenPano">
				<div class="contentMenu">
					<div class="contLogoH">
						<div class="logoH">
							<img class="logoImgH" src="image/logohorizontal.png" alt="Logo de Escenika Horizontal">
						</div>
					</div>
					<div class="contLogoMenus">
						<div class="menus">
							<a href="#contentArqui"class="boton bTri btn3">ARQUITECTURA</a>
							<a href="#contentDeptos" class="boton bTri btn3">DEPARTAMENTOS</a>
							<a href="#contentEstilo"class="boton bTri btn3">ESTILO DE VIDA</a>
							<a href="#mapaGoolePlugIn" class="boton bTri btn3">UBICACIÓN</a>
						</div>
					</div>
				</div>
				<div class="contPano colorPaisajeDegradado">
					<div class="contMjeAbout">
						<div class="positionContMje">
							<svg class="contPanoTraingulo">
							  <polygon class="triangulo" points="350,100 900,350 70,350"></polygon>
							  Sorry, your browser does not support inline SVG.
							</svg>
							<p class="txtAbout tittleNosotros">
								DONDE EL PROTAGONISTA
								<strong>ERES TÚ</strong>
							</p>
							<p class="txtAbout contentNosotros">
								Escenika, es un lugar conectado con lo que más quieres, rodeado de espacios únicos,
								para disfrutar de un estilo de vida diferente, donde los contrastes de la vida son posibles,
								los ritmos y los silencios crean un escenario para contemplar una vista panorámica increíble,
								logrando transmitir un tu entorno en armonía. <br><br>
								El proyecto se encuentra ubicado en un cluster residencial ubicado al norte de la ciudad, que cuenta con privacidad y seguridad en una zona exclusiva, consolidada y provista de un contexto moderno, funcional y conectado a excelentes vías de comunicación.
							</p>
						</div>
					</div>
				</div>
			</div>
        <a href="#contentHeader" title="To Top">
            <button id="myBtnUp" title="Ir Arriba">
                <i style="font-size:35px" class="fa">&#xf139;</i>
            </button>
        </a>
			<div id="contentProyect">
				<div class="contenCaract">
					<div id="btnVirtual3" class="contentDescription">
						<div class="banderaText">
							<div class="backIconLogoC">
							</div>
							<div class="iconLogoC iconPerfect">
							</div>
							<h2 class="tDesc">INTELIGENTE</h2>
							<h3 class="stDesc">SISTEMA DOMÓTICO</h3>
							<hr class="lineaBandera">
								<p class="txtDesc">
									Todos los departamentos están equipados con un sistema de domótica (departamentos inteligentes),
									para brindar armonía y comodidad. El poder de transformar cualquier espacio con luz ahora es tuyo,
									con solo tocar un botón.
								</p>
						</div>
						<div class="bandera">
						</div>
					</div>
						<div class="contentDescription noLink">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconVista">
								</div>
								<h2 class="tDesc">VISTA</h2>
								<h3 class="stDesc">PANORÁMICA</h3>
								<hr class="lineaBandera">
									<p class="txtDesc">
										Comienza a apreciar lo que nos rodea y a disfrutar los paisajes que nos regala el horizonte.
										En Escenika las vistas que se pueden contemplar son únicas y se disfrutan en todos los
										departamentos y sus habitaciones.
									</p>
							</div>
							<div class="bandera">
							</div>
						</div>

						<div class="contentDescription">
                <a href="#mapAmenidades">
    							<div class="banderaText">
    								<div class="backIconLogoC">
    								</div>
    								<div class="iconLogoC iconParque">
    								</div>
    								<h2 class="tDesc">AMPLIAS</h2>
    								<h3 class="stDesc">ÁREAS VERDES</h3>
    								<hr class="lineaBandera">
    							<p class="txtDesc">
										Los espacios abiertos de Escenika en conjunto suman una superficie mayor a los
										35,000 m<sup>2</sup> de áreas verdes, los cuales rodean y envuelven todo el desarrollo
										de una forma natural y amigable, para practicar actividades deportivas y recreativas.
    							</p>
    							</div>
    							<div class="bandera">
    							</div>
                </a>
						</div>
						<div class="contentDescription" onclick="document.getElementById('myModalPhotoVirtual2').style.display='block'">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconCalentador">
								</div>
								<h2 class="tDesc">CALENTADOR</h2>
								<h3 class="stDesc">SOLAR DE AGUA</h3>
								<hr class="lineaBandera">
							<p class="txtDesc">
								Cada uno de los departamentos se encuentra equipado con calentadores solares,
								lo que permite que el agua que se consuma sea calentada por radiación solar
								logrando un ahorro de más del 50% mensual de combustible, tendiendo conciencia con el medio ambiente.
							</p>
							</div>
							<div class="bandera">
							</div>
						</div>
				</div>
			</div>

			<div id="contentArqui">
				<div class="contTDetails">
					<div class="CArq">
							<img class="imgArq" src="icons/areasVerdes-min.png" alt="Icono Dimenciones">
							<p class="txtArq">3.5 hectáreas de terreno y amenidades.</p>
					</div>
					<div class="CArq">
							<img class="imgArq" src="icons/edificio-min.png"alt="Icono Dimenciones">
							<p class="txtArq">
								20 torres de lujo. <br>
								9 y 10 niveles cada una. <br>
								4 departamentos inteligentes por nivel.
							</p>
					</div>
					<div class="CArq">
							<img class="imgArq" src="icons/recamaras-min.png" alt="Icono Dimenciones">
							<p class="txtArq">
								Modelos de 68 y 98 m<sup>2</sup>  aprox.  <br>	2 ó 3 recámaras . <br>	2 elevadores por torre.
							</p>
					</div>
				</div>
				<!--CONTENEDOR DOS-->
				<div class="contTDetails">
					<div class="CArq CArqD">
							<img class="imgArq" src="icons/cocheIcon-min.png" alt="Icono Estacionamiento">
							<p class="txtArq">
								Dos estacionamientos por departamento.
							</p>
					</div>
					<div class="CArq CArqD">
							<img class="imgArq" src="icons/pluma-min.png" alt="Icono Dimenciones">
							<p class="txtArq">
								Pórtico de ingreso controlado con pluma y portón. <br>
								Barda perimetral.
							</p>
					</div>
					<div class="CArq CArqD">
							<img class="imgArq" src="icons/policia-min.png" alt="Icono Dimenciones">
							<p class="txtArq">
								Caseta de vigilancia con acceso controlado.<br>
								Sistema de seguridad con equipo de vanguardia.
							</p>
					</div>
				</div>
			</div>

			<div id="contentDeptos">
				<div class="titleDeptos">
					<div class="trianguloTittle">
						<img class="trianguloImg" src="icons/tiitletriangulo.png">

					</div>
					<div class="contTituloSubtitulo">
						<div class="subtittle">
							CONOZCA NUESTROS
						</div>
						<div class="tittle">
							DEPARTAMENTOS
						</div>
					</div>
				</div>
				<!--INICIO DE DEPARTAMENTOS-->
				<div class="contGralDeptosBox">
					<div class="containerBoxCaract">
					  <div class="card">
					    <div class="front boxFront">
							<div class="boxBackIMG">
							</div>
							<div class="boxDescDepto">
								<div class="txtDescDepto">
									<div class="tittle">
										MODELO 62.77 m<sup>2</sup>
									</div>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 2
								</div>
               <div class="txtDataDepto">
                    <img class="iconDepto" src="icons/more.png" alt="">más
                </div>
							</div>
					    </div>
					    <div class="back boxBack">
					    						   			 <!--
					   			 	FRONT BACK
					   			 	-->
					   		<div class="boxBackPlano">
							</div>
							<div class="boxDescPlano">
								<div class="listPlano">
									<div class="tittle">
										MODELO 62.77 m<sup>2</sup> <br>
									</div>
									<ul class="ultxt">
										<li>Recámara principal con baño y vestidor</li>
										<li>Piso de tecnología tipo madera y porcelanato</li>
										<li>Cocina tipo isla de granito con barra desayunador</li>
										<li>2 baños</li>
										<li>1 balcon por departamento</li>
										<li>Cuarto de lavado</li>
										<li>Altura interior de 2.7 metros</li>
										<li>Cancelaría de aluminio de pared a pared y piso a techo</li>
										<li>Closets en MDF recubiertos con laminado plástico</li>
										<li>Calentador solar de agua</li>
										<li>Persianas incluidas</li>
										<li>Sistema de domótica</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div>
										<a href="#contentDeptos" id="btnVirtual2" class="boton bTri btn1 rPhotoBtn">RECORRIDO FOTOGRAFICO</a>
									</div>
								</div>
							</div>
					    </div>
					  </div>
					</div>
					<div class="containerBoxCaract">
					  <div class="card">
					    <div class="front boxFront">
							<div class="boxBackDepto2">
							</div>
							<div class="boxDescDepto">
								<div class="txtDescDepto">
									<div class="tittle">
										MODELO 65.19 m<sup>2</sup>
									</div>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 2
								</div>
                <div class="txtDataDepto">
                    <img class="iconDepto" src="icons/more.png" alt="">más
                </div>
							</div>
					    </div>
					    <div class="back boxBack">
					    						   			 <!--
					   			 	FRONT BACK
					   			 	-->
					   		<div class="boxBackPlano2">
							</div>
							<div class="boxDescPlano">
								<div class="listPlano">
									<div class="tittle">
										MODELO 65.19 m<sup>2</sup> <br>
									</div>
									<ul class="ultxt">
										<li>Recámara principal con baño y vestidor</li>
										<li>Piso de tecnología tipo madera y porcelanato</li>
										<li>Cocina tipo isla de granito con barra desayunador</li>
										<li>2 baños</li>
										<li>1 balcon por departamento</li>
										<li>Cuarto de lavado</li>
										<li>Altura interior de 2.7 metros</li>
										<li>Cancelaría de aluminio de pared a pared y piso a techo</li>
										<li>Closets en MDF recubiertos con laminado plástico</li>
										<li>Calentador solar de agua</li>
										<li>Persianas incluidas</li>
										<li>Sistema de domótica</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div>
										<a href="#contentDeptos" id="btnVirtual" class="boton bTri btn1 rPhotoBtn">RECORRIDO FOTOGRAFICO</a>
									</div>

								</div>
							</div>
					    </div>
					  </div>
					</div>
				</div>

<!--SEGUNDA ETAPA DE DEPTOS-->
<div class="contGralDeptosBox">
					<div class="containerBoxCaract">
					  <div class="card">
					    <div class="front boxFront">
							<div class="boxBackDepto3">
							</div>
							<div class="boxDescDepto">
								<div class="txtDescDepto">
									<div class="tittle">
										MODELO 66.69 m<sup>2</sup>
									</div>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 2
								</div>
               <div class="txtDataDepto">
                    <img class="iconDepto" src="icons/more.png" alt="">más
                </div>
							</div>
					    </div>
					    <div class="back boxBack">
					    						   			 <!--
					   			 	FRONT BACK
					   			 	-->
					   		<div class="boxBackPlano3">
							</div>
							<div class="boxDescPlano">
								<div class="listPlano">
									<div class="tittle">
										MODELO 66.69 m<sup>2</sup> <br>
									</div>
									<ul class="ultxt">
										<li>Recámara principal con baño y vestidor</li>
										<li>Piso de tecnología tipo madera y porcelanato</li>
										<li>Cocina tipo isla de granito con barra desayunador</li>
										<li>2 baños</li>
										<li>1 balcon por departamento</li>
										<li>Cuarto de lavado</li>
										<li>Altura interior de 2.7 metros</li>
										<li>Cancelaría de aluminio de pared a pared y piso a techo</li>
										<li>Closets en MDF recubiertos con laminado plástico</li>
										<li>Calentador solar de agua</li>
										<li>Persianas incluidas</li>
										<li>Sistema de domótica</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div>
										<a href="#contentDeptos" id="btnVirtual2" class="boton bTri btn1 rPhotoBtn">RECORRIDO FOTOGRAFICO</a>
									</div>
								</div>
							</div>
					    </div>
					  </div>
					</div>
					<div class="containerBoxCaract">
					  <div class="card">
					    <div class="front boxFront">
							<div class="boxBackDepto4">
							</div>
							<div class="boxDescDepto">
								<div class="txtDescDepto">
									<div class="tittle">
										MODELO 98  m<sup>2</sup>
									</div>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 3
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 2 1/2
								</div>
                <div class="txtDataDepto">
                    <img class="iconDepto" src="icons/more.png" alt="">más
                </div>
							</div>
					    </div>
					    <div class="back boxBack">
					    						   			 <!--
					   			 	FRONT BACK
					   			 	-->
					   		<div class="boxBackPlano4">
							</div>
							<div class="boxDescPlano">
								<div class="listPlano">
									<div class="tittle">
										MODELO 98 m<sup>2</sup> <br>
									</div>
									<ul class="ultxt">
										<li>Recámara principal con baño y vestidor</li>
										<li>Piso de tecnología tipo madera y porcelanato</li>
										<li>Cocina tipo isla de granito con barra desayunador</li>
										<li>2 y 1/2 baños</li>
										<li>2 balcones por departamento</li>
										<li>Cuarto de lavado</li>
										<li>Altura interior de 2.7 metros</li>
										<li>Cancelaría de aluminio de pared a pared y piso a techo</li>
										<li>Closets en MDF recubiertos con laminado plástico</li>
										<li>Calentador solar de agua</li>
										<li>Persianas incluidas</li>
										<li>Sistema de domótica</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div>
										<a href="#contentDeptos" id="btnVirtual" class="boton bTri btn1 rPhotoBtn">RECORRIDO FOTOGRAFICO</a>
									</div>

								</div>
							</div>
					    </div>
					  </div>
					</div>
				</div>
<!--FIN DEPARATEMTOS-->
			</div>
			<div id="contentEstilo">
				<!--
				-->
          <div class="divEstilo div1Estilo">
  				<svg class="contTrainguloAmenidades" height="50%" width="100%">
  				  <polygon id="amenidadPoligon" class="trianguloSolid" points="390,90 900,400 0,400"></polygon>
  				</svg>
  				<div class="mjeBoxing">
  					<p class="pBoxesMje">
							<span class="TXTri1">Donde tu vida, </span> <br>
							<span class="TXTri2"> está más allá de </span> <br>
							<span class="TXTri3"> tu espacio</span>
  					</p>
  				</div>
					<div class="tittleDeptosIzq">
						<div class="contTituloSubtitulo2">
							<div class="subtittle tiitle2">
								ESPACIOS PARA TU COMODIDAD
							</div>
							<div class="tittle tiitle2">
								ESTILO DE VIDA
							</div>
							<div class="trianguloTittle2">
							<img class="trianguloImg" src="icons/tiitletrianguloINVERT.png">
						</div>
						</div>
					</div>
					<div class="containerSlidersFull amenidadColor">
						<div class="mySlides fade">
						  <img class="imagenAjustada" src="image/amenidades/gym.jpg" alt="GYM de Escenika">
						</div>
						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/DEPTOB1_int.png" alt="Interior departamento">
						</div>
						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/amenidades/niniosJugando.jpg" alt="Niños Jugando">
						</div>

						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/amenidades/familia.jpg" alt="foto de Familia">
						</div>
						<div class="mySlides fade">
						  <img class="imagenAjustada" src="image/amenidades/salon.jpg" alt="Salon de Eventos Escenika">
						</div>
						<div class="mySlides fade">
						  <img class="imagenAjustada" src="image/amenidades/asadoresAmigos.jpg" alt="Conviviendo con amigos">
						</div>
						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/DEPTOA1_int.png" alt="Interior departamento">
						</div>
					</div>
				</div>
				<div id="mapAmenidades" class="divEstilo div2Estilo">
					<div class="ContimagePinMAP">
						<div class="contenedorMapaScroll">
							<img class="imgMap" src="image/amenidades/miniMap.png">
							<!-- PIN 1 	-->
                  <a href="#miModalAmeni1">
                    <div class="contPinBoxes1">
                        <img class="imgPin checkPoint" src="icons/pin.png">
                        <div class="boxPin">
                            ASADORES
										  </div>
										</div>
								  </a>
									<!-- FIN PIN 1-->
									<!-- PIN 2 	-->
                  <a href="#miModalAmeni2">
                      <div class="contPinBoxes2">
                          <img class="imgPin checkPoint" src="icons/pin.png">
                          <div class="boxPin">
                              SENDERO
                          </div>
                      </div>
                  </a>
									<!-- FIN PIN 2-->
									<!-- PIN 3 	-->
                  <a href="#miModalAmeni3">
                      <div class="contPinBoxes3">
                          <img class="imgPin checkPoint" src="icons/pin.png">
                          <div class="boxPin">
                              CANCHAS DE USOS MULTIPLES
                          </div>
                      </div>
                  </a>
						<!-- FIN PIN 3-->
					<!-- PIN 4 	-->
						<a href="#miModalAmeni4">
								<div class="contPinBoxes4">
										<img class="imgPin checkPoint" src="icons/pin.png">
										<div class="boxPin">
												ÁREA DE JUEGOS
										</div>
								</div>
						</a>
						<!-- FIN PIN 4-->
						<!-- PIN 5 	-->
						<a href="#miModalAmeni5">
								<div class="contPinBoxes5">
										<img class="imgPin checkPoint" src="icons/pin.png">
										<div class="boxPin">
												KIOSCO DE CONVIVENCIA
										</div>
								</div>
						</a>
						<!-- FIN PIN 5-->
						</div>
					</div>
				</div>
			</div>

			<!-- AMENIDADES CALENTADOR-->
			<div id="miModalCalentador" class="modal1">
			  <div class="modal-contenido">
			    <div class="TModalAmen">
			        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
			    </div>
			    <div class="ContBoxAmeni">
			        <div class="contModalAmeni">
			            <div class="boxImageAmenidad box contAmenidades">
			                <img class="imagenAjustada img" src="image/amenidades/asadores.jpg">
			                    <div class="cover top">
			                  <h2 class="tittle">ASADORES</h2>
			                  <p class="intro">
													Qué puede ser más agradable que reunirse con amigos o familiares y disfrutar de una parrillada al aire libre, obtén una vida en armonía sin dejar tu entorno.
												</p>
			                </div>
			            </div>
			        </div>
			        <div class="contModalAmeni">
			            <div class="boxAmenidad">
			                  <div class="boxImageAmenidad contAmenidades">
			                  	<img class="imagenAjustada img" src="image/amenidades/parrilaAmigos.jpg">
			                  </div>
			            </div>
			            <div class="boxAmenidad">
			              <div class="boxImageAmenidad contAmenidades">
			                  <img class="imagenAjustada img" src="image/amenidades/asador1.jpg">
			              </div>
			            </div>
			        </div>
			    </div>
			  </div>
			</div>
			<!-- AMENIDADES CALENTADOR-->
<!-- AMENIDADES ZONE BOX 1-->
<div id="miModalAmeni1" class="modal1">
  <div class="modal-contenido">
    <div class="TModalAmen">
        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
    </div>
    <div class="ContBoxAmeni">
        <div class="contModalAmeni">
            <div class="boxImageAmenidad box contAmenidades">
            	<img class="imagenAjustada img" src="image/amenidades/asador1.jpg">
                    <div class="cover top">
                  <h2 class="tittle">ASADORES</h2>
                  <p class="intro">
					Qué puede ser más agradable que reunirse con amigos o familiares y disfrutar de una parrillada al aire libre, obtén una vida en armonía sin dejar tu entorno.
				</p>
                </div>
            </div>
        </div>
        <div class="contModalAmeni">
            <div class="boxAmenidad">
                  <div class="boxImageAmenidad contAmenidades">
                	<img class="imagenAjustada img" src="image/amenidades/asadorParque.jpg">
                  </div>
            </div>
            <div class="boxAmenidad">
              <div class="boxImageAmenidad contAmenidades">
                  <img class="imagenAjustada img" src="image/amenidades/parrilaAmigos.jpg">
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- AMENIDADES ZONE BOX 1-->

<!-- AMENIDADES ZONE BOX 2-->
<div id="miModalAmeni2" class="modal1">
  <div class="modal-contenido">
    <div class="TModalAmen">
        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
    </div>
    <div class="ContBoxAmeni">
        <div class="contModalAmeni">
            <div class="boxImageAmenidad box contAmenidades">
                <img class="imagenAjustada img" src="image/amenidades/corriendoSendero.jpg">
                    <div class="cover top">
                  <h2 class="tittle">SENDERO PANORÁMICO</h2>
                  <p class="intro">
						Podrás caminar o correr a cualquier hora del día, disfrutando de la vegetación
						y el hermoso paisajismo, haciendo de un sitio de ensueño para la recreación y la
						convivencia. El andador esta cubierto con una suave arena fina y gran parte
						se encuentra iluminado.

					</p>
                </div>
            </div>
        </div>
        <div class="contModalAmeni">
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
	                 <img class="imagenAjustada img" src="image/amenidades/sendero1.jpg">
                </div>
            </div>
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
                    <img class="imagenAjustada img" src="image/amenidades/familyRun.jpg">
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- AMENIDADES ZONE BOX 2-->

<!-- AMENIDADES ZONE BOX 3-->
<div id="miModalAmeni3" class="modal1">
  <div class="modal-contenido">
    <div class="TModalAmen">
        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
    </div>
    <div class="ContBoxAmeni">
        <div class="contModalAmeni">
            <div class="boxImageAmenidad box contAmenidades">
                <img class="imagenAjustada img" src="image/amenidades/canchas1.jpg">
                    <div class="cover top">
                  <h2 class="tittle">Canchas deportivas de usos múltiples</h2>
                  <p class="intro">
						Queremos que los habitantes tengan tranquilidad y balance de vida,
						por lo que buscamos el equilibrio impulsando a que realice actividades
						deportivas, pudiendo practicar voleibol, fútbol rápido y básquetbol.

					</p>
                </div>
            </div>
        </div>
        <div class="contModalAmeni">
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
	                 <img class="imagenAjustada img" src="image/amenidades/niniosJugando.jpg">
                </div>
            </div>
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
                    <img class="imagenAjustada img" src="image/amenidades/tenis-1.jpg">
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- AMENIDADES ZONE BOX 3-->
<!-- AMENIDADES ZONE BOX 4-->
<div id="miModalAmeni4" class="modal1">
  <div class="modal-contenido">
    <div class="TModalAmen">
        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
    </div>
    <div class="ContBoxAmeni">
        <div class="contModalAmeni">
            <div class="boxImageAmenidad box contAmenidades">
                <img class="imagenAjustada img" src="image/amenidades/jueguito.jpg">
                    <div class="cover top">
											<h2 class="tittle">ÁREA DE JUEGOS</h2>
                  <p class="intro">
										Área especialmente diseñada y equipada para hacer de la diversión
										de los pequeños una actividad física diferente, en donde aprenden
										a compartir con nuevos amigos.
									</p>
                </div>
            </div>
        </div>
        <div class="contModalAmeni">
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
	                 <img class="imagenAjustada img" src="image/amenidades/juegos1.jpg">
                </div>
            </div>
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
                    <img class="imagenAjustada img" src="image/amenidades/resbaladilla.jpg">
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- AMENIDADES ZONE BOX 4-->
<!-- AMENIDADES ZONE BOX 5-->
<div id="miModalAmeni5" class="modal1">
  <div class="modal-contenido">
    <div class="TModalAmen">
        <a class="linkCloseAmeni" href="#amenidadPoligon">&times;</a>
    </div>
    <div class="ContBoxAmeni">
        <div class="contModalAmeni">
            <div class="boxImageAmenidad box contAmenidades">
                <img class="imagenAjustada img" src="image/amenidades/familyDog.jpg">
                    <div class="cover top">
                  <h2 class="tittle">Kioscos de Convivencia</h2>
                  <p class="intro">
										Ubicados a lo largo de la extensión de áreas verdes se contará con decks techados externos para momentos de convivencia y placer.
									</p>
                </div>
            </div>
        </div>
        <div class="contModalAmeni">
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
	                 <img class="imagenAjustada img" src="image/amenidades/mesaComiendo.jpg">
                </div>
            </div>
            <div class="boxAmenidad">
                <div class="boxImageAmenidad contAmenidades">
                  <img class="imagenAjustada img" src="image/amenidades/ninias.jpg">
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- AMENIDADES ZONE BOX 5-->
			<div id="contentContacto">
				<div class="contentContact">
					<div class="titleDeptos">
						<div class="trianguloTittle">
							<img class="trianguloImg" src="icons/tiitletrianguloW.png">
						</div>
						<div class="contTituloSubtitulo">
							<div class="subtittle">
								NUESTROS ASESORES ESTAN
							</div>
							<div class="tittle">
								A TU SERVICIO
							</div>
						</div>
					</div>

				<!-- 	SLIDERS DE VENDEDORES	-->
					<div id="salesman" class="contentAsesores">
						<?php require 'php/data.php';?>
						<?php
							//GEenerando el contenedor, valor obtenido de $containers
						$contadorVendedor = 4; //El ultimo vendedor ID
						$contadosVendedor = 0; //Se traduce como el ID inicial del contenedor 1
							for ($i=0; $i <= $containers; $i++) {
								#pintando el contenedor sliders
								echo '
								  <!-- 	CONTENEDOR '.$i.' de '.$containers.' VENDEDOR '.$contadosVendedor.' de '.$noSales.' -->
									<div class="mySalesManSlider">
									<div class="contentAsesoresRandoom">';

									$restanteVendedor = $noSales-$contadosVendedor ; //ME FALTAN POR MOSTRAR VENDEDORES
									if ($restanteVendedor >= 4) {
											for ($j=$contadosVendedor; $j < $contadorVendedor; $j++) {
												echo '
													<!-- 	AGENTE '.$j.' de '.$noSales.' CONTADOR ID: '.$contadorVendedor.' -->
														<div class="contAgentePerson">
															<div class="boxFrontAgent">
																<div class="boxBackIMG2">
																	<img class="imagenAjustada img" src="image/executivePhotos/'.$salesman[$j][4].'.jpg">
																</div>
																<div class="boxontactoAgente">
																	<div class="txtContactoAgente">
																		<div class="nameAgente">
																			'.$salesman[$j][1].'
																		</div>
																		<hr class="lineaBandera">';
																		/*
																			<p class="txtDesc txtBoxFormat">
																				'.$salesman[$j][2].' <br>
																				'.$salesman[$j][3].'
																			</p>';
																			*/
																			$mailSend = $salesman[$j][3];
																			echo '
																			<a id="btn'.$contadosVendedor.'" value="'.$salesman[$j][2].'" href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="someFun(&quot; '.$salesman[$j][1].'&quot;)">CONTACTAR</a>
																	</div>
																</div>
															</div>
														</div>';
										++$contadosVendedor;
											}
											$contadorVendedor = $contadorVendedor + 4;
									}
									else{
									//echo "NO CANDITADO MENOS A 4";
										//Ordenando los ultimos vendedores
										for ($j=$contadosVendedor; $j < $noSales; $j++) {
												echo '
													<!-- 	AGENTE '.$j.' de '.$noSales.' -->
														<div class="contAgentePerson">
															<div class="boxFrontAgent">
																<div class="boxBackIMG2">
																	<img class="imagenAjustada" src="image/executivePhotos/'.$salesman[$j][4].'.jpg">
																</div>
																<div class="boxontactoAgente">
																	<div class="txtContactoAgente">
																		<div class="nameAgente">
																			'.$salesman[$j][1].'
																		</div>
																		<hr class="lineaBandera">';
																		/*
																			<p class="txtDesc txtBoxFormat">
																				'.$salesman[$j][2].' <br>
																				'.$salesman[$j][3].'
																			</p>';
																			*/
																			$mailSend = $salesman[$j][3];
																			echo '
																			<a id="btn'.$contadosVendedor.'" value="'.$salesman[$j][2].'" href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="someFun(&quot; '.$salesman[$j][1].'&quot;)">CONTACTAR</a>
																	</div>
																</div>
															</div>
														</div>';
												++$contadosVendedor;
										}
									}
								echo '
									</div>
								</div>';
							}
						?>
						<a class="prevSalesMan" onclick="plusSlides(-1)">❮</a>
						<a class="sigSalesMan" onclick="plusSlides(1)">❯</a>
					</div>
				</div>
				<!---BANNER---->
				<div class="RutasInfo">
					<div class="Rutastxt">
						• 5 vías de acceso: Aut. Lechería-Chamapa, Perif. Manuel Ávila Camacho, Viaducto Elevado Bicentenario, Vía Gustavo Baz, Av. José López Portillo.
						<br><br>
						• Santa Fe en 40 minutos mediante Nortebus vía Chamapa-Lecheria. * <br><br>
						• Reforma e Insurgentes en 40 minutos y Polanco en 45 minutos vía Tren Suburbano. * <br>
						<hr class="lineContact">
						<span class="littleWord">
							*parametrica llegando a las 9:00 A.M. al lugar de destino según usuarios.
						</span>
					</div>

				</div>

				<!---BANNER---->
				<div  id="locationGoo" class="contentMapa">
					<div class="contInstruccions">
						<p class="instructions">
							Utiliza el mapa que se presenta para visualizar todos los servicios relacionados en la zona de influencia de este desarrollo,
							<blockquote>
								<p class="flechaInst"><img id="pelota" class="iconArrow" src="icons/row.png">Da clic en el icono y selecciona del menú desplegable las diferentes capas.</p>
							</blockquote>
						</p>
					</div>
					<div id="mapaGoolePlugIn" class="contMapaGoogle">
						<iframe class="googleMap" src="https://www.google.com/maps/d/embed?mid=1u73tudK45NK7YBdSfxLBW64RvHFWfqYB" width="100%" height="100%">
						</iframe>
							<div class="ContInfoInsideMap colorDegradado">
								<div class="contactVisitTittle">
									VISITA NUESTRO SHOWROOM
									<hr class="lineContact">
								</div>
								<div class="contentDataContact">
									<div class="boxDataContact">
										<img class="iconContact" src="icons/point.png">
										<p class="txtAdreess">
											Av. Hacienda de Lindavista S/N, Esq. Hacienda de la Gavia, <br>
											Col. Hacienda del parque 2da Sección, Cuautitlán Izcalli, <br>
											CP 54769, Edo de Méx.
										</p>
									</div>
									<div class="boxDataContact">
										<img class="iconContact" src="icons/time.png">
										<p class="txtAdreess">
											<strong>
												Horarios de Atención: <br>
											</strong>
											Lun-Vie 10:00 - 20:00 hrs.<br>
											Sab 10:00 - 18:00 hrs. y Dom 11:00 - 17:00 hrs.
										</p>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</content>
		<footer id="footer">
			<div class="contentFooter">
				<div class="footer1">
					<p class="proyectAuthors">UN PROYECTO DE</p>
					<a href="http://www.decomet.mx/" target="_blank">
						<img class="iconAuthors" src="icons/dcmLogo.png">
					</a>
					<a href="http://www.gmasm.mx/" target="_blank">
						<img class="iconAuthors" src="icons/GMIcon.png">
					</a>
				</div>
				<div class="footer2">
					<p class="txtContactElectronic">
						<span class="CONTACTO">CONTACTO</span><br>
						<span class="TELEFONO">55-6915-7177</span><br>
						<span class="CORREO">contacto@escenika.com.mx <br></span>
					</p>
				</div>
				<div class="footer3">
					<a href="#" target="_blank">
						<img class="iconSocial" src="icons/face.png">
					</a>
					<a href="#" target="_blank">
						<img class="iconSocial" src="icons/tw.png">
					</a>
				</div>
			</div>
			<div class="autorized">
				<p class="txtAutorixed">
					Autorizado mediante la gaceta de gobierno del Estado de México tomo CXL número 15 de fecha 10 de Diciembre de 1985<br>
					<a id="btnVirtual5" href="#" onclick="document.getElementById('myModalPrivacity').style.display='block'">
						Aviso de Privacidad
					</a>

				</p>
			</div>
			<div class="contenedorArriba">
				<svg class="contTrainguloFooter" height="50%" width="100%">
				  <polygon class="trianguloSolid" points="380,90 900,400 0,400"></polygon>
				</svg>
				<div class="arrow"></div>
				<a href="#escenika" class="to-top">Ir arriba</a>
			</div>
		</footer>
<!--
		MODALS EMPLEADOS EN PARA VISUALIZAR OBJETOS
-->
<!-- Trigger/Open The ModalPhotoVirtual -->


	<!-- The ModalPhotoVirtual -->
	<div id="myModalPhotoVirtual" class="modalPhotoVirtual">

	  <!-- ModalPhotoVirtual content -->
	  <div class="modalPhotoVirtual-content">
	    <span class="closeBtnPhoto">&times;</span>
	    <p class="subtittle">RECORRIDO FOTOGRÁFICO VIRTUAL - DEPARTAMENTO CMYK MOD 2</p>
			<iframe class="recorrido-iframe" style="width:  100%;height:  90%;" src="https://my.matterport.com/show/?m=H6PfMfCeZTi&lang=es" frameborder="0" allowfullscreen>
			</iframe>
	  </div>

	</div>

		<!-- The ModalPhotoVirtual -->
	<div id="myModalPhotoVirtual2" class="modalPhotoVirtual2">

	  <!-- ModalPhotoVirtual content -->
	  <div class="modalPhotoVirtual-content2">
	    <span class="closeBtnPhoto2">&times;</span>
	    	<p class="subtittle">CALENTADOR SOLAR</p>
			<div class="containerAmenidades">
				<div class="contAmenidades">
					<div class="boxImageAmenidad">
						<img class="imagenAjustada img" src="image/amenidades/calentador-de_agua.jpg">
					</div>
				</div>
				<div class="contAmenidades">
					<div class="boxAmenidad">
    	       <div class="boxAmenidad infoG">
							 <h1 class="tDesc">Calentadores solares</h1>
							 Siendo una tendencia Eco Friendly el uso delos recursos naturales con un enfoque de conciencia para el medio ambiente, cada uno de los departamentos se encuentra equipado con calentadores solares de agua, en la que se aprovecha la energía solar limpia y renovable para calentar el agua, sin necesidad de gas o electricidad, esto permite ser una buena opción para obtener ahorros cuidando a nuestro planeta.
            </div>
					</div>
				</div>
			</div>
	  </div>
	</div>

			<!-- The Modal amenidades -->
	<div id="myModalAmenidades" class="modalPhotoVirtual">
	  <!-- ModalPhotoVirtual content -->
	  <div class="modalPhotoVirtual-content2">
	    <span class="closeBtnPhoto3">&times;</span>
	    <p class="subtittle">DOMÓTICA</p>
			<div class="containerAmenidades">
				<div class="contAmenidades">
					<div class="boxImageAmenidad">
						<img class="imagenAjustada img" src="image/amenidades/domoticoSistem.jpg">
					</div>
				</div>
				<div class="contAmenidades">
					<div class="boxAmenidad">
	         <div class="boxAmenidad infoG">
						 <h1 class="tDesc">Donde tu casa es inteligente</h1>
						 - Control de apertura y cierre de persianas <br>
						 - Gestión inteligente de iluminación <br>
						 Control total de luces y tonos de tu departamento.
						 Se pueden integrar completamente la iluminación, el sombreado y los sensores para un máximo ahorro de energía.
						 Crea la luz adecuada para cualquier actividad o estado de ánimo y ahorra energía mientras lo haces.
	          </div>
					</div>
					<div class="boxAmenidad">
						<div class="boxImageAmenidad">
							<img class="imagenAjustada img" src="image/amenidades/persianas.png">
						</div>
					</div>
				</div>
			</div>
	  </div>
	</div>



			<!-- The Modal Politicy -->
	<div id="myModalPrivacity" class="modalPhotoVirtual2">

	  <!-- ModalPhotoVirtual content -->
	  <div class="modalPhotoVirtual-content2 aviso colorDegradado">
	    <span class="closeBtnPhoto5">&times;</span>
	    <p class="tittle">AVISO DE PRIVACIDAD</p>

			<div class="aviso-content">
				<h1>DESCRIPCIÓN DEL AVISO</h1>
				<p>En Desarrolladora Escenika S.A. de C.V. contamos con domicilio en
					Av. Hacienda de Lindavista S/N, Esq. Hacienda de la Gavia, Col. Hacienda del parque 2da Sección, Cuautitlán Izcalli, CP 54769, Edo de Méx.
					es responsable del tratamiento de sus datos personales. Hacemos de su conocimiento que no solicitamos ni hacemos uso de datos personales sensibles.
					Los términos que se utilicen en el presente aviso, tendrán la definición que a los mismos le asigna la Ley Federal de Protección de Datos Personales
					en Posesión de Particulares.</p>
			</div>

			<div class="aviso-content">
				<h1>DATOS PERSONALES QUE RECABAMOS</h1>
				<p>Los datos personales que podemos llegar a recabar por la relación comercial que se lleva acabo se mantendrán como privados
					y solo solicitaremos información necesaria para llevar a cabo los requerimientos solicitados por los clientes;
					dentro los que encuentran: Nombres, Apellidos, Domicilios, teléfonos, correos electrónicos, fecha de nacimiento,
					información bancaria, Intereses sobre los productos, clave de Registro Federal de Contribuyentes, Información de
					formas de pago y toda aquella información que el usuario nos proporcione a lo largo de la relación contractual o comercial que se establezca.</p>
			</div>

			<div class="aviso-content">
				<h1><span style="display: inline-block;transform: rotate(180deg);">?</span>CON QUE FINALIDAD RECABAMOS LOS DATOS?</h1>
				<p>Los datos personales podrán ser tratados y utilizados por nosotros y nuestras filiales o subsidiarias nacionales e
					Internacionales para llevar a cabo algunas o todas las actividades relacionadas con el cumplimiento de las obligaciones
					que deriven de la relación comercial que se originen y deriven de la prestación de servicios o venta de productos;
					con el propósito de informar a los clientes del lanzamiento de nuevos productos, servicios, promociones y ofertas
					de nosotros o terceros, realizar estudios de mercado, así como cualquier otra actividad tendiente a promover y mejorar
					los servicios. La transferencia de los datos personales del usuario se encuentra limitada a aquellos actos, hechos
					y/o procedimientos que se requieran implementar a efecto de estar en posibilidad de cumplir con las obligaciones
					contractuales, regulatorias y comerciales en el curso ordinario de las operaciones. Si el usuario no manifiesta
					su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.</p>
			</div>


			<div class="aviso-content">
				<h1>MEDIOS PARA EJERCER LOS DERECHOS (A.R.C.O)</h1>
				<p>Los datos personales que recabamos de los usuarios serán tratados en estricto apego a la Ley. En cualquier momento, el usuario
					tendrá el derecho a solicitar el ejercicio de los derechos que le confiere la Ley, para limitar el acceso, la rectificación,
					cancelación u oposición; enviando su solicitud correspondiente por escrito al siguiente correo electrónico: contacto@elements.com.mx
					o comunicándose vía telefónica al 01 (55) 1106-2678, donde con gusto lo atenderemos.</p>
				<p>Si usted se registra vía telefónica o por algún medio digital y no desea recibir notificaciones y/o avisos sobre
					nosotros o marcas comerciales afiliadas, tendrá que indicarlo durante el proceso a la persona de Desarrolladora Escenika S.A. de C.V.
					que esté tratando en ese momento, marcándolo en el formulario que este entregando y en todo caso, dirigiéndose con nuestro departamento
					de Atención al Cliente.</p>
			</div>


			<div class="aviso-content" style="border:none">
				<h1>MODIFICACIONES AL AVISO DE PRIVACIDAD</h1>
				<p>Nos reservamos el derecho de efectuar en cualquier momento, cambios o modificaciones al presente aviso de privacidad, para la atención de novedades legislativas o jurisprudenciales, políticas internas, nuevos requerimientos para el ofrecimiento de nuestros productos y mejores prácticas en el servicio. Estas modificaciones estarán disponibles al público a través de los siguientes medios:</p>
				<p>• En nuestra página de internet www.elements.com.mx</p>
				<p>• Mediante anuncios visibles en nuestras instalaciones</p>
				<p>• Vía mail al correo electrónico que nos proporcionó</p>
				<p>En la medida que el usuario no solicite, en los términos antes mencionados, la cancelación y/u oposición de sus información y continúe accediendo y/o utilizando, parcial o totalmente, los servicios, implicará que ha aceptado y consentido tales cambios y modificaciones. Al proporcionarnos sus datos personales, expresa, reconoce y acepta el presente Aviso, según el mismo pueda ser modificado en tiempo, y otorga su consentimiento para procesar sus datos personales de la forma que se explica en el presente. Si no está de acuerdo o acepta este aviso, no deberá proporcionar ninguna información, ni utilizar los servicios que le ofrecemos.</p>
				<p style="text-align: right">FECHA DE ACTUALIZACIÓN: 18-ENERO-2018</p>
			</div>
	  </div>
	</div>

			<!-- The modalContacto -->
<div id="id01" class="modalInfo animateInfo" style="z-index: 3; display: none">
  <form class="modalInfo-content" action="send.php" method="POST">
        <div class="containerFlag">
            <div class="flag">
            	<div class="cerrarContactContenedor">
                	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ModalInfo">CERRAR</span>
            	</div>
            	<div class="promocion">
        	        <legend>APROVECHA NUESTROS <br> PRECIOS DE PREVENTA</legend>
            	</div>
	            <div class="leyendContacto">
	  	            <legend>ENVIANOS TUS DATOS Y NOS COMUNICAREMOS CONTIGO</legend>
	          	</div>
                	<div class="txtForm">
		            	<label for="nombre"><b>Nombre:</b></label>
                  <input type="text" placeholder="Escriba su nombre" name="nombre" required="Please">

                <label for="tel"><b>Teléfono:</b></label>
                <input type="tel" placeholder="Enter Password" name="tel" required="Please">

                <label for="correo"><b>Email:</b></label>
              	<input type="email" placeholder="Enter Email" name="correo" required="Please">
								<div class="caja">
			  					<select name="conocimiento">
			  					<option value="none">Cómo se enteró de nosotros?</option>
									<option value="periodico">Periódico/Revista</option>
									<option value="google">Google</option>
									<option value="espectacular">Espectacular</option>
									<option value="stand">Stand</option>
									<option value="folleto">Folleto</option>
									<option value="showroom">Showroom</option>
									<option value="volante">Volante</option>
									<option value="redes">Redes Sociales</option>
									<option value="inmuebles">Portal de Inmuebles</option>
									<option value="poster">Poster en la calle</option>
									<option value="valla">Valla Publicitaria</option>
			  					</select>
			  				</div>
									<textarea id="txt1" class="txtArea" cols="30" rows="5" name="comentario" placeholder="Escriba su comentario o mensaje" required="Please"></textarea>
                	</div>
                	<div class="protectionInfo">
                         <p>*Campo Obligatorio. <br> Sus datos estan protegidos. <br> Porfavor lea nuestro <br> <ins><a id="btnVirtual6" href="#" onclick="document.getElementById('myModalPrivacity').style.display='block'">
                        Aviso de Privacidad
                    </a></ins>.</p>
                	</div>
            </div>
            <div class="pieTriangulo">
            </div>
            <div class="triangulo-equilatero-bottom">
              	<input  id="btnSend" class="button bTri btn1" type="submit">
          	</div>
        </div>
  </form>
</div>
 <!-- SCRIPTS -->
	<!-- 	Script Bootstrap JS Ref Navegator -->
<script>
$(document).ready(function(){$('body').scrollspy({target: ".navbar", offset: 50});$("#escenika a").on('click', function(event) {if (this.hash !== "") {event.preventDefault();
       var hash = this.hash;$('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }  // End if
  });
});

</script>

  <script src="javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>

	<script>

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtnUp").style.display = "block";
            } else {
                document.getElementById("myBtnUp").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

</script>

		  <script>
		  	/*
		  	//SCRIPT
		var x = -1;
		function timeout() {
			x=(x+1)%12;
			setTimeout(function () {
				timeout();
				}, 20000);
			//console.log("Val: "+x);
			if (x==0) {
				$(".foo-slider").css("background-image","url(image/demo_photo1.jpg)");
			}
			else if (x==1) {
				$(".foo-slider").css("background-image","url(image/demoPanoView.jpg)");
			}
			else if (x==2) {
				$(".foo-slider").css("background-image","url(image/demo_photo1.jpg)");
			}
			else if (x==3) {
				$(".foo-slider").css("background-image","url(image/demoPanoView.jpg)");
			}
			else if (x==4) {
				$(".foo-slider").css("background-image","url(image/demo_photo1.jpg)");
		}
			timeout();
		  	 */
		  </script>

<script>
	var x, i, j, selElmnt, a, b, c;
	/*look for any elements with the class "custom-select":*/
	x = document.getElementsByClassName("custom-select");
	for (i = 0; i < x.length; i++) {
	  selElmnt = x[i].getElementsByTagName("select")[0];
	  /*for each element, create a new DIV that will act as the selected item:*/
	  a = document.createElement("DIV");
	  a.setAttribute("class", "select-selected");
	  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
	  x[i].appendChild(a);
	  /*for each element, create a new DIV that will contain the option list:*/
	  b = document.createElement("DIV");
	  b.setAttribute("class", "select-items select-hide");
	  for (j = 0; j < selElmnt.length; j++) {
	    /*for each option in the original select element,
	    create a new DIV that will act as an option item:*/
	    c = document.createElement("DIV");
	    c.innerHTML = selElmnt.options[j].innerHTML;
	    c.addEventListener("click", function(e) {
	        /*when an item is clicked, update the original select box,
	        and the selected item:*/
	        var y, i, k, s, h;
	        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
	        h = this.parentNode.previousSibling;
	        for (i = 0; i < s.length; i++) {
	          if (s.options[i].innerHTML == this.innerHTML) {
	            s.selectedIndex = i;
	            h.innerHTML = this.innerHTML;
	            y = this.parentNode.getElementsByClassName("same-as-selected");
	            for (k = 0; k < y.length; k++) {
	              y[k].removeAttribute("class");
	            }
	            this.setAttribute("class", "same-as-selected");
	            break;
	          }
	        }
	        h.click();
	    });
	    b.appendChild(c);
	  }
	  x[i].appendChild(b);
	  a.addEventListener("click", function(e) {
	      /*when the select box is clicked, close any other select boxes,
	      and open/close the current select box:*/
	      e.stopPropagation();
	      closeAllSelect(this);
	      this.nextSibling.classList.toggle("select-hide");
	      this.classList.toggle("select-arrow-active");
	    });
	}
	function closeAllSelect(elmnt) {
	  /*a function that will close all select boxes in the document,
	  except the current select box:*/
	  var x, y, i, arrNo = [];
	  x = document.getElementsByClassName("select-items");
	  y = document.getElementsByClassName("select-selected");
	  for (i = 0; i < y.length; i++) {
	    if (elmnt == y[i]) {
	      arrNo.push(i)
	    } else {
	      y[i].classList.remove("select-arrow-active");
	    }
	  }
	  for (i = 0; i < x.length; i++) {
	    if (arrNo.indexOf(i)) {
	      x[i].classList.add("select-hide");
	    }
	  }
	}
	/*if the user clicks anywhere outside the select box,
	then close all select boxes:*/
	document.addEventListener("click", closeAllSelect);</script>
</script>

<script>
function someFun(id){
	mail = " Solicito asesoramiento de: "+ id;
	document.getElementById('id01').style.display='block';
	var elem = document.getElementById("txt1");
	elem.innerHTML = mail;
//	insertText("txt1", id);
}
</script>
	</body>
</html>
