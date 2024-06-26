<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma City</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>
<?php
include("inc/parts/header.php");
?>
    <video autoplay loop muted playsinline class="background-video">
       <source src="assets/videos/test_fundal.mp4" type="video/mp4">
        Browserul tău nu suportă tagul video.
    </video>
      <div id="data-curenta" class="data-stilizata"></div>
         <div class="content" >
            <h1 class="main-title">Sigma</h1>
             <p class="subtitle" >
            Dedicat dezvoltării tale personale și profesionale </p>
         </div>
<?php
include("inc/parts/footer.php");
?>
</body>
</html>

