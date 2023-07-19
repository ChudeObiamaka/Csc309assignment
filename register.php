<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="process.php" method="post">
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname">
        </div>

        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname">
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender">
        </div>

        
        <div>
            <label for="date">Date of Birth:</label>
            <input type="date" name="date_birth">
        </div>

        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

