<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-deck mt-3">
            <?php foreach ($goods as $good) :?>
                <div class="card" id="<?=$good['id']?>">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue shopping</button>
        <button type="button" class="btn btn-primary">Proceed to checkout</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $('.addToCart').click(function() {
        $.ajax({
            type: "POST",
            url: 'public/add-to-cart.php',
            data: {product_id: this.parentElement.parentElement.id},
            success: function(response)
            {
                let res = JSON.parse(response);
                $('#' + res.product_id).children().children('.quantity').html('Quantity: ' + res.quantity);
            }
       });
    });
    $('.deleteFromCart').click(function() {
        $.ajax({
            type: "POST",
            url: 'public/delete-from-cart.php',
            data: {product_id: this.parentElement.parentElement.id},
            success: function(response)
            {
                const res = JSON.parse(response);
                if (!res.del) {
                    $('#' + res.product_id).children().children('.quantity').html('Quantity: ' + res.quantity);
                }
                else {
                    $('#' + res.del).hide();
                }
            }
        });
    });
    $('.cartModal').click(function() {
        $('#cartModal').modal('toggle');
    });
});
</script>