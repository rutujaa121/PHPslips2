<?php
$str = <<<XML
<?xml version="1.0"?>
    <bookinfo>
        <book>
            <bno> 111 </bno>
            <bname> Rutuja </bname>
            <year> 2026 </year>
            <price> 300 </price>
        </book>
    </bookinfo>
XML;
$fname = "10.xml";
$fp = fopen($fname, "w");
fwrite($fp , $str);
fclose($fp);
echo "Created File: " . $fname;
