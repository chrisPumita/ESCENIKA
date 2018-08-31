<?php
	$salesman = array
	(
		//FORMAT
		//NAME, MAIL, TELEFONO
/*
		array('1',"Juan Pérez","jperez@escenika.com","1106-2678","juanp"),
		array('2',"Sandra Carrejo","scarrejo@escenika.com","1106-2678","sandrac"),
		*/

		array('2',"Enrique","Corona","ASESOR","1-min"),
		array('3',"Blanca","Mora","ASESOR","2-min"),
		array('4',"Florencia","Quiñones","ASESOR","3-min"),
		array('5',"Marisela","Sánchez","ASESOR","5-min"),
		array('6',"Miguel","Puig","ASESOR","6-min"),
		array('7',"Jorge","Corona","ASESOR","7-min"),
		array('8',"Claudia","Álvarez","ASESOR","8-min")
	);


		/* Mexclo los elementos */
		shuffle($salesman);
		/* Agrego los elementos Estaticos al inicio para no afectar el ciclo for*/
		array_unshift ( $salesman , array('1',"Mónica","Torres","GERENTE","4-min") );
		//INICIO DEL CICLO FOR shuffle Mezcla todos los elementos
		$noSales = count($salesman); // muestra no de vendedores
		$containers = ceil($noSales/4)-1;
		$containers;// ---> retorna 4 contenedores, se va a techo

?>
