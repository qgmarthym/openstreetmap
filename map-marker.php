<?php

/* fonction de recherche ad */

$ad = [
    'Article 3' => [
        'title' => 'Article 3',
        'lat' => '48.86616739999999',
        'lng' => '2.3187930999999935',
        'link' => 'http://netacquisition.umcgroup.fr/ancien/article-3-454.html'
    ],
    'Test module ad' => [
        'title' => 'Test module ad',
        'lat' => '48.880851',
        'lng' => '2.308109300000069',
        'link' => 'http://netacquisition.umcgroup.fr/neuf/teste-module-ad-450.html'
    ]
];

/*$ad = [
    'Article 3' => [
        'title' => 'Article 3',
        'lat' => '48.85616739999999',
        'lng' => '2.328',
        'link' => 'http://netacquisition.umcgroup.fr/ancien/article-3-454.html'
    ],
];*/

//var_dump($ad);
echo json_encode($ad);

?>