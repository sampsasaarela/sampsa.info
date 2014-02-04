<?php

require_once './links.php';

function grab_image($url,$shot_name,$old){
    echo $url."\n";
    $saveto = "site/shots/".$shot_name.".png";
    $toremove = "site/shots/".$old.".png";
    $ch = curl_init ($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    $raw=curl_exec($ch);

    $code = -1;
    if(!($errno = curl_errno($ch))) {
        $code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
    }
    else {
        echo "Failure with errno ".$errno."\n";
        $err = curl_error($ch);
        echo $err."\n";
    }
    curl_close ($ch);

    echo "Statuscode ".$code."\n";
    if($code !== 200) {
        return false;
    }

    if(file_exists($saveto)){
        unlink($saveto);
    }
    $fp = fopen($saveto,'x');
    fwrite($fp, $raw);
    fclose($fp);

    if(file_exists($toremove)) {
        unlink($toremove);
    }

    return true;
}

$width = 280;
$height = 480;
$api = 'https://api.browshot.com/api/v1/simple?url=%s&instance_id=12&width='.$width.'&height='.$height.'&key=iTUywlSOoqVjEbWYLFlytNcaDJi';
foreach($some_links as $name => $url) {
    $shot_name = uniqid($name);
    if(grab_image(sprintf($api,urlencode($url)),$shot_name,isset($shots[$name]) ? $shots[$name] : null)) {
        $shots[$name] = $shot_name;
    }
}

file_put_contents($shots_file,json_encode($shots));
