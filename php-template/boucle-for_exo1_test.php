<?php
    include 'boucle-for_exo1.php';
	
	function solution () {
		$solution = '';
		for ($i = 1 ; $i < 10 ; $i++) {
			$solution .= "$i\t";
		 }
		 $solution .= "10\n";
		 return $solution;
	}


	$_solution = solution();
	$reponse = maBoucle();
	
	if (strcmp($_solution, $reponse) == 0) {
		$contents = file_get_contents("boucle-for_exo1.php");
		if (! preg_match("#(for)#",$contents)) {
			echo("TECHIO> success false  \r\n");
			echo("TECHIO> message --channel Oops! Le résultat est juste mais il fallait utiliser la boucle for. \r\n");
		} 
		else { 
			echo("TECHIO> success true \r\n");
		}
	} 
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
	}
?>