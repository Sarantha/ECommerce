<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: index.php');
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Jars of Joy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="styles/core-style.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-3 pt-1" style="display : hidden">
      </div>
      <div class="col-3 text-center">
        <a class="blog-header-logo text-dark" href="#">Jars of Joy</a>
      </div>
      <div class="col-3 d-flex justify-content-end align-items-center">
        Welcome <?php echo $_SESSION['username']; ?> &nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-outline-secondary" href="logoutfunc.php">Logout</a>
      </div>
    </div>
  </header>

  <!--<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Our Poducts</a>
    </nav>
  </div>-->
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">The Jars of Joy - Collection</h1>
      <p class="lead my-3">
        Purchase successfully completed
      </p>
      <a href="products.php" type="button" class="btn btn-success">Continue Shopping</a>
    </div>
  </div>

</main>
    <br/>
    <br/>
    <footer class="blog-footer">
        <p>There is so much more to being a Chefs than simply knowing the techniques. Our chefs possess the passion and flair to make ordinary ingredient???s taste extraordinary Many of our chefs excel in their own disciplinaries and have achieved many awards and accolades within the local and international culinary arena.</p>
        <center>
            <img class="bd-placeholder-img" width="150" height="150" src="images/logo.jpeg"/>
        </center>
    </footer>

  </body>
</html>
