<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">


    <title>Chinees nieuw jaar</title>
  </head>
  <body>
  <main class="container-fluid">

<header>
    <?php
    include("./header.php");
    include("./navbar.php");
    ?>
</header>

    <!-- Content -->
    <div class="row" id="content">
        <?php
        if (isset($_GET["content"])) {
            include("./" .  $_GET["content"] . ".php");
        } else {
            include("./home.php");
        }
        ?>
    </div>

    <footer>
        <?php
        include("./footer.php");
        ?>
    </footer>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>