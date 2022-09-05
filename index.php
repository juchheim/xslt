<?php
// Loading the XML file
$xml = simplexml_load_file("xml.xml");
$i = 0;
echo "<h2>".$xml->getName()."</h2><br />";

foreach($xml->children() as $album)
{
    $artist = $album->artist;
    $title = $album->title;
    $price = $album->price;
    $i++;

    if ($i % 2 != 0){
        ?><div style='float:left; min-width:100%; background-color:pink; font-color:white'><?php

    }
    if ($artist != "") {
        echo "<span>Artist: ". $artist ."</span><br />";
    } else {
        echo "Artist: name not found<br />";
    }
    
    if ($title != "") {
        echo "<span>Title: ". $title ."</span><br />";
    } else {
        echo "Title: Album title not found<br />";
    }

    if ($price != "") {
        echo "<span>Price: ". $price ."</span><br /><br />";
    }else {
        echo "Price: unknown<br />";
    }
    echo "</div>";
}
?>