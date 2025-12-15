<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/Registeration.css">
    <style>
      .error { color: red; font-size: 0.9rem; margin-top: 4px; }
    </style>
</head>
<body>
<main class="registration-container">
    <h1 style="color: rgb(0, 0, 0);">CREATE NEW ACCOUNT</h1>

    <form id="registrationForm" action="register_login.php" method="POST">
        <p id="p1">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required minlength="3">
        </p>

        <p id="p2">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required pattern="[0-9]{8,}" title="ID must contain 8 or more digits (numbers only)">
        </p>

        <p id="p3">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <div id="dobcheck" class="error"></div>
        </p>

        <p id="p4">
               <label for="nationality" style="text-align: left;"> Nationality:</label>
                <select id="nationality" name="nationality" required>
                    <option value="" disabled selected>Select your Nationality</option>
                    <option value="American">American</option>
                    <option value="Australian">Australian</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Canadian">Canadian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="French">French</option>
                    <option value="German">German</option>
                    <option value="Indian">Indian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Saudi">Saudi</option>
                    <option value="South African">South African</option>
                    <option value="United Kingdom">United Kingdom</option>
                </select>
                
        </p>

        <p id="p5">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" required pattern="[0-9]{9,}" title="Please enter a valid mobile number (9 digits minimum)">
        </p>

        <p id="p6">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
        </p>

        <p id="p7">
            <label for="Semster">Semester:</label>
            <input type="number" id="Semster" name="Semster" required step="1">
            <div id="semcheck" class="error"></div>
        </p>

        <p id="p8">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="6" title="Password must be at least 8 characters long">
            <div id="passcheck" class="error"></div>
        </p>

        <p id="p9">
            <label for="Repassword">Re-enter Password:</label>
            <input type="password" id="Repassword" name="Repassword" required minlength="6">
            <div id="recheck" class="error"></div>
        </p>

        <p id="p10">
            <label>CAPTCHA:</label>
            <div><span id="captcha" style="font-weight:bold; letter-spacing:2px;"></span></div>
            <label for="captchaInput">Enter CAPTCHA:</label>
            <input type="text" id="captchaInput" required>
            <div id="capcheck" class="error"></div>
        </p>

        <button type="submit">Register and Proceed to Sign In</button>
    </form>

    <p style="text-align: center; margin-top: 20px;">
        <a href="signUp.php" style="color: aquamarine;">Already Registered? Sign In</a>
    </p>
</main>

<script>
  let randomCaptcha = Math.floor(Math.random() * 9000) + 1000;
  document.getElementById("captcha").textContent = randomCaptcha;

  const form = document.getElementById("registrationForm");
  const pass = document.getElementById("password");
  const rePass = document.getElementById("Repassword");
  const DoF = document.getElementById("dob");
  const sem = document.getElementById("Semster");
  const dobcheck = document.getElementById("dobcheck");
  const semcheck = document.getElementById("semcheck");
  const passcheck = document.getElementById("passcheck");
  const recheck = document.getElementById("recheck");
  const capcheck = document.getElementById("capcheck");

  [pass, rePass, DoF, sem, document.getElementById("captchaInput")].forEach(el => {
    el.addEventListener('input', () => {
      passcheck.textContent = '';
      recheck.textContent = '';
      dobcheck.textContent = '';
      semcheck.textContent = '';
      capcheck.textContent = '';
    });
  });

  form.onsubmit = function (e) {
    passcheck.textContent = '';
    recheck.textContent = '';
    dobcheck.textContent = '';
    semcheck.textContent = '';
    capcheck.textContent = '';

    if (pass.value.length < 8) {
      passcheck.textContent = "Password must be at least 8 characters";
      e.preventDefault();
      return false;
    }

    let pattern = /(?=.*[A-Z])(?=.*[0-9])/;
    if (!pattern.test(pass.value)) {
      passcheck.textContent = "Password must contain at least 1 uppercase letter and 1 number";
      e.preventDefault();
      return false;
    }

    if (pass.value !== rePass.value) {
      recheck.textContent = "Passwords do not match";
      e.preventDefault();
      return false;
    }

    if (!DoF.value) {
      dobcheck.textContent = "Please enter your date of birth";
      e.preventDefault();
      return false;
    }
    let today = new Date();
    let minDate = new Date();
    minDate.setFullYear(today.getFullYear() - 18);
    let selected = new Date(DoF.value);
    if (isNaN(selected.getTime())) {
      dobcheck.textContent = "Invalid date";
      e.preventDefault();
      return false;
    }
    if (selected > minDate) {
      dobcheck.textContent = "You must be at least 18 years old";
      e.preventDefault();
      return false;
    }

    if (document.getElementById("captchaInput").value.trim() !== String(randomCaptcha)) {
      capcheck.textContent = "CAPTCHA incorrect";
      e.preventDefault();
      return false;
    }

    const semValue = Number(sem.value);
    if (!Number.isInteger(semValue) || semValue < 1 || semValue > 8) {
      semcheck.textContent = "Semester must be an integer between 1 and 8";
      e.preventDefault();
      return false;
    }

    return true;
  };
</script>
</body>
</html>
