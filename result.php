<?php

if(empty($_POST['word']) && empty($_POST['text'])){
    $text = 'Nessun testo inserito';
    $censored = 'Nessuna parola inserita';
}else  {
         $word = trim($_POST['word']);
         $text = $_POST['text'];
         $censored = str_replace($word , "***", $text);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="bg-info" >
    <div class="wrapper d-flex flex-column align-items-center justify-content-center gap-5">
        <div class="text-center">
                <h2 class="text-danger" >
                    <?php echo  $text  ?>
                </h2>
                <p>
                    <?php echo 'Lunghezza testo:' . ' ' . strlen($text) ?>
                </p>
        </div>
        <div class="text-center" >
                <h2 class="text-danger" >
                    <?php echo   $censored  ?>
                </h2>
                <p>
                    <?php echo 'Lunghezza testo:' . ' ' . strlen($censored) ?>
                </p>
        </div>
         
    
    </div>
    

   
</body>
</html>