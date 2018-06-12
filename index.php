<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ESCENIKA HOME</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css">


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
    height: 100%;
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
    height: 90%;
}

/* The CloseBtnPhoto Button */
.closeBtnPhoto, .closeBtnPhoto2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closeBtnPhoto:hover,
.closeBtnPhoto:focus,
.closeBtnPhoto2:hover,
.closeBtnPhoto2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<style>

/* Slides */
.mySalesManSlider {
  display: none;
  padding: 80px;
  text-align: center;
}

/* sigSalesMan & prevSalesManious buttons */
.prevSalesMan, .sigSalesMan {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "sigSalesMan button" to the right */
.sigSalesMan {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prevSalesMan:hover, .sigSalesMan:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The circleDot/bullet/indicator container */
.circleDot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The circleDots/bullets/indicators */
.circleDot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the activeSelectesSalesMan circleDot/circle */
.activeSelectesSalesMan, .circleDot:hover {
  background-color: #717171;
}

</style>


</head>
	<body>
		<header id="header" class="header">
			<div class="backImg">
				<div class="menu">
					<a href="#menu" id="btnStart" class="boton bTri btn1 btnInformes">INFORMES</a>
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
			<div id="contentHeader">
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
							<a href="#locationGoo" class="boton bTri btn3">UBICACIÓN</a>
						</div>
					</div>
				</div>
				<div class="contPano">
					<div class="contMjeAbout">
						<div class="positionContMje">
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

			<div id="contentProyect">
				<div class="contenCaract">
						<div class="contentDescription">
							<div class="banderaText">
								<div class="backIconLogoC">
								</div>
								<div class="iconLogoC iconPerfect">
								</div>
								<h2 class="tDesc">PERFECTO</h2>
								<h3 class="stDesc">DISEÑO Y ACABADO</h3>							
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
						<div class="contentDescription">
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
						<div class="contentDescription">
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
				<div class="divEstilo div1Estilo">

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
				<div class="divEstilo div2Estilo">
					<div class="titleDeptos titleDeptos2">
						<div class="contTituloSubtitulo2">
							<div class="subtittle tiitle2">
								CONOZCA NUESTROS
							</div>
							<div class="tittle tiitle2">
								DEPARTAMENTOS
							</div>
							<div class="trianguloTittle2">
							<img class="trianguloImg" src="icons/tiitletrianguloINVERT.png">
						</div>
						</div>
					</div>
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
								CONTACTENOS
							</div>
						</div>
					</div>

				<!-- 	SLIDERS DE VENDEDORES	-->
					<div class="contentAsesores">
						<div class="mySalesManSlider">
						  <!-- 	PARTE UNO DE VENDEDORES 4 de N -->
							<div class="contentAsesoresRandoom">
								<div class="contAgentePerson">
									<!-- 	AGENTE 1 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													JOSE CARLOS
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
								<div class="contAgentePerson">
																<!-- 	AGENTE 2 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													LETICIA SALAS
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>

								<div class="contAgentePerson">
																<!-- 	AGENTE 3 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													CLAUDIA ESPONOZA
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>

								<div class="contAgentePerson">
																<!-- 	AGENTE 4 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													KAREN MEJIA
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!-- 	PARTE UNO DE VENDEDORES 4 de N -->
						</div>

						<div class="mySalesManSlider">
						  <!-- 	PARTE UNO DE VENDEDORES 4 de N -->
							<div class="contentAsesoresRandoom">
								<div class="contAgentePerson">
									<!-- 	AGENTE 1 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													ALBERTO SURIÑA
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
								<div class="contAgentePerson">
																<!-- 	AGENTE 2 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													CARLOS DAVID
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>

								<div class="contAgentePerson">
																<!-- 	AGENTE 3 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													FRANCISCO JAVIER LOPEZ
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>

								<div class="contAgentePerson">
																<!-- 	AGENTE 4 DATA -->
									<div class="boxFrontAgent zoom">
										<div class="boxBackIMG2">
											<img class="imagenAjustada" src="image/vendedor2.png">
										</div>
										<div class="boxontactoAgente">
											<div class="txtContactoAgente">
												<div class="nameAgente">
													LAURA HERNÁNDEZ
												</div>
												<hr class="lineaBandera">
													<p class="txtDesc txtBoxFormat">
														lhernandez@escenika.com.mx
													</p>
													<a href="#contentProyect" class="boton bTri btn1 btnContactAgente">CONTACTAR</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						  <!-- 	PARTE UNO DE VENDEDORES 4 de N -->
						</div>
						<div class="mySalesManSlider">
						  <q>I love you the more in that I believe ynd for nothing else</q>
						  <p class="author">- John Keats</p>
						</div>
						<div class="mySalesManSlider">
						  <q>I love you the more ined me for my own sake and for nothing else</q>
						  <p class="author">- John Keats</p>
						</div>
						<div class="mySalesManSlider">
						  <q>I love you the more in that I believe you had liked me foor nothing else</q>
						  <p class="author">- John Keats</p>
						</div>
						<div class="mySalesManSlider">
						  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
						  <p class="author">- John Keats</p>
						</div>
						<div class="mySalesManSlider">
						  <q>But man is not made for defeat. oyed but not defeated.</q>
						  <p class="author">- Ernest Hemingway</p>
						</div>
						<div class="mySalesManSlider">
						  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
						  <p class="author">- Thomas A. Edison</p>
						</div>
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
					<div class="contMapaGoogle">
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
		<footer>
			<div class="contentFooter">
				<div class="footer1">
					<p class="proyectAuthors">UN PROYECTO DE</p>
					<img class="iconAuthors" src="icons/dcmLogo.png">
					<img class="iconAuthors" src="icons/GMIcon.png">
				</div>
				<div class="footer2">
					<p class="txtContactElectronic">
						<span class="CONTACTO">CONTACTO</span><br>
						<span class="TELEFONO">1106-2678</span><br>
						<span class="CORREO">contacto@escenika.com.mx <br></span>
					</p>
				</div>
				<div class="footer3">
					<img class="iconSocial" src="icons/face.png">
					<img class="iconSocial" src="icons/face.png">
				</div>
			</div>
			<div class="autorized">
				<p class="txtAutorixed">
					Autorizado mediante gaceta de Gobierno del Estado de México tomo CCIV números 34 y 35 de fecha 17 y 18 de Agosto de 2017. <br>
					Aviso de Privacidad
				</p>
			</div>
			<div class="contenedorArriba">
				<div class="arrow"></div>
				<a href="#" class="to-top">Ir arriba</a>
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



 <!-- SCRIPTS -->

<script>

</script>

		  <script src="javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
	</body>
</html>