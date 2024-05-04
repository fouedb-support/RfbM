<?php
$metadata = array(
    'title' => 'Song Title',
    'artist' => 'Artist Name',
    'album' => 'Album Name',
    'duration' => '3:45'
);

$metadata_json = json_encode($metadata);

header('Content-Type: application/json');
echo $metadata_json;
?>
