<html>
    <head>
        <title>Login And Registration Form</title>
        
        <link rel="stylesheet" href="style1.css">
    </head>
<body>

    <div class="container">
      <div class="card">
          <div class="inner-box" id="card">
              <div class="card-front">
                  <h2>LOGIN</h2>
                  <form action="login.php" method="post">
                  <input type="text" class="input-box" name= "username" placeholder="Enter your username" required>
                  <input type="password" class="input-box" name ="password" placeholder="Enter your Password" required>
                      <button type="submit" class="submit-btn">Log In</button>
                      <input type="checkbox"><span>Remember me</span>
                  </form>
                  <button type="button" class="btn" onclick="openRegister()">I'm new Here.</button>
                  <a href="">Forgot Password</a>
              </div>
              <div class="card-back">
                <h2>REGISTER</h2>
                <form action="register.php" method="post">
                    <input type="text" class="input-box" name= "username" placeholder="Enter your username" required>
                    <input type="email" class="input-box" name= "email" placeholder="Enter your email" required>
                    <input type="password" class="input-box" name ="password" placeholder="Enter your Password" required>
                    <input type="password" class="input-box" name ="confirm_password" placeholder="Confirm your Password" required>
                    <button type="submit" class="submit-btn">Sign In</button>
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button type="button" class="btn" onclick="openLogin()">I already've an account.</button>
                <a href="">Forgot Password</a>
              </div>
          </div>
      </div>  

    </div>

    <script>
        var card= document.getElementById("card");
        function openRegister(){
            card.style.transform= "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform= "rotateY(0deg)";
        }
    </script>



</body>
</html>