<!DOCTYPE html>
<html>
<body>
    <?php
    session_start();
    $base64Code = $_SESSION['base64Code']; 
    ?>
    <div class="container">
        <form action="show_if_fixed.php" method="post" name="submit_form">
            <div class="form-group">
                <label>Base64 Code: </label>
                <input type="text" name="base64Code" value="<?php echo $base64Code; ?>">
            </div>
            <br><button type="submit" name="submit">Submit</button>
    </div>
</html>
