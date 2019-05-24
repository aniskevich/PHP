<?php require_once $_SERVER['DOCUMENT_ROOT']."/lesson6/public/product-detail.php"; ?>
	            <div class="container">
	                <img src="../img/<?=$result['link']?>">
	                <div>
                        Name: <?=$result['name']?> <br>
                        Price: <?=$result['price']?> <br>
                        Size: <?=$result['size']?> <br>
                        Color: <?=$result['color']?> <br>
                        About: <?=$result['about']?> <br>
                        Available on stock: <?=$result['amount']?> <br>
					</div>
					<form action="../public/add-to-cart.php" method="POST">
						<input type="submit" value="BUY" name="<?=$result['id']?>">
					</form>
	            </div>
