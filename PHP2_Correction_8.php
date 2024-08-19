

<?php
$repeter = 4;
$url ='http://my.mobirise.com/data/userpic/764.jpg';

function afficherImage($url) {
    echo "<img src={$url}>";
}

function repeterImage($url, $repeter){

    // $arr = [
    //     'http://my.mobirise.com/data/userpic/764.jpg',
    //     'http://my.mobirise.com/data/userpic/764.jpg',
    //     'http://my.mobirise.com/data/userpic/764.jpg',
    //     'http://my.mobirise.com/data/userpic/764.jpg'
    // ];


    // foreach ($arr as &$value) {
    //     afficherImage($value);

    // }

    for ($i = 0; $i < $repeter; $i++){
        afficherImage($url);
        echo $i + 1;
    }
}

// afficherImage($url);
repeterImage($url, $repeter);
?>
