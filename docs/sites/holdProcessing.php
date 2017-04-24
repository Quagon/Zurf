<?php
$hold[30][2];
while($_POST['formSubmit'] == "Tilmeld")
{
    $i++;
    $hold[$i][1] = $_GET['holdnavn'];
    $hold[$i][2] = $_GET['tlf'];
}
header('Location: http://zurfbeerpong.dk/sites/turneringTilmeldt.html');
?>
