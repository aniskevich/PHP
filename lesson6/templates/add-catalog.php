<button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#addProductModal">
  ADD PRODUCT TO CATALOG
</button>

<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">ADD PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="public/add-catalog.php" method="POST">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="price" placeholder="Price" required>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Select category</label>
                <select class="form-control" id="category" name="category">
                <?php foreach ($options as $key => $option) :?>
                    <?php foreach ($option as $key => $value) :?>
                            <?php 
                                if ( $key === "category" ) echo "<option>$value</option>";
                            ?> 
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Select color</label>
                <select class="form-control" id="color" name="color">
                <?php foreach ($options as $key => $option) :?>
                    <?php foreach ($option as $key => $value) :?>
                            <?php 
                                if ( $key === "color" ) echo "<option>$value</option>";
                            ?> 
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Select size</label>
                <select class="form-control" id="size" name="size">
                <?php foreach ($options as $key => $option) :?>
                    <?php foreach ($option as $key => $value) :?>
                            <?php 
                                if ( $key === "size" ) echo "<option>$value</option>";
                            ?> 
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Select product type</label>
                <select class="form-control" id="type" name="type">
                <?php foreach ($options as $key => $option) :?>
                    <?php foreach ($option as $key => $value) :?>
                            <?php 
                                if ( $key === "type" ) echo "<option>$value</option>";
                            ?> 
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group row">
                <label for="about" class="col-sm-2 col-form-label">About</label>
                <div class="col-sm-5">
                <textarea class="form-control" name="about" placeholder="about" required>
                </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-5">
                <input type="number" class="form-control" name="amount" placeholder="Amount" required>
                </div>
            </div>
            <div class="form-group">
                <label for="link">Product Image</label>
                <input type="file" class="form-control-file" name="link" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>