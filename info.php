<?php

$o = $_GET["opc"];
$documento = new DOMDocument();
$documento->load("catalogo.xml");

$y = $documento->getElementsByTagName("titulo");

for($i = 0; $i < $y->length; $i++)
{
	if($y->item($i)->nodeType == 1)
	{
		 if($y->item($i)->childNodes->item(0)->nodeValue == $o )
		 {
			 $padre = ($y->item($i)->parentNode);
		 }
	}
}

$libro = ($padre->childNodes);

for($i = 0; $i < $libro->length-1; $i++ )
{
	if($libro->item($i)->nodeType == 1)
	{
		echo "<strong>".$libro->item($i)->nodeName.": </strong>";
		echo $libro->item($i)->childNodes->item(0)->nodeValue;
		echo "<br>";
	}
}
?>
