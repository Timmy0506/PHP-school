<?php
/**
 * Created by PhpStorm.
 * User: timsp
 * Date: 12/03/2019
 * Time: 13:01
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>busreis</title>
</head>
<body>


<?php
$leeftijd = ('15');
if ($leeftijd <3) {
    echo "gratis";
} else if($leeftijd <=12) {
    echo "5 euro";
} else if ($leeftijd <= 65) {
    echo "10 euro";
} else {
    echo "5 euro";
}



?>
</body>
</html>