<?php
$path = "imgs/prendasReales/pngs/";
$rename ="imgs/prendasReales/pngs/";

$dir = opendir($path);
$i = 1;
while ($archivo = readdir($dir)){
    copy($path.$archivo,$rename.$i.".png");
    $i++;
}
?>