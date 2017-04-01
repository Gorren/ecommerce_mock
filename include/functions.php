<?php

function redirect_to($new_location) {
  header("Location: " . $new_location);
  exit;
}

function set_page_title($title){
  global $page_title;
  $page_title = $title;
}
function get_page_title(){
  global $page_title;
  return $page_title;
}

/* ---------- Following are fake implementations ---------- */
// Real implementation will involve database
// Process queries carefully when real database is connected
// Passing ID numbers in queries might be better than using names

/* ----- Product ----- */

// checks if product exists
function valid_product($product_name){
  $valid_names = array(
    "product_default",
    "adidas_rugby_ball",
    "ccc_rugby_headgear",
    "ball_pump",
    "blue_mouthguard",
    "adidas_soccer_ball",
    "adidas_shinguard",
    "nike_soccer_ball",
    "nike_shinguard"
  );

  return in_array($product_name, $valid_names);
}

// returns product info in an array
function find_product_info ($product_name){

  // look up "database"
  $name = urlencode(str_replace(' ', '_', strtolower($product_name)));
  $title = ucwords(str_replace('_', ' ', $product_name));
  $image_src = "image/".$name.".png";
  $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

  switch ($product_name){
    case "product_default":
      $price_original = "$23.45";
      $price = "$12.34";
      $category = "Category Default";
      $brand = "Brand Default";
      break;

    case "adidas_rugby_ball":
      $price_original = "$39.99";
      $price = "$34.99";
      $category = "rugby";
      $brand = "Adidas";
      break;

    case "ccc_rugby_headgear":
      $price_original = "$119.99";
      $price = "$109.99";
      $category = "rugby";
      $brand = "CCC";
      break;

    case "ball_pump":
      $price_original = "$14.99";
      $price = "$11.99";
      $category = "rugby";
      $brand = "Pump King";
      break;

    case "blue_mouthguard":
      $price_original = "$34.99";
      $price = "$29.99";
      $category = "rugby";
      $brand = "MOGO";
      break;

    case "adidas_soccer_ball":
      $price_original = "$69.99";
      $price = "$59.99";
      $category = "soccer";
      $brand = "Adidas";
      break;

    case "adidas_shinguard":
      $price_original = "$24.99";
      $price = "$19.99";
      $category = "soccer";
      $brand = "Adidas";
      break;

    case "nike_soccer_ball":
      $price_original = "$29.99";
      $price = "$24.99";
      $category = "soccer";
      $brand = "Nike";
      break;

    case "nike_shinguard":
      $price_original = "$24.99";
      $price = "$19.99";
      $category = "soccer";
      $brand = "Nike";
      break;

    default:
    break;
  }

  // package product info
  $product_info = array(
    "name"=>$name,
    "title"=>$title,
    "price_original"=>$price_original,
    "price"=>$price,
    "description"=>$description,
    "image_src"=>$image_src,
    "category"=>$category,
    "brand"=>$brand
  );
  return $product_info;
}

/* ----- Category ----- */

// checks if category exists
function valid_category($category_name){

  // fake data
  $valid_names = array("rugby","soccer","cricket","basketball","netball");
  return in_array($category_name, $valid_names);
}

// returns an array of products
function find_products_in_category($category_name){

  // look up "database"
  $products = array();
  switch($category_name){
    case "rugby":
      $products = array("adidas_rugby_ball", "ccc_rugby_headgear", "ball_pump", "blue_mouthguard");
      break;
    case "soccer":
      $products = array("adidas_soccer_ball", "nike_soccer_ball", "adidas_shinguard", "nike_shinguard");
      break;
    case "cricket":
      $products = array("product_default", "product_default", "product_default", "product_default");
      break;
    case "basketball":
      $products = array("product_default", "product_default", "product_default", "product_default");
      break;
    case "netball":
      $products = array("product_default", "product_default", "product_default", "product_default");
      break;
    default:
      $products = array();
      break;
  }
  return $products;
}

// returns category info in an array
function find_category_info ($category_name){

  // lookup "database"
  $name = urlencode(str_replace(' ', '_', strtolower($category_name)));
  $title = ucwords(str_replace('_', ' ', $category_name));
  $products = find_products_in_category($category_name);

  // package category info
  $category_info = array(
    "name"=>$name,
    "title"=>$title,
    "products"=>$products
  );

  return $category_info;
}

?>
