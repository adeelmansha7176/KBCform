<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBC Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <div class="logo">
            <img src="logo2.png" alt="KBC Logo">
        </div>
        <form class="registration-form" action="conection.php" method="post">
            <h1>Register for KBC Lucky Draw</h1>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="whatsapp">WhatsApp Number</label>
            <input type="tel" id="whatsapp" name="whatsapp" placeholder="Enter your WhatsApp number" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <button type="submit" names="submit">Submit</button>
        </form>
    </div>
</body>
</html>
