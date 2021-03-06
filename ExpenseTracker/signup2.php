<style>
     * {  
      margin: 0;  
      padding: 0;  
      box-sizing: border-box;  
      font-family: "Poppins", sans-serif;  
 }  
 body {  
      overflow: hidden;  
 }  
 section {  
      display: flex;  
      min-height: 100vh;  
      align-items: center;  
      justify-content: center;  
      background: linear-gradient(to bottom, #f7f7fe, #dff1ff);  
 }  
 section .colour {  
      position: absolute;  
      filter: blur(150px);  
 }  
 section .colour:nth-child(1) {  
      top: -350px;  
      width: 600px;  
      height: 600px;  
      background: #00c995;  
 }  
 section .colour:nth-child(2) {  
      left: 100px;  
      width: 500px;  
      height: 500px;  
      bottom: -150px;  
      background: #4FD3C4;  
 }  
 section .colour:nth-child(3) {  
      right: 100px;  
      bottom: 50px;  
      width: 300px;  
      height: 300px;  
      background: #98a3f9;  
 }  
 .box {  
      position: relative;  
 }  
 .box .square {  
      position: absolute;  
      border-radius: 10px;  
      backdrop-filter: blur(5px);  
      background: rgba(255, 255, 255, 0.1);  
      animation-delay: calc(-1s * var(--i));  
      animation: animate 10s linear infinite;  
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);  
      border: 1px solid rgba(255, 255, 255, 0.5);  
      border-right: 1px solid rgba(255, 255, 255, 0.2);  
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);  
 }  
 @keyframes animate {  
      0%,  
      100% {  
           transform: translateY(-40px);  
      }  
      50% {  
           transform: translateY(40px);  
      }  
 }  
 .box .square:nth-child(1) {  
      top: -50px;  
      left: -60px;  
      width: 100px;  
      height: 100px;  
 }  
 .box .square:nth-child(2) {  
      z-index: 2;  
      top: 150px;  
      left: -100px;  
      width: 120px;  
      height: 120px;  
 }  
 .box .square:nth-child(3) {  
      z-index: 2;  
      width: 80px;  
      height: 80px;  
      right: -50px;  
      bottom: -60px;  
 }  
 .box .square:nth-child(4) {  
      left: 100px;  
      width: 50px;  
      height: 50px;  
      bottom: -80px;  
 }  
 .box .square:nth-child(5) {  
      top: -80px;  
      left: 140px;  
      width: 60px;  
      height: 60px;  
 }  
 .container {  
      width: 400px;  
      display: flex;  
      min-height: 400px;  
      position: relative;  
      border-radius: 10px;  
      align-items: center;  
      justify-content: center;  
      backdrop-filter: blur(5px);  
      background: rgba(255, 255, 255, 0.1);  
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);  
      border: 1px solid rgba(255, 255, 255, 0.5);  
      border-right: 1px solid rgba(255, 255, 255, 0.2);  
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);  
 }  
 .form {  
      width: 100%;  
      height: 100%;  
      padding: 40px;  
      position: relative;  
 }  
 .form h2 {  
      color: #00c995;  
      font-size: 24px;  
      font-weight: 600;  
      position: relative;  
      letter-spacing: 1px;  
      margin-bottom: 40px;  
 }  
 .form h2::before {  
      left: 0;  
      width: 80px;  
      height: 4px;  
      content: "";  
      bottom: -10px;  
      background: #fff;  
      position: absolute;  
 }  
 .form .input__box {  
      width: 100%;  
      margin-top: 20px;  
 }  
 .form .input__box input {  
      width: 100%;  
      color: #019267;  
      border: none;  
      outline: none;  
      font-size: 16px;  
      padding: 10px 20px;  
      letter-spacing: 1px;  
      border-radius: 35px;  
      background: rgba(255, 255, 255, 0.2);  
      border: 1px solid rgba(255, 255, 255, 0.5);  
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);  
      border-right: 1px solid rgba(255, 255, 255, 0.2);  
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);  
 }  
 .form::placeholder {  
      color: #fff;  
 }  
 .form .input__box input[type="submit"] {  
      color: #00c995;  
      cursor: pointer;  
      background: #fff;  
      max-width: 100px;  
      font-weight: 600;  
      margin-bottom: 20px;  
 }  
 .forget {  
      color: #00c995;  
      margin-top: 5px;  
 }  
 .forget a {  
      color: #a5aef9;  
      font-weight: 600;  
      text-decoration: none;  
 }  
</style>
<form action="" method="post">
<section>  
      <div class="colour"></div>  
      <div class="colour"></div>  
      <div class="colour"></div>  
      <div class="box">  
           <div class="square" style="--i:0;"></div>  
           <div class="square" style="--i:1;"></div>  
           <div class="square" style="--i:2;"></div>  
           <div class="square" style="--i:3;"></div>  
           <div class="square" style="--i:4;"></div>  
           <div class="container">  
                <div class="form">  
                     <h2>Register Form</h2>  
                     <form action="" method="POST">  
                          <div class="input__box">  
                               <input type="email" placeholder="Email" name="email">  
                          </div>  
                          <div class="input__box">  
                               <input type="text" placeholder="Username" name="username">  
                          </div>  
                          <div class="input__box">  
                               <input type="password" name="password" placeholder="Password">  
                          </div>  
                          <div class="input__box">  
                               <input type="submit" value="Login" name="signupButton">  
                          </div>  
                          <p class="forget">Forgot Password? <a href="#">Click Here</a></p>  
                          <p class="forget">Already have an account? <a href="Login.php">Sign in</a></p>  
                     </form>  
                </div>  
           </div>  
      </div>  
 </section> 
</form>
