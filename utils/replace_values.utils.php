<?php 
/*
* 
* replace_values
*
* Essa função serve para trocar valores passados por um array usando o metodo do PDO 'bindValue'
*
* @package solidarios 
*
* @author Mr. Nullus <email: gustavojs417@gmail.com> <github: MrNullus>
*
* @param $conn object PDO | É a conecção propriamente dita
* @param $y float | Array conetento os 'find keys' (chaves de buscas) e os 'replace values' (valor de troca)
*
* return null
*
*/
function replace_values($conn, $find_arr = array()) {

	foreach ($find_arr as $key => $value) {
		$conn->bindValue($key, $value);
	}
	
}
?>