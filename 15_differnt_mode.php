
<?php
    // r, w, a, r+, w+, a+
    $ftr = fopen('myfile2.txt','w');
    $text = 'This is new content thru php';
    fwrite($ftr,$text);
    fclose($ftr);
?>