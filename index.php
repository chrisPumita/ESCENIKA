<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESCENIKA HOME</title>
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
    z-index: 1;
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
    /* border: 1px solid #9E9E9E; */
    width: 90%;
    height: 85vh;
}

/* The CloseBtnPhoto Button */
.closeBtnPhoto, .closeBtnPhoto2, .closeBtnPhoto3 {
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
.closeBtnPhoto3:hover
 {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<style type="text/css" media="screen">
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
    -webkit-animation: animatedBackground 60s alternate ease-in-out infinite;
    animation-name: mov-izq;
    animation-duration: 60s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-delay: 0s;
    -moz-animation-name: mov-izq;
    -moz-animation-duration: 60s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -moz-animation-delay: 0s;
    -webkit-animation-name: mov-izq;
    -webkit-animation-duration: 60s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 0s;
        }
        /*
        
         */
	    @keyframes mov-izq{
	    	    0% { background-position: 0em }
          100%{background-position:-200em}
        }
        @-webkit-keyframes mov-izq{
        	    0% { background-position: 0em }
            100%{background-position:-200em}
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
</style>

<style>
/*
.imagenPano:{
    width: 100%;
    padding-bottom: 0px;
    overflow: hidden;
    text-align: center;
    background-color: white;
    background-image: url("../image/15.jpg");
    background-repeat: no-repeat;
    background-size: auto 150%;
    animation: slider .5s infinite alternate;
    transition: background-image 0.5s ease;
    -webkit-transition: background-image 0.5s cubic-bezier(0.46, 1.26, 0.66, -0.2);
    -moz-transition: background-image 0s linear;
}
 */

</style>

<style>
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
</style>

 <style>

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
    overflow: scroll;
    /* width: 500px; */
    height: 100vh;
    /* z-index: 3; */
    /* display: none; */
    right: 10px;
}

/* ModalInfo Content/Box */
.modalInfo-content {
        width: 320px;
    float: right;
}

/* The Close Button (x) */
.close {
    /* text-align: -webkit-auto; */
    position: relative;
    bottom: 0px;
    top: 0px;
    font-size: 0.5em;
    /* font-weight: bold; */
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


</style>
	<style type="text/css" media="screen">

body{
    background-color: coral
}

.flag {
box-sizing: border-box;
    width: 320px;
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
	border-bottom: 100px solid #000000;
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
    border-right: 220px solid transparent;
    border-top: 0px solid transparent;
    border-left: 100px solid transparent;
    border-bottom: 100px solid #59AF31;
    /* margin: 0 auto; */
}

.button {
    background-color: #59AF31;
    border: none;
    color: white;
    /* padding: 0px 0px 0px 0px; */
    display: inline-flex;
    font-size: 28px;
    margin: 54px 0px 0px -32px;
    cursor: pointer;
}
.pieTri{
    width: 100%;
    height: 300px;
    background-color: goldenrod;
}

.pieTriangulo{
    position: relative;
    width: 0px;
    height: 0px;
    margin: 0 auto;
    border-right: 220px solid var(--greyLow);
    border-top: 5px solid var(--greyLow);
    border-left: 100px solid var(--greyLow);
    border-bottom: 100px solid #090c0700;
}

.containerFlag{
        width: 320px;
}
	</style>

<style>
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
					  Sorry, your browser does not support inline SVG.
					</svg>
				<div class="menu">
					<a href="#mapaGoolePlugIn">
						<button id="btnShowroom" class="boton bTri btn1 btnInformes">SHOWROOM</button>
					</a>
					<button id="btnStart" class="boton bTri btn1 btnInformes" onclick="document.getElementById('id01').style.display='block'" >INFORMES</button>
				</div>
				<div class="contLogo">
					<div class="logoEsc">
						<img class="logoImg" src="image/Escenika-LogoHome.png" alt="Logo de Escenika">
					</div>
					<div class="botonMenu">
						<a href="#content" id="btnStart" class="boton bTri btn1">INICIAR</a>
						<a href="#contentDeptos" id="btnContact" class="boton bTri btn2">MODELOS</a>
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
							<a href="#contentProyect"class="boton bTri btn3">ARQUITECTURA</a>
							<a href="#contentDeptos" class="boton bTri btn3">DEPARTAMENTOS</a>
							<a href="#contentEstilo"class="boton bTri btn3">ESTILO DE VIDA</a>
							<a href="#mapaGoolePlugIn" class="boton bTri btn3">UBICACIÓN</a>
						</div>
					</div>
				</div>
				<div class="contPano">
					<div class="contMjeAbout">
						<div class="positionContMje">
							<svg class="contPanoTraingulo">
							  <polygon class="triangulo" points="350,100 900,350 70,350"></polygon>
							  Sorry, your browser does not support inline SVG.
							</svg>
							<p class="txtAbout tittleNosotros">
								ACERCA DE 
								<br>
								<strong>ESCENIKA</strong>
							</p>
							<p class="txtAbout contentNosotros">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		<a href="#contentHeader" title="To Top">
			<button id="myBtnUp" title="Ir Arriba">
				<i style="font-size:35px" class="fa">&#xf139;</i>
			</button> </a>
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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							</div>
							<div class="bandera">
							</div>
						</div>	
						<div class="contentDescription">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconVista">
								</div>
								<h2 class="tDesc">VISTA</h2>
								<h3 class="stDesc">PANORÁMICA</h3>							
								<hr class="lineaBandera">
							<p class="txtDesc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							</div>
							<div class="bandera">
							</div>
						</div>	

						<div class="contentDescription" href="#mapAmenidades">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconParque">
								</div>
								<h2 class="tDesc">AMPLIAS</h2>
								<h3 class="stDesc">ÁREAS VERDES</h3>							
								<hr class="lineaBandera">
							<p class="txtDesc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							</div>
							<div class="bandera">
							</div>
						</div>	
						<div class="contentDescription" onclick="document.getElementById('myModalAmenidades').style.display='block'">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconCalentador">
								</div>
								<h2 class="tDesc">CALENTADOR</h2>
								<h3 class="stDesc">SOLAR DE AGUA</h3>							
								<hr class="lineaBandera">
							<p class="txtDesc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							</div>
							<div class="bandera">
							</div>
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
				<div class="contGralDeptosBox">
					<div class="containerBoxCaract">
					  <div class="card">
					    <div class="front boxFront">
							<div class="boxBackIMG">
							</div>
							<div class="boxDescDepto">
								<div class="txtDescDepto">
									<div class="subtittle">
										DEPARTAMENTO
									</div>
									<div class="tittle">
										TIPO A MODELO CMYK
									</div>
									<hr class="lineaBandera">
										<p class="txtDesc txtBoxFormat">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
										</p>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/rule.png" alt=""> 95 m2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 3
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 2
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
									<ul>
										<li>Modelo de 65 m2</li>
										<li>3 recamaras</li>
										<li>2 baños completos</li>
										<li>Family room</li>
										<li>2 cajones de estacionamiento</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div class="subtittle">
										DEPARTAMENTO
									</div>
									<div class="tittle">
										TIPO A MODELO CMYK <br>
									</div>
									<div>
										<br>
										<a href="#contentDeptos" id="btnVirtual2" class="boton bTri btn1">RECORRIDO FOTOGRAFICO</a>
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
									<div class="subtittle">
										DEPARTAMENTO
									</div>
									<div class="tittle">
										TIPO A MODELO RGB
									</div>
									<hr class="lineaBandera">
										<p class="txtDesc txtBoxFormat">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
										</p>
								</div>
							</div>
							<div class="iconsDescDepto">
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/rule.png" alt=""> 65 m2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/bed.png" alt=""> 2
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/car.png" alt=""> 1
								</div>
								<div class="txtDataDepto">
									<img class="iconDepto" src="icons/ducha.png" alt=""> 1 1/2
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
									<ul>
										<li>Modelo de 65 m2</li>
										<li>2 recamaras</li>
										<li>1 baños completos</li>
										<li>1 cajón de estacionamiento</li>
									</ul>
								</div>
								<div class="tittlePlano">
									<div class="subtittle">
										DEPARTAMENTO
									</div>
									<div class="tittle">
										TIPO A MODELO CMYK <br>
									</div>
									<div>
										<br>
										<a href="#contentDeptos" id="btnVirtual" class="boton bTri btn1">RECORRIDO FOTOGRAFICO</a>
									</div>
										
								</div>
							</div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div id="contentEstilo">
				<!--
				-->
				<svg class="contTrainguloAmenidades" height="50%" width="100%">
				  <polygon class="trianguloSolid" points="380,90 900,400 0,400"></polygon>
				  Sorry, your browser does not support inline SVG.
				</svg>
				<div class="mjeBoxing">
					<p class="pBoxesMje">
						Áreas Recreativas <br>
						incluidas
					</p>
				</div>
				<div class="divEstilo div1Estilo">
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
					<div class="containerSlidersFull">
						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/family0.png">
						</div>

						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/family1.jpg">
						</div>

						<div class="mySlides fade">
						  <img class="imagenAjustada" src="image/family2.jpg">
						</div>

						<div class="mySlides fade">
						  <img  class="imagenAjustada" src="image/family4.jpg">
						</div>
					</div>
				</div>
				<div id="mapAmenidades" class="divEstilo div2Estilo">
					<div class="ContimagePinMAP">
						<div class="contenedorMapaScroll">
							<img class="imgMap" src="image/mapPin.png">
							<div class="contPinBoxes1">
								<img class="imgPin" src="icons/pin.png">
								<div class="boxPin">
									SALON DE USOS MUKTIMPLES
								</div>
							</div>
							<div class="contPinBoxes2">
								<img class="imgPin" src="icons/pin.png">
								<div class="boxPin">
									AREAS VERDES
								</div>
							</div>
							<div class="contPinBoxes3">
								<img class="imgPin" src="icons/pin.png">
								<div class="boxPin">
									ESTACIONAMIENTO
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="contentContacto">
				<div class="contentContact">
					<div class="titleDeptos">
						<div class="trianguloTittle">
							<img class="trianguloImg" src="icons/tiitletrianguloW.png">
						</div>
						<div class="contTituloSubtitulo">
							<div class="subtittle">
								PARA MAS INFORMACIÓN
							</div>
							<div class="tittle">
								CONTACTANOS
							</div>
						</div>
					</div>

				<!-- 	SLIDERS DE VENDEDORES	-->
					<div id="salesman" class="contentAsesores">
						<div class="mySalesManSlider">
						<!--
*************************** > inicio
						-->
<!-- 	PARTE UNO DE VENDEDORES 4 de N -->
							<div class="contentAsesoresRandoom">
				<!-- 	AGENTE 1 DATA ESTATICO -->
								<div class="contAgentePerson">
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/executivePhotos/juanp.jpg" >
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													Juan Pérez
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														jperez@escenika.com.mx <br>
														55 1212 2323
													</p>
													<a href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="document.getElementById('id01').style.display='block'">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
							<div class="contAgentePerson">
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/executivePhotos/sandrac.jpg" >
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													Sandra Carrejo
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														scarrejo@escenika.com <br>
														55 2929 9838
													</p>
													<a href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="document.getElementById('id01').style.display='block'">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
				<!-- 	AGENTE 2 DATA  ESTATIC -->
								<?php require 'php/data.php';?>
								<div class="contAgentePerson">
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">

											<img class="imagenAjustada" src="image/executivePhotos/<?php echo $salesman[0][4]; ?>.jpg">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													<?php echo $salesman[0][1]; ?>
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														<?php echo $salesman[0][2]; ?> <br>
														<?php echo $salesman[0][3]; ?>
													</p>
													<a href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="document.getElementById('id01').style.display='block'">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>

								<div class="contAgentePerson">
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">

											<img class="imagenAjustada" src="image/executivePhotos/<?php echo $salesman[1][4]; ?>.jpg">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													<?php echo $salesman[1][1]; ?>
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														<?php echo $salesman[1][2]; ?> <br>
														<?php echo $salesman[1][3]; ?>
													</p>
													<a href="#salesman" class="boton bTri btn1 btnContactAgente" onclick="document.getElementById('id01').style.display='block'">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!-- 	PARTE UNO DE VENDEDORES 4 de N -->
						</div>

						<?php 
							//GEenerando el contenedor, valor obtenido de $containers
						$contadorVendedor = 6; //El ultimo vendedor ID
						$contadosVendedor = 2; //Se traduce como el ID inicial del contenedor 1
						$restanteVendedor = $noSales;
							for ($i=2; $i <= $containers; $i++) {
								#pintando el contenedor sliders
								echo '
								  <!-- 	CONTENEDOR '.$i.' de '.$containers.' VENDEDOR '.$contadosVendedor.' de '.$noSales.' -->
									<div class="mySalesManSlider">
									<div class="contentAsesoresRandoom">
									';
							//	echo "CONTENEDOR".$i;
								// Opero los que restan y deduzco si caben otros 4 en el contenedor
									$restanteVendedor = ($noSales-2) - $contadosVendedor; //ME FALTAN POR MOSTRAR VENDEDORES
									if ($restanteVendedor >= 4) {
											for ($j=$contadosVendedor; $j < $contadorVendedor; $j++) { 
												echo '
													<!-- 	AGENTE '.$j.' de '.$noSales.' CONTADOR ID: '.$contadorVendedor.' -->
														<div class="contAgentePerson">
															<div class="boxFrontAgent zoom">
																<div class="boxBackIMG2">
																	<img class="imagenAjustada" src="image/executivePhotos/'.$salesman[$j][4].'.jpg">
																</div>
																<div class="boxontactoAgente">
																	<div class="txtContactoAgente">
																		<div class="nameAgente">
																			'.$salesman[$j][1].'
																		</div>
																		<hr class="lineaBandera">
																			<p class="txtDesc txtBoxFormat">
																				'.$salesman[$j][2].' <br>
																				'.$salesman[$j][3].'
																			</p>
																			<a href="#salesman" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
																	</div>
																</div>
															</div>
														</div>
										';
										++$contadosVendedor;
											}
											
											$contadorVendedor = $contadorVendedor + 4;
										//	$contadosVendedor = $contadosVendedor + 4;
									}
									else{
									//echo "NO CANDITADO MENOS A 4";
										//Ordenando los ultimos vendedores
										for ($j=$contadosVendedor; $j < $noSales; $j++) { 
												echo '
													<!-- 	AGENTE '.$j.' de '.$noSales.' -->
														<div class="contAgentePerson">
															<div class="boxFrontAgent zoom">
																<div class="boxBackIMG2">
																	<img class="imagenAjustada" src="image/executivePhotos/'.$salesman[$j][4].'.jpg">
																</div>
																<div class="boxontactoAgente">
																	<div class="txtContactoAgente">
																		<div class="nameAgente">
																			'.$salesman[$j][1].'
																		</div>
																		<hr class="lineaBandera">
																			<p class="txtDesc txtBoxFormat">
																				'.$salesman[$j][2].' <br>
																				'.$salesman[$j][3].'
																			</p>
																			<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
																	</div>
																</div>
															</div>
														</div>
												';
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
							<div class="ContInfoInsideMap">
								<div class="contactVisitTittle">
									VISITA NUESTRO SHOWROOM
									<hr class="lineContact">
								</div>
								<div class="contentDataContact">
									<div class="boxDataContact">
										<img class="iconContact" src="icons/pinter.png">
										<p class="txtAdreess">
											Av. Hacienda de Lindavista S/N, Esq. Hacienda de la Gavia, <br>
											Col. Hacienda del parque 2da Sección, Cuautitlán Izcalli, <br>
											CP 54769, Edo de Méx.
										</p>
									</div>
									<div class="boxDataContact">
										<img class="iconContact" src="icons/pinter.png">
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
						<span class="TELEFONO">1106-2678</span><br>
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
					Autorizado mediante gaceta de Gobierno del Estado de México tomo CCIV números 34 y 35 de fecha 17 y 18 de Agosto de 2017. <br>
					<a href="#">
						Aviso de Privacidad
					</a>
					
				</p>
			</div>
			<div class="contenedorArriba">
				<svg class="contTrainguloFooter" height="50%" width="100%">
				  <polygon class="trianguloSolid" points="380,90 900,400 0,400"></polygon>
				  Sorry, your browser does not support inline SVG.
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
	    <p class="subtittle">RECORRIDO FOTOGRÁFICO VIRTUAL - DEPARTAMENTO RGB MOD 1</p>
			<iframe class="recorrido-iframe" style="width:  100%;height:  90%;" src="https://my.matterport.com/show/?m=H6PfMfCeZTi&lang=es" frameborder="0" allowfullscreen>
			</iframe>
	  </div>
	</div>

			<!-- The ModalPhotoVirtual -->
	<div id="myModalAmenidades" class="modalPhotoVirtual">

	  <!-- ModalPhotoVirtual content -->
	  <div class="modalPhotoVirtual-content2">
	    <span class="closeBtnPhoto3">&times;</span>
	    <p class="subtittle">ESTILOS DE VIDA</p>
			<div class="containerAmenidades">
				<div class="contAmenidades">
					<div class="boxImageAmenidad">
						<img class="imagenAjustada img" src="image/amenidades/persianas_automaticas.jpg">
					</div>
				</div>
				<div class="contAmenidades">
					<div class="boxAmenidad">
						<div class="boxImageAmenidad">
							<img class="imagenAjustada img" src="image/amenidades/calentador-de_agua.jpg">
						</div>
					</div>
					<div class="boxAmenidad">
						<div class="boxImageAmenidad">
							<img class="imagenAjustada img" src="image/amenidades/lampara.png">
						</div>
					</div>
				</div>
				<div class="contAmenidades">
					<div class="boxAmenidad infoG">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="boxAmenidad infoV">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
	  </div>
	</div>

			<!-- The modalContacto -->
<div id="id01" class="modalInfo animateInfo" style="z-index: 3; display: none">
  <form class="modalInfo-content" action="/action_page.php">
        <div class="containerFlag">
            <div class="flag">
            	<div class="cerrarContactContenedor">
                	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ModalInfo">CERRAR</span>
            	</div>
                <form action="/action_page.php">
                	<div class="promocion">
            	        <legend>APROVECHA NUESTROS <br> PRECIOS DE PREVENTA</legend>
                	</div>
                  	<div class="leyendContacto">
        	            <legend>ENVIANOS TUS DATOS Y NOS COMUNICAREMOS CONTIGO</legend>
                	</div>
                	<div class="txtForm">
		            <label for="name"><b>Nombre:</b></label>
                    <input type="text" placeholder="Escriba su nombre" name="name" required="Please">

                      <label for="tel"><b>Teléfono:</b></label>
                      <input type="tel" placeholder="Enter Password" name="phone" required="Please">

	                <label for="email"><b>Email:</b></label>
                      <input type="email" placeholder="Enter Email" name="email" required="Please">

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
                      <textarea class="txtArea" cols="30" rows="5" name="comentario" placeholder="Escriba su comentario o mensaje" required="Please"></textarea>
                	</div>
                	<div class="protectionInfo">
                         <p>*Campo Obligatorio. <br> Sus datos estan protegidos. <br> Porfavor lea nuestro <br> <ins><a href="#">Aviso de Privacidad</a></ins>.</p>
                	</div>


                </form>
                
            </div>
            <div class="pieTriangulo">
            </div>
              <div class="triangulo-equilatero-bottom">
              	<a href="#content" id="btnSend" class="button bTri btn1">ENVIAR</a>
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

		  <script src="javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
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

	</body>
</html>