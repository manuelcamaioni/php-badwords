<?php 
$receivedText = $_GET['paragraph'];
$receivedWord = $_GET['censoredWord'];

$censoredText = str_replace($receivedWord, '***', $receivedText);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server reply</title>
</head>
<body>
    <p>
       Paragrafo:  <?php echo $receivedText;?>
    </p>
    <p>
        Lunghezza paragrafo: <?php echo strlen($receivedText);?>
    </p>

    <h2>
        Censored word: <?php echo $censoredText; ?>
    </h2> 
    <p>
        Lunghezza paragrafo censurato: <?php echo strlen($censoredText);?>
    </p>
</body>
</html>