<?php require_once("include/functions.php"); ?>

<?php
  // process URL query - redirect if requested category doesn't exist
  if (!isset($_GET["category"]) || !valid_category($_GET["category"])){
    redirect_to("index.php");
  }

  // get info on selected category
  $category = find_category_info($_GET["category"]);

  // set page title before including header.php
  set_page_title($category['title']);
  include("include/header.php");
?>

<main>
  <section class="product_listing container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Browse <?php echo $category['title']; ?></h2>
      <ul>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Balls</a></li>
        <li><a href="#">Protective</a></li>
      </ul>
    </aside>

    <!-- Products -->
    <ul class="products">
      <?php
        // fake data
        $products = $category['products'];

        foreach ($products as $this_product){
          $product = find_product_info($this_product);
          // still in loop..
      ?>

      <li class="product">
        <a href="product.php?product=<?php echo $product['name']; ?>">
          <img class="product_image" src="<?php echo $product['image_src']; ?>" alt="Product Image" >
          <p class="product_title"><?php echo $product['title']; ?></p>
          <p class="product_price"><?php echo $product['price']; ?></p>
        </a>
      </li>

      <?php } // end loop ?>
    </ul>
  </section>

</main>
<?php include("include/footer.php"); ?>
