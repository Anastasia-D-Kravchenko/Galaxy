<?php
// Check for user agent (limited accuracy due to security restrictions)
$userAgent = $_SERVER['HTTP_USER_AGENT']; // Get user agent string
$isDesktop = preg_match('/Windows|Mac|Linux/i', $userAgent);  // Use preg_match for case-insensitive check

// Redirect based on user agent (consider additional checks for accuracy)
if ($isDesktop) {
  header('Location: ../mars_jupiter_system.html');  // Redirect to desktop page
  exit;  // Stop script execution after redirect
}

// Check for touch support (limited accuracy)
$hasTouch = isset($_SERVER['HTTP_TOUCH_ENABLED']) || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/vnd.wap.xhtml+xml') !== false);

// Redirect based on touch support (consider additional checks for accuracy)
if ($hasTouch) {
  header('Location: ../cards_scroll/cards.html');  // Redirect to mobile page
  exit;  // Stop script execution after redirect
}

// Display the gallery if not redirected (desktop users)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<link href="../img/planets-512.webp" rel="shortcut icon" type="image/x-icon">
<title>Gallery</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="gallery_box">
  <div class="gallery_box_outer">
    <div class="gallery_box_in" style="background-image: url('images/pic1.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic2.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic3.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic4.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic5.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic6.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic7.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic8.jpg');"></div>
    <div class="gallery_box_in" style="background-image: url('images/pic9.jpg');"></div>
  </div>
</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
