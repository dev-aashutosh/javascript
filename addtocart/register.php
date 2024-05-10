<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>



<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <form method="post" class="d-flex flex-column gap-2" id="myform" onsubmit="validateForm(this); return false;">
            <div class="form-floating">
                <input class="form-control" type="text" name="ntxt" placeholder="First Name" required>
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="text" name="ntxt" placeholder="Last Name" required>
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="email" name="ntxt" placeholder="Email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating position-relative">
                <input class="form-control" type="password" name="ntxt" placeholder="Password" id="password" required>
                <label for="floatingInput">Password</label>
                <i class="bi bi-eye-slash position-absolute top-50 end-0 translate-middle z-1" id="togglePassword"
                    onclick="showPass(this)"></i>
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
            <p class="text-center">Already a User?
                <a href="login.php" class=" ">Login</a>
            </p>
            <div class="empty text-center"></div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    //validating form
    function validateForm(myform) {

        firstName = myform[0].value.trim();
        lastName = myform[1].value.trim();
        email = myform[2].value.trim();
        password = myform[3].value;

        flag = true;

        if (firstName === "" || lastName === "" || email === "" || password === "") {
            alert("Please fill out all fields.");
            flag = false;

        }

        var nameRegex = /^[a-zA-Z]{3,}$/;
        if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
            alert("First name and last name must contain at least 3 alphabets without numbers.");
            flag = false;
        }

        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#@$!%*?&])[A-Za-z\d#@$!%*?&]{6,}$/;
        if (!passwordRegex.test(password)) {
            alert(
                "Password must be 6 characters long and contain at least 1 capital letter, 1 small letter, 1 number, and 1 symbol."
            );
            flag = false;
        }

        if (flag) {
            ajaxReq(firstName, lastName, email, password)
        }
    }

    //send ajax req after validating form
    ajaxReq = (fn, ln, email, pass) => {

        obj = new XMLHttpRequest();
        obj.open("POST", "processreg.php", true)
        obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        obj.send(`fname=${fn} & lname=${ln} & email=${email} & pass=${pass}`);
        obj.onload = function() {

            <?php if (isset($_COOKIE['oldUser'])) { ?>
            ques = confirm('User id already registered. Do you want to proceed with login')
            if (ques) {
                window.location.href = 'login.php'
            }
            <?php } else { ?>

            window.location.href = 'login.php'
            <?php } ?>
        }


    }

    // toggle visibility of the password field
    function showPass(icon) {
        passField = document.querySelector('#password');
        pass = document.querySelector('#togglePassword');
        typ = passField.getAttribute('type') === 'password' ? 'text' : 'password';
        passField.setAttribute('type', typ);

        if (icon.classList.contains('bi-eye')) {
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }

    }
    </script>
</body>

</html>