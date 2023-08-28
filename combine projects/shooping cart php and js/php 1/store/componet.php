<?php

require_once 'database.php';

function componet($descriptions, $prices, $product, $hiddenId){
  echo  $element = '
    <div class="Grid">
    <form method="post">
    <div class="productGrid">
     <img src="'.$descriptions.'" alt="products" />
     <h5> '.$product.' </h5>
     <h6>ratings</h6>
     <p> Some description </p>
     <span>'.$prices.'</span>

     <input type="hidden" name="numId" value='.$hiddenId.'>

     <button type="submit" name="add_cart" class="btn_addCart">Add Cart</button>

    </div>
    </form>
    </div>
';



}
?>