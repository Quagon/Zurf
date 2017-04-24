<?php
$hold[30][2];
while($_POST['formSubmit'] == "Tilmeld")
{
    $i++;
    $hold[$i][1] = $_POST['holdnavn'];
    $hold[$i][2] = $_POST['tlf'];	
}
echo"$hold[$i][1]";
<?
