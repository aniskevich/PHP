<div class="mt-3"><h3>Cart</h3></div>
<div class="card-deck mt-3">
<?php foreach ($goods as $good) :?>
    <div class="card">
        <img class="card-img-top" src="<?='img/'.$good['link']?>" alt="product image" style="width: 150px;">
        <div class="card-body">
            <h5 class="card-title"><?=$good['name']?></h5>
            <p class="card-text">Price: <?=$good['price']?> $</p>
            <p class="card-text">Size: <?=$good['size']?></p>
            <p class="card-text">Color: <?=$good['color']?></p>
            <p class="card-text">Quantity: <?=$good['quantity']?></p>
            <a href="public/delete-from-cart.php?id=<?=$good['id']?>"><button class="btn btn-primary">Delete</button></a>
        </div>
    </div>
<?php endforeach ?>
</div>