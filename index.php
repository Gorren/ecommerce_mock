<?php require_once("include/functions.php"); ?>
<?php
  // set page title before including header.php
  set_page_title("Welcome");
  include("include/header.php");
 ?>

<main>
  <!-- Showcase -->
  <div class="container">
    <div class="showcase_home">
      <img src="image/showcase_home.png" alt="Showcase Image" >
    </div>
  </div>

  <!-- Deals -->
  <section class="recommendation deals container">
    <h2 class="recommendation_title">Hot Deals</h2>
    <ul>
      <?php
        // fake data
        $deals = array("adidas_rugby_ball", "adidas_soccer_ball", "ball_pump");

        foreach ($deals as $deal){
          $product = find_product_info($deal);
          // still in loop..
      ?>
      <li class="product">
        <a href="product.php?product=<?php echo $product['name']; ?>">
          <img class="product_image" src="<?php echo $product['image_src']; ?>" alt="Product Image">
          <p class="product_title"><?php echo $product['title']; ?></p>
          <p class="product_price"><?php echo $product['price']; ?></p>
        </a>
      </li>
      <?php } // end loop ?>
    </ul>
  </section>

  <!-- You May Also Like -->
  <section class="recommendation container">
    <h2 class="recommendation_title">You May Also Like</h2>
    <ul>
      <?php
        // fake data
        $recommendations = array("product_default", "product_default", "product_default");

        foreach ($recommendations as $recommendation){
          $product = find_product_info($recommendation);
          // still in loop..
      ?>

      <li class="product">
        <a href="product.php?product=<?php echo $product['name']; ?>">
          <img class="product_image" src="<?php echo $product['image_src']; ?>" alt="Product Image">
          <p class="product_title"><?php echo $product['title']; ?></p>
          <p class="product_price"><?php echo $product['price']; ?></p>
        </a>
      </li>

      <?php } // end loop ?>
    </ul>
  </section>
</main>

<!-- Footer -->
<?php include("include/footer.php"); ?>
