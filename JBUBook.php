<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with CSS</title>
		
		<link rel="stylesheet" href="css/mystyles.css" />
		<script type="text/javascript" src="js/myjs.js"></script>
	</head>


	<body bgcolor="#fff">
	<?php include ("dbpractice.php"); ?>
		<br><br><br>
	<center>
   		<img src = "images/jbu.png" width = "5%" />
    </center>
	<div class = "cart">
		<img src = "images/cart2.png" width = "30%" onclick = "showMyCart()"/>
	</div>
	<div class = "displaycart" id = "displayMyCart" style = "display:none;">
		
	</div>

	
	<h1 align="center"> JBU Online Store </h1>

	
	<ul>
		
		<li class="menu-item"><a href="#" class="drp">Books</a>
		<div class="menu-content">
			<a  href="add_book.php">Graphic Design</a><br>
			<a  href="remove_book.php">Computer Science</a><br>
			<a href="display_books.php">Engineering</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>



		<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!</p> <br>

       <?php
           // $sql_product = "SELECT * FROM product_tab";
            //$result_product=$connect->query($sql_product);

            //while($row_product = $result_product->fetch_assoc()){
                //echo $row_product["product_name"]."<br>";
                //echo $row_product["unit_price"]."<br>";
                //echo "<hr><br>";
			//}
        //?>

		<table align = "center" class = "merch-table">
			<tr>
			<?php
			$sql_product = "SELECT * FROM product_tab WHERE category = 'book'";
			$result_product = $connect->query($sql_product);
			
			$count = 0;

			while($row_product = $result_product->fetch_assoc()) { 
				if($count % 4 == 0 && $count != 0){
					echo '</tr><tr>';
				}
				?>
				<td align = "center">
					<a href = "javascript:void(0)" onclick = "popupfunction(<?php echo $row_product['sid'];?>)" class = linktext>
					<img src = "<?php echo $row_product['product_image'];?>" width = "70%"><br><?php echo $row_product['product_name'];?>
					<br><br>
					</a>
					<button style="width:100px;height:30px" onclick = "addcart('<?php echo $row_product['product_name'];?>')"> Add to Cart </button>
				</td>
				<div id="popup<?php echo $row_product['sid'];?>" class="white_content">
						<p align=center><br><br>
						<img src="<?php echo $row_product['product_image'];?>" width=25% /><br><?php echo $row_product['product_name'];?><br><br>Price: $<?php echo $row_product['unit_price'];?><br>Rating: <?php echo $row_product['Rating'];?>
						<br><br>
						<a href = "javascript:void(0)" onclick = "popupclose('<?php echo $row_product['sid'];?>')" class=linktext>close window</a>
						</p>
					</div>
					<div id="fade<?php echo $row_product['sid']; ?>" class="black_content"></div>
				<?php
				$count++;
			}
			?>
	</body>
</html>