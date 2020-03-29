<?php



require "vendor/autoload.php";

$access_token = 'FL3ty93Uh/SwOTH6Q3IscEJHwhHdUaDaZSYoGCDrHtht4X7KQ+BnUHriU+Fcob1JcEoI+EjBgTDQCZRSJlYwDRN3/1tBICEY2ZCUEtRmaeyC+D5qhIh1NeIKcMLqV9ow8BbU2G8izJTQwo1Y7DRYXQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1377ab36c1fd1a3d095dc7b437c65c07';

$pushID = 'Ue93861e87e58903babe88a22d285fb40';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







