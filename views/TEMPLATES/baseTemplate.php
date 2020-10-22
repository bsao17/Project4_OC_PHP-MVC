
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/224ea7dbd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../PUBLIC/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" />
    <title>Jean Forteroche</title>
</head>

<body>
    <div class="border border-light m-2 rounded d-flex flex-column justify-content-center align-items-center" id="banner">
        <header>
            <?php require("barNavTemplate.php"); ?>
            <section class="text-dark m-3">
                <h4 class="card card-light p-2 text-center w-50 m-auto"><?php echo strtoupper( $_GET['action']); ?></h4>
        </header>

    
    </div>
    </section>

    <footer>
        <?php require_once("footerView.php"); ?>
    </footer>
    <!--Bootstrap-->
    <section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </section>
</body>

</html>