<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="inputField">

<form id="cartUplaod" action="admin.php" method="POST">

<input id="inputName" name="productName" type="text" placeholder="Product name">
<div class="ratings">

<ul id="selectRate"> Rate product <i id="sort_down" class="fas fa-sort-down"></i> 
    <i id="sort_up" class="fas fa-sort-up"></i>

<li class="selectedRate" id="rate1">1 <i class="fas fa-star"></i></li>
<li class="selectedRate" id="rate2">2 <i class="fas fa-star"></i> <i class="fas fa-star"></i></li>
<li class="selectedRate" id="rate3">3 <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></li>
<li class="selectedRate" id="rate4">4 <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </li>
<li class="selectedRate" id="rate5">5 <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
      <i class="fas fa-star"></i> <i class="fas fa-star"></i> </li>
</ul>

</div>
<input id="inputDesc" name="productDescription" type="text" placeholder="Product Description">
<input id="inputPrice" name="productPrice" type="text" placeholder="Product price">

<button type="submit" id="btn_submit">Submit</button>

</form>


</section>
</body>
</html>