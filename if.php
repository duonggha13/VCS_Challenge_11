<!DOCTYPE html>
<html>
<body>
    <?php
        require 'user.php';
        $base64Code = $_POST['base64Code'];
        $serializeUser = base64_decode($base64Code);
        $deserializeUser = unserialize($serializeUser);
        $username = $deserializeUser->getUsername();
        $email = $deserializeUser->getEmail();
        $yearOfBirth = $deserializeUser->getYearOfBirth();
        $sex = $deserializeUser->getSex();
    ?>
        <div class="container">
            <h1 style="text-align: center">Info</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Year Of Birth</th>
                        <th scope="col">Sex</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $yearOfBirth; ?></td>
                        <td><?php echo $sex; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
</html>

