<?php



session_start();

// Generate a random number for the captcha
$randomNumber = rand(1000, 9999);

// Store the captcha string in the session
$_SESSION['captcha'] = $randomNumber;

// Create a new image with a white background
$image = imagecreatetruecolor(120, 30);
$bgColor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgColor);

// Add the captcha string to the image
$textColor = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 25, 5, $randomNumber, $textColor);

// Set the content type to image/png
header('Content-Type: image/png');

// Output the image as PNG
imagepng($image);

// Clean up
imagedestroy($image);
?>



