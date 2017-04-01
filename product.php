<?php require_once("include/functions.php"); ?>

<?php
  // process URL query - redirect if requested product doesn't exist
  if (!isset($_GET["product"]) || !valid_product($_GET["product"])){
    redirect_to("index.php");
  }

  // get product attributes
  $product = find_product_info($_GET["product"]);

  // set page title before including header.php
  set_page_title($product["title"]);
  include("include/header.php");
?>

<main>
  <!-- Product Details -->
  <section class="product_details">
    <img src="<?php echo $product['image_src'] ?>" alt="Product Image" />

    <div class="product_info">
      <h2 class="product_title"><?php echo $product['title']; ?></h2>
      <p class="sale_price"><?php echo $product['price'];?> </p>
      <p class="original_price"><?php echo $product['price_original']; ?></p>
      <h3>Product Description</h3>
      <p><?php echo $product['description']; ?></p>
      <h3>Product Category</h3>
      <p><?php echo ucwords($product['category']); ?></p>
      <h3>Brand / Manufacturer</h3>
      <p><?php echo $product['brand']; ?></p>
    </div>

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
<?php include("include/footer.php"); ?>
