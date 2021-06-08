<! -- coded by BayMx19 -- !>
<!DOCTYPE html>
<html>
<head> <title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="https://estehanget24.xyz/login_files/css/style.min.css" type="text/css"> 
</head>
<body>

<h2>Login Form</h2>

<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    

    <div class="container" >
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ><br>
    <!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Show Password <br>
<script>
    function myFunction() {
         var x = document.getElementById("myInput");
            if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
    myInput.onkeyup = function() {
// Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) { 
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

// Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

// Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

// Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

        <label>
        <input type="checkbox" checked="checked" name="remember">Remember me
        </label><br>
        <button class="button" type="submit"><span>Login</span></button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> <br>
      Forgot your password? <a href="#"><button type="button" class="pswbtn">  Click Here </button></a> <br>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
        if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
  $objLogin->login(time() + 3600 * 24 * 14);
}
else $objLogin->login(); ?>
</body>
</html>
