<?php 
$receivedText = $_GET('paragraph');
$receivedWord = $_GET('censoredWord');

$censor = str_ireplace($receivedWord, '***', $receivedText);

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
        <?php 
    echo $receivedText;
    echo strlen($receivedText);

    
    ?></p>

    <h2>Censored word: <?php 
    echo $receivedWord;
    ?></h2>
</body>
</html>