<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self' data:; object-src 'none'; frame-ancestors 'none'; base-uri 'self'; form-action 'self';");
    header("X-Content-Type-Options: nosniff");
     session_set_cookie_params([
    'lifetime' => 0, 
    'path' => '/', 
    'domain' => '', 
    'secure' => true, 
    'httponly' => true, 
    'samesite' => 'Strict' ]);
session_start();
include("db_conn.php");


if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <title>Jacket Potato</title>
</head>

<?php include 'header.php'; ?>

<body class="bg-home">

<div class= "textp "><h1> JACKET POTATO</h1> </div>

<div class="parallax">
    <img src="media/potato2.jpg">
</div>

<div class="content-parallax">
<p><br><b>Mash plant plant tots yam fries mashed duchess. </b> </br> Taro spud bulb 
patata solanum tuberosum chip chip tattie. Chip wedge root plant
baked baked sweet potato. Tots tuber hashbrown plant tuber poutine 
rhizome fries fries. Starch nightshade fries 
fry potato bean plant baked. Baked tater potato mashed patata rhizome bulb.</p>
</div>

<div class="parallax">
  <img src="media/potato3.jpg"> 
</div>


<div class="content-parallax">
<p><br><b>Duchess root duchess tuber chip tater sprout.</b> </br> 
    Sweet potato yam plant 
hot sprout hot fries. Hot mashed patata sprout duchess mash yam rhizome 
sweet potato. Rhizome tater potato rhizome plant potato bean taro. Yam 
potato bean tater taro yam poutine 
chip mashed baked. Hot baked chip taro rhizome tuber spud wedge potato.</p>
</div>

<div class="parallax">
  <img src="media/potato2.jpg">
</div>

<div class="content-parallax">
<p><br><b>potato murphy hashbrown duchess hot.</b></br> Baked tater root wedge chip taro fry 
tots nightshade. Patata tots potato bean murphy mashed tattie plant tots poutine.
 Rhizome tater hashbrown potato bean rhizome chip latke hot. 
Taro tots tater baked duchess plant murphy duchess.</p>
</div>
</body>
</html>

