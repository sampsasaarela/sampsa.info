<?php

$pages = array(
               'linkedin' => 'http://www.linkedin.com/in/sampsasaarela',
               'twitter' => 'https://twitter.com/sampsasaarela',
               'googleplus' => 'https://plus.google.com/+SampsaSaarela',
               'facebook' => 'https://www.facebook.com/sampsa.saarela',
               'mail' => 'http://www.emailmeform.com/builder/form/uDc9rjVJdUhkWR8cKaFc'
);

function grab_image($url,$saveto){
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

    return true;
}

$width = 280;
$height = 480;
$api = 'https://api.browshot.com/api/v1/simple?url=%s&instance_id=12&width='.$width.'&height='.$height.'&key=iTUywlSOoqVjEbWYLFlytNcaDJi';
foreach($pages as $name => $url) {
    echo "Grab ".$name." --> ".$url."\n";
    grab_image(sprintf($api,$url),"site/shots/".$name.".png");
}
