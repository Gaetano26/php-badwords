<?php
$word = $_POST['word'];
$text = $_POST['text'];
$censored = '***';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <p>
        <?php echo  $text . ' '.  'Lunghezza testo:' . ' ' . strlen($text) ?>
     </p>
    
</body>
</html>