<?php
	echo '<link rel="stylesheet" type="text/css" href="../stil/style.css">';
	$myfile = fopen("01.06.2015.txt", "r") or die("Nije moguce otvoriti fajl!");
	$pret = file('01.06.2015.txt');
	$niz2 = array("Vreme","Naziv","Tip","Slika");
	$x = 0;
	$duzina = count($niz2);
	foreach($pret as $line){
	$rec=$_POST['pretraga'];
	  	if(strpos($line, $rec))
	  	{
		  	$niz = explode(",",$line);
		  	foreach($niz as $element){
			  	$str=trim(str_replace(PHP_EOL, ' ', $element));
			  	$str=trim($str,"_");
			  	if($niz2[$x] == "Slika"){
			  		$element="<img src='../slike/" . trim($element,"_") . "'>";
			  	}
			  	echo '<table class="repertoar"><tr><td>' . $niz2[$x] . '</td><td> ' . trim($element,"_") . '</td></tr></table>';
			  	$x++;
		  	}
	  	}
    }
	fclose($myfile);
?>