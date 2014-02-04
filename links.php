<?php

$shots_file = dirname(__FILE__).'/site/shots/shots.json';
$shots = array();
if(file_exists($shots_file)) {
    $shots = json_decode(file_get_contents($shots_file),true);
}

$some_links = array(
    'linkedin' => 'http://www.linkedin.com/in/sampsasaarela',
    'twitter' => 'https://twitter.com/sampsasaarela',
    'googleplus' => 'https://plus.google.com/+SampsaSaarela/posts',
    'facebook' => 'https://www.facebook.com/sampsa.saarela',
    'mail' => 'http://www.emailmeform.com/builder/form/uDc9rjVJdUhkWR8cKaFc'
);
