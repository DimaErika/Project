<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasă | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>

<?php include("inc/parts/header.php"); ?>

<div class="body-finals">
    <div class="news-container">
        <section class="latest-announcement">
            <h2>Subiecte de bacalaureat</h2>
            <hr>
            <p>Bacalaureatul se apropie, și fiecare zi de studiu contează!
            <p>Acum este momentul să-ți consolidezi cunoștințele și să te asiguri că ești pregătit pentru examen. </p>
            Revizuiește bine materialele, exersează problemele dificile și răspunde la întrebări de antrenament.
                Cu un pic de efort zilnic, vei intra în sala de examen pregătit și încrezător. <p>Succes!</p>
        </section>

        <section class="exam-sessions">
            <a href="bac2023.php">Bacalaureat 2023 - Materiale</a>
            <hr>
            <a href="bac2022.php">Bacalaureat 2022 - Materiale</a>
            <hr>
            <a href="bac2021.php">Bacalaureat 2021 - Materiale</a>
            <hr>
            <a href="bac2020.php">Bacalaureat 2020 - Materiale</a>
            <hr>
            <a href="bac2019.php">Bacalaureat 2019 - Materiale</a>
            <hr>

        </section>


    </div>
</div>


<?php include("inc/parts/footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2000
        });
    });
</script>

</body>
</html>
