<!DOCTYPE html>
<html>
<body>
    <div>
        <form action="serialization.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div>
                <label>Year Of Birth</label>
                <input type="text" name="yearOfBirth" placeholder="Year of birth" required>
            </div>
            <div>
                <label for="sex">Sex</label>
                <select name="sex">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
