<?php
function h($val){
    return htmlspecialchars($val, ENT_QUOTES);
}
$name = $_POST["name"];
$mail = $_POST["mail"];

?>

<!DOCTYPE html>
<head>
 <meta charset="UTF-8">

</head>
<body>
<p><?= h($name); ?></p>
<p><?= h($mail); ?></p>
</body>
</html> 