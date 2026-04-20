<?php
    $dom = new DOMDocument();
    $dom->load("14.1.xml");
    $name = $dom->getElementsByTagName("name");
    $title = $dom->getElementsByTagName("title");
    foreach($title as $t)

        {
            echo "Title Is: ".$t->textContent."<br>";
        }
    foreach($name as $n)
        {
            echo "Name Is: ".$n->textContent."<br>";
        }
    
?>