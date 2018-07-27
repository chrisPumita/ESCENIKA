<?php
	$salesman = array
	(
		//FORMAT
		//NAME, MAIL, TELEFONO
/*
		array('1',"Juan Pérez","jperez@escenika.com","1106-2678","juanp"),
		array('2',"Sandra Carrejo","scarrejo@escenika.com","1106-2678","sandrac"),
		*/

		array('3',"Alfredo Torres","atorres@escenika.com","55-6915-7177","alfredot"),
		array('4',"Karen Michelle","kmichelle@escenika.com","55-6915-7177","karenm"),
		array('5',"Christian Avila","cavila@escenika.com","55-6915-7177","christiana"),
		array('6',"Teresa Martínez","tmartinez@escenika.com","55-6915-7177","teresam"),
		array('7',"Fernanda Sandobal","fsandobal@escenika.com","55-6915-7177","fernandas"),
		array('8',"Jorge Guerrero","jguerrero@escenika.com","55-6915-7177","jorgeg"),
		array('9',"Karla Camino","kcamino@escenika.com","55-6915-7177","karlac"),
		array('10',"Camila de la Cruz","ecruz@escenika.com","55-6915-7177","camilac"),
		array('11',"Jaqueline Avalos","javalos@escenika.com","55-6915-7177","jaquelinea"),
		array('12',"Guadalupe Demetrio","gdemetrio@escenika.com","55-6915-7177","guadaluped"),
		array('13',"Claudia Espinoza","cespinoza@escenika.com","55-6915-7177","clauudiae"),
		array('14',"Maria Arellano","aarellano@escenika.com","55-6915-7177","mariaa")
	);


		/* Mexclo los elementos */
		shuffle($salesman);
		/* Agrego los elementos Estaticos al inicio para no afectar el ciclo for*/
		array_unshift ( $salesman , array('1',"Juan Principal","jperez@escenika.com","55-6915-7177","juanp") );
		array_unshift ( $salesman , array('2',"Sandra Principal","scarrejo@escenika.com","55-6915-7177","sandrac") );
		//INICIO DEL CICLO FOR shuffle Mezcla todos los elementos
		$noSales = count($salesman); // muestra no de vendedores
		$containers = ceil($noSales/4)-1;
		$containers;// ---> retorna 4 contenedores, se va a techo

?>
