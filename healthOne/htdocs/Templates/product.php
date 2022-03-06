<!DOCTYPE html>
<html>
<?php
  include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
  <?php
    include_once('defaults/menu.php');
  ?>
  <?php
    echo "<h3 class='prot'>" . $product['name'] . "</h3>";
    echo "<img class='card-img prods' src=" . $product['picture'] . ">";
    echo "<p class='prot2'>" . $product['description'] . "</p>"; 
  ?>
  <form method="post" action="">
    <label>Name:</label>
    <input name="name" type="text"><br>
    <label>Review:</label>
    <textarea name="content" type="text"></textarea><br>
    <label>Stars:</label>
    <div class="rate">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
    <input name="submit" type="submit" value="Submit">
 </form>
  
 <?php
  
  $review = getReview($productId);
    foreach($review as &$data){
      echo"
      <div class='card' style='width: 18rem;'>
  <div class='card-body'>
    <h5 class='card-title'>name: $data->name</h5>
    <p class='card-text'>content: $data->content</p>
    <p class='card-text'>stars: $data->rating</p>
    </div>
    </div>
  ";
  }
  
  ?>
</div>
</body>
</html>



