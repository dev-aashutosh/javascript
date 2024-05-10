<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<script>
function checklog(c1, c2) {
    email = c1.value;
    pass = c2.value;

    obj = new XMLHttpRequest();
    obj.onload = function() {}
    obj.open("POST", "processlogin.php", true)
    obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    obj.send("useremail=" + email + "&userpass=" + pass)
}
</script>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">

        <form method="post" class="d-flex flex-column gap-2" onsubmit="return false">

            <div class="form-floating">
                <input class="form-control" type="email" name="uemail" required placeholder="email">
                <label for="floatingInput">Email address</label>
                <span class="form-text">Your Email will stay safe with us</span>
            </div>

            <div class="form-floating">
                <input class="form-control" type="password" name="upass" id="" required placeholder="Password">
                <label for="floatingInput text-5">Password</label>
            </div>

            <button class="btn btn-primary" type="submit" onclick="checklog(uemail,upass)">Login</button>

            <p class="text-center">Not a User?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>

</body>

</html>