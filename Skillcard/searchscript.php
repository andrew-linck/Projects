<?php
$opts = [
  'http'=>[
    'method'=>"GET",
    'header'=>"TRN-Api-Key: 2e58ffb7-53a8-4ee5-b41f-e547c02b9614"
  ]
];

$context = stream_context_create($opts);
$player = "Ninja";

$playerencoded = str_replace("+", "%20", $player);
$playerscore = file_get_contents("https://api.fortnitetracker.com/v1/profile/pc/$playerencoded", true, $context);

if(strpos($playerscore, 'Player Not Found') !== false || empty($playerscore)) {
	$playerscore = file_get_contents("https://api.fortnitetracker.com/v1/profile/xb1/$playerencoded", true, $context);
  if(strpos($playerscore, 'Player Not Found') !== false || empty($playerscore)) {
    $playerscore = file_get_contents("https://api.fortnitetracker.com/v1/profile/psn/$playerencoded", true, $context);
    if(strpos($playerscore, 'Player Not Found') !== false || empty($playerscore)) {
      header('Location: http://localhost:8888');
        }
      }
  }

$decoded = json_decode($playerscore, true);

$matches = print_r($decoded[lifeTimeStats][7][value], true);
$wins = print_r($decoded[lifeTimeStats][8][value], true);
$userhandle = print_r($decoded[epicUserHandle], true);

$rating = $wins * 99 - $matches;



if($rating >= 200000) {
  $emblem = '/emblems/chevron-16.png';
}
if($rating < 200000 && $rating > 99) {
  $emblem = '/emblems/chevron-16.png';
}
if($rating < 99) {
  $emblem = '/emblems/chevron-16.png';
}
echo $playerscore;
?>
