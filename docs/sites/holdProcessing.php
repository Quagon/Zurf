<?php
$hold[30][2];
print_r($_GET);
while($_POST['formSubmit'] == "Tilmeld")
{
    $i++;
    $hold[$i][1] = htmlentities($_GET['holdnavn'];)
    $hold[$i][2] = htmlentities($_GET['tlf'];)
}
header('Location: http://zurfbeerpong.dk/sites/turneringTilmeldt.html');
?>
