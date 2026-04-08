<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Registration Form</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="action.php">
        <label for="name">Name:</label>

        <input type="text" id="name" name="name" required />



        <label for="email">Email:</label>

        <input type="email" id="email" name="email" required />



        <label for="gender">Gender:</label>

        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>



        <label for="password">Password:</label>

        <input type="password" id="password" name="password" required />



        <label for="password_repeat">Repeat Password:</label>

        <input type="password" id="password_repeat" name="password_repeat" required />



        <input type="submit" value="Register" />
    </form>
</body>
</html>
