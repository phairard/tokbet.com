<?php
$json = <<<JSON
[
{
      "images": [
        {
          "coverType": "fanart",
          "url": "http://thetvdb.com/banners/fanart/original/269586-15.jpg"
        },
        {
          "coverType": "banner",
          "url": "http://thetvdb.com/banners/graphical/269586-g3.jpg"
        },
        {
          "coverType": "poster",
          "url": "http://thetvdb.com/banners/posters/269586-13.jpg"
        }
      ]
},
{
      "images2": [
        {
          "coverType": "fanart",
          "url": "http://thetvdb.com/banners/fanart/original/95021-16.jpg"
        },
        {
          "coverType": "banner",
          "url": "http://thetvdb.com/banners/graphical/95021-g14.jpg"
        },
        {
          "coverType": "poster",
          "url": "http://thetvdb.com/banners/posters/95021-8.jpg"
        }
      ]
},
{
      "images3": [
        {
          "coverType": "fanart",
          "url": "http://thetvdb.com/banners/fanart/original/248682-43.jpg"
        },
        {
          "coverType": "banner",
          "url": "http://thetvdb.com/banners/graphical/248682-g20.jpg"
        },
        {
          "coverType": "poster",
          "url": "http://thetvdb.com/banners/posters/248682-14.jpg"
        }
      ]
    }
]
JSON;

$json = json_decode($json);
//echo '<pre>' .print_r($json, 1) .'</pre>';

foreach ($json as $item)
{
    foreach ($item->images as $img)
    {
            echo 'Image Cover Type: ' .$img->coverType .'<br/>';
            echo 'URL: ' .$img->url;
    }
}
?>