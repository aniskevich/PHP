<div class="container col-4">
        <form class="mt-3" action="public/login.php" method="POST">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="alert-danger mb-3">
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error']) {
                        echo "Wrong credentials </br>";
                    }
                }
            ?>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
</div>