<?php

$image = imagecreatefrompng('1x1.png');
header('Content-Type: image/png');

imagepng($image);
imagedestroy($image);

// Grab a parameter appended to the image source
// ex: $_GET['email']

// Run a database query against email parameter and update record or whatever you fancy
// Useful for email opens/activations or a custom page viewing stats script