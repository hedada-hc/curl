<?php
// header('content-type:image/jpeg');
header('content-type:text/html;charset=utf-8');
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://www.maiziedu.com/uploads/avatar/2016/03/cacc4c50-ea68-11e5-a40c-00163e004db2_middle.jpg');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$res=curl_exec($ch);
$info=curl_getinfo($ch);
$filename="G:\zendstudio13\PHPAdvance\cURL\myPic.jpg";
file_put_contents($filename, $res);
$size=filesize($filename);
if($size!=$info['size_download']){
    echo '下载数据不完整';
}else{
    echo '下载数据完整';
}
