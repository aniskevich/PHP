<div class="card-deck mt-3">
<?php foreach ($products as $product) :?>
    <div class="card">
        <img class="card-img-top" src="<?php echo 'img/'.$product['link']; ?>" alt="product image" style="width: 150px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product['name']; ?></h5>
            <p class="card-text">Price: <?php echo $product['price']; ?> $</p>
            <a href="./templates/product-detail.php?id=<?php echo $product['id']; ?>"><button class="btn btn-primary">Buy</button></a>
        </div>
    </div>
<?php endforeach ?>
</div>