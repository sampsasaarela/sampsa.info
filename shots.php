<?php

$pages = array(
               'linkedin' => 'http://www.linkedin.com/in/sampsasaarela',
               'twitter' => 'https://twitter.com/sampsasaarela',
               'googleplus' => 'https://plus.google.com/111065308084464028030',
               'facebook' => 'https://www.facebook.com/sampsa.saarela',
               'mail' => 'http://www.emailmeform.com/builder/form/uDc9rjVJdUhkWR8cKaFc'
);

function grab_image($url,$saveto){
    $ch = curl_init ($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    $raw=curl_exec($ch);
    $err = curl_error($ch);
    if($err) {
        echo $err."\n";
    }
    curl_close ($ch);
    if(file_exists($saveto)){
        unlink($saveto);
    }
    $fp = fopen($saveto,'x');
    fwrite($fp, $raw);
    fclose($fp);
}

$width = 280;
$height = 480;
$api = 'https://api.browshot.com/api/v1/simple?url=%s&instance_id=12&width='.$width.'&height='.$height.'&key=iTUywlSOoqVjEbWYLFlytNcaDJi';
foreach($pages as $name => $url) {
    grab_image(sprintf($api,$url),"site/shots/".$name.".png");
}