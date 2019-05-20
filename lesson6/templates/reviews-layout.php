<ul class="list-unstyled pt-3">
  <?php foreach ($reviews as $review) :?>
  <li class="media  mt-3">
    <!-- <img src="..." class="mr-3" alt="...">  Будет аватар пользователя -->
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?php echo $review[username]; ?></h5>
      <?php echo $review[text]; ?>
      <br>
      <?php echo "date: " . $review[date]; ?>
    </div>
  </li>
  <?php endforeach ?>
</ul>