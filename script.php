

<?php

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

echo 'Il paragrafo risulta avere ' . strlen($paragraph) . ' caratteri' . '<br>';

$newParagraph = str_ireplace($word, '***', $paragraph);

echo $newParagraph . 'Il nuovo paragrafo risulta avere '. strlen($newParagraph) . ' caratteri';

?>

