<?php
$con=mysqli_connect("localhost","root","","ecommerce");
function getCats(){
 global $con;   
$get_cats= "select * from categories";
$run_cats= mysqli_query($con,$get_cats);
while($row_cats= mysqli_fetch_array($run_cats)){
    $cat_id = $row_cats['cat_id'];
    $cat_title=$row_cats['cat_title'];
    echo "<a href='#'>$cat_title</a>";
    }
}

function getBrands(){
    global $con;
    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con,$get_brands);
    while($row_brands=mysqli_fetch_array($run_brands)){
        $brand_id= $row_brands['brand_id'];
        $brand_title =$row_brands['brand_title'];

    echo "<a href='#'>$brand_title</a>";
    }
}

function getProducts(){
    global $con;
    $get_product ="select * from products order by RAND() LIMIT 0,6";
    $run_product =mysqli_query($con,$get_product);
    while($row_product= mysqli_fetch_array($run_product)){
        $product_id = $row_product['product_id'];
        $product_cat = $row_product['product_cat'];
        $product_brand = $row_product['product_brand'];
        $product_title = $row_product['product_title'];
        $product_price = $row_product['product_price'];
        $product_image = $row_product['product_image'];
        
        echo "<div class= 'product_card'>
            <h3>$product_title</h3>
            <img src='admin_area/product_images/$product_image' width='180' height='180'/>
            <p class='price'> Price: Rs. $product_price </p>
					
			 <a class='details' href='details.php?pro_id=$product_id' style='float:left;'>Details</a>
					
			 <a href='index.php?add_cart=$product_id'><button id='product_card_button'>Add to Cart</button></a>
				
            </div>";

    }
}


?>