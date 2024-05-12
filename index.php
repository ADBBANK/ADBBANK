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
        <img src="imgs/adb.png" alt="">
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
    <style>
        body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0f0f0;
  }
  
  .container {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 400px;
  }
  
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="email"],
  input[type="tel"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }
  
  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  
  button[type="submit"]:hover {
    background-color: #3e8e41;
  }
  
  .password-container {
    position: relative;
  }
  
  #togglePassword {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #ccc;
  }
  
  #togglePassword.show {
    color: #0095FF;
  }
  
    </style>
</body>
</html>
