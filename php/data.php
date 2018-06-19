<?php 
	$salesman = array
	(
		//FORMAT
		//NAME, MAIL, TELEFONO
		/*
		array('1',"Juan Pérez","jperez@escenika.com","1106-2678","juanp"),
		array('2',"Sandra Carrejo","scarrejo@escenika.com","1106-2678","sandrac"),
		*/
		array('3',"Alfredo Torres","atorres@escenika.com","1106-2678","alfredot"),
		array('4',"Jazmin Torres","jtorres@escenika.com","1106-2678","karenm"),
		array('5',"Christian Avila","cavila@escenika.com","1106-2678","christiana"),
		array('6',"Teresa Martínez","tmartinez@escenika.com","1106-2678","teresam"),
		array('7',"Fernanda Sandobal","fsandobal@escenika.com","1106-2678","fernandas"),
		array('8',"Jorge Guerrero","jguerrero@escenika.com","1106-2678","jorgeg"),
		array('9',"Karla Camino","kcamino@escenika.com","1106-2678","karlac"),
		array('10',"Camila de la Cruz","ecruz@escenika.com","1106-2678","camilac"),
		array('11',"Jaqueline Avalos","javalos@escenika.com","1106-2678","jaquelinea"),
		array('12',"Guadalupe Demetrio","gdemetrio@escenika.com","1106-2678","guadaluped"),
		array('13',"Claudia Espinoza","cespinoza@escenika.com","1106-2678","clauudiae"),
		array('14',"Maria Arellano","aarellano@escenika.com","1106-2678","mariaa")
	);

	  //INICIO DEL CICLO FOR shuffle Mezcla todos los elementos
		$noSales = count($salesman); // muestra no de vendedores
		$noSales+2; //sumo los dos que ya existen
		$containers = ceil($noSales/4);
		$containers;// ---> retorna 4 contenedores, se va a techo
		/*
		
		echo "Muestro ".$containers."contenedores con 4 elementos. No de vendedores: ";
		echo $noSales;
		print_r($salesman);
		 */
		shuffle($salesman);

?>