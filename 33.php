<?php
$xml = new SimpleXMLElement("<students></students>");

$s1 = $xml->addChild("student");
$s1->addChild("rollno", "101");
$s1->addChild("name", "rutuja");
$s1->addChild("address", "shrirampur");
$s1->addChild("college", "rbnb");
$s1->addChild("course", "bcs");

$s2 = $xml->addChild("student");
$s2->addChild("rollno", "102");
$s2->addChild("name", "Priya");
$s2->addChild("address", "nevasa");
$s2->addChild("college", "sdm");
$s2->addChild("course", "bca");

$xml->asXML("student.xml");
?>

<form method="post">
    Enter Course:
    <input type="text" name="course">
    <input type="submit" value="Show">
</form>

<?php
if(isset($_POST['course'])) {
    $course = $_POST['course'];
    $xml = simplexml_load_file("student.xml");

    echo "<table border='1'>
            <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Address</th>
            <th>College</th>
            <th>Course</th>
            </tr>";

    foreach($xml->student as $s) {
        if($s->course == $course) {
            echo "<tr>
            <td>$s->rollno</td>
            <td>$s->name</td>
            <td>$s->address</td>
            <td>$s->college</td>
            <td>$s->course</td>
            </tr>";
        }
    }

    echo "</table>";
}
?>