<div class="mt-3"><h3>Catalog</h3></div>
<div class="card-deck mt-3">
<?php foreach ($products as $product) :?>
    <div class="card">
        <img class="card-img-top" src="<?php echo 'img/'.$product['link']; ?>" alt="product image" style="width: 150px;">
        <div class="card-body" id="<?=$product['id']?>">
            <h5 class="card-title"><?php echo $product['name']; ?></h5>
            <p class="card-text">Price: <?php echo $product['price']; ?> $</p>
            <button type="button" class="btn btn-primary productDetail" data-toggle="modal" data-target="#catalogModal">Buy</button>
        </div>
    </div>
<?php endforeach ?>
</div>

<div class="modal fade" id="catalogModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
        <img src="" alt="" class="mb-2"> 
        <h5 class="name"></h5>
        <p class="price"></p>
        <p class="color"></p>
        <p class="size"></p>
        <p class="about"></p>
      </div>
      <div class="modal-footer">
        <button id="buy" type="button" class="btn btn-primary">BUY</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    let idx = -1;
    $('.productDetail').click(function() {
        $.ajax({
            type: "POST",
            url: 'public/product-detail.php',
            data: {product_id: this.parentElement.id},
            success: function(response)
            {
                const res = JSON.parse(response);
                idx = res.id;
                $('#modal-body').children('img').attr("src","img/" + res.link);
                $('#modal-body').children('.name').html(res.name);
                $('#modal-body').children('.price').html('Price: ' + res.price + ' $');
                $('#modal-body').children('.color').html('Color: ' + res.color);
                $('#modal-body').children('.size').html('Size: ' + res.size);
                $('#modal-body').children('.about').html('Info: ' + res.about);
            }
       });
    });
    $('#buy').click(function() {
        $.ajax({
            type: "POST",
            url: 'public/add-to-cart.php',
            data: {product_id: idx},
            success: function(response)
            {
                if (response) {
                    $('#catalogModal').modal('hide');
                }
            }
       });
    });
});
</script>