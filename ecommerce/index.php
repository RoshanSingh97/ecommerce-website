<!DOCTYPE html>
<?php
include("functions/functions.php");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Online Shop</title>
    <link rel="stylesheet" href="mystyle.css" />
  </head>

  <body>
    <header class="header">
      <h2>This is the Header</h2>
    </header>
    <div class="topnav">
      <a href="#">Home</a>
      <a href="#">Blog</a>
      <a href="#">SignUp</a>
      <a href="#">Contact Us</a>
    </div>
  <div class="body_wrapper">
    <div class="categories">
      <h4>Categories</h4>
      <div class="categoriesList">
        <?php
        getCats();
        ?>
      </div>
      <div class="categoriesList">
        <h4>Brands</h4>
        <?php
        getBrands();
        ?>
      </div>
    </div>
  </div>
      <div>
       <?php
       getProducts();
       ?>
      </div>
      
    <footer class="footer">
      <h2>This is the footer</h2>
    </footer>
  </body>
</html>
