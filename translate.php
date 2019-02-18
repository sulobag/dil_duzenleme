<?php  
   require_once ('vendor/autoload.php');
    use \Statickidz\GoogleTranslate;
    $source = 'en';
    $target = 'tr';
    $text = 'Hello World';

    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);

    echo $result;
?>