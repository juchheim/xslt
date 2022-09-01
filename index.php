<?php
// Loading the XML file
$xml = simplexml_load_file("xml.xml");
echo "<h2>".$xml->getName()."</h2><br />";
foreach($xml->children() as $album)
{
    $artist = $album->artist;
    $title = $album->title;
    $price = $album->price;

    if ($artist != "") {
        echo "<span style='color:pink'>". $artist ."</span><br />";
    } else {
        echo "name not found<br />";
    }
    
    if ($title != "") {
        echo "<span>". $title ."</span><br />";
    } else {
        echo "name not found<br />";
    }

    if ($price != "") {
        echo "<span>". $price ."</span><br /><br />";
    }else {
        echo "name not found<br />";
    }
    echo "<hr/>";
}
?>