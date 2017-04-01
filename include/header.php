<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo get_page_title()." | Quality Sports Gear"; ?></title>
  </head>

  <body>
    <header>
      <!-- Utility Menu -->
      <section class="utility">
        <ul class="container">
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Log In | Register</a></li>
          <li><a href="#">Cart</a></li>
        </ul>
      </section>

      <!-- Main Banner -->
      <div class="container">
        <section class="main_banner">
          <!-- Branding -->
          <a href="index.php" class="branding">
            <img src="image/brand_logo.png" alt="Brand Logo">
          </a>
          <!-- Search -->
          <form class="search">
            <input type="search" name="search" placeholder="I'm looking for..."/>
            <input type="submit" value="Search" />
          </form>
        </section>
      </div>


      <!-- Navigation -->
      <nav class="categories">
        <ul class="container">
          <li><a href="category.php?category=rugby">Rugby</a></li>
          <li><a href="category.php?category=soccer">Soccer</a></li>
          <li><a href="category.php?category=cricket">Cricket</a></li>
          <li><a href="category.php?category=basketball">Basketball</a></li>
          <li><a href="category.php?category=netball">Netball</a></li>
        </ul>
      </nav>
    </header>
