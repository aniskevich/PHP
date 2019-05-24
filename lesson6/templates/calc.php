<form method="POST" class="mt-3">
    <input type="number" name="variable1" required>
    <input type="number" name="variable2" required>
    <input type="submit" value="+" name="operation">
    <input type="submit" value="-" name="operation">
    <input type="submit" value="*" name="operation">
    <input type="submit" value="/" name="operation">
</form>
<?php
    $var1 = (int)$_POST['variable1'];
    $var2 = (int)$_POST['variable2'];
        switch ($_POST['operation']) {
            case '+': 
            $result = $var1 + $var2;
            break;
            case '-': 
            $result = $var1 - $var2;
            break;
            case '*': 
            $result = $var1 * $var2;
            break;
            case '/': 
            if ($var1 === 0) {
                $result = "На ноль не делим";
            }
            else {
                $result = $var1 / $var2;
            }
            break;
        }
?>
<div>
    result: <?php echo $result; ?>
</div>