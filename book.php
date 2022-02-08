<?php
$message1='0@sn9sirppa@#?ia’jgtvryko1';
$message2='q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3='aopi?sgnirts@#?sedhtg+p9l!';

$keynumber = mb_strlen($message1) / 2;
$subchain = mb_substr($message1, 6,$keynumber);
$replace = str_replace('@#?', ' ',$subchain);
$message1 = strrev($replace);

$keynumber = mb_strlen($message2) / 2;
$subchain = mb_substr($message2, 6,$keynumber);
$replace = str_replace('@#?', ' ',$subchain);
$message2 = strrev($replace);

$keynumber = mb_strlen($message3) / 2;
$subchain = mb_substr($message3, 6,$keynumber);
$replace = str_replace('@#?', ' ',$subchain);
$message3 = strrev($replace);

echo $message1.' '.$message2.' '.$message3;
