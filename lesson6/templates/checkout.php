<div class="d-flex flex-row bd-highlight mb-3">
<?php foreach ($goods as $good) :?>
                <div class="card" id="<?=$good['id']?>" style="width: 150px">
                    <img class="card-img-top" src="<?='img/'.$good['link']?>" alt="product image" style="width: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?=$good['name']?></h5>
                        <p class="card-text">Price: <?=$good['price']?> $</p>
                        <p class="card-text">Size: <?=$good['size']?></p>
                        <p class="card-text">Color: <?=$good['color']?></p>
                        <p class="card-text quantity">Quantity: <?=$good['quantity']?></p>
                        <button class="btn btn-primary addToCart">Add</button>
                        <button class="btn btn-primary deleteFromCart">Delete</button>
                    </div>
                </div>
<?php endforeach ?>
</div>