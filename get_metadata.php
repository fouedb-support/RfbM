<?php
// Simuler la récupération des métadonnées depuis la source audio
$metadata = 'Now Playing: Song Title - Artist Name';
// Retourner les métadonnées au format JSON pour la manipulation côté client
echo json_encode($metadata);
?>
