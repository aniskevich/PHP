<div class="container col-4">
        <form class="mt-3" action="public/registration.php" method="POST">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="repassword">Confirm password</label>
                <input type="password" class="form-control" id="repassword" name="repassword" required>
            </div> 
            <div class="alert-danger mb-3">
            <?php 
                if ($_GET['error'] == 2) { 
                    echo "Passwords must match </br>"; 
                } elseif ($_GET['error'] == 1) {
                    echo "User already exists </br>"; 
                } 
            ?>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
</div>