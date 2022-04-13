<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Page</title>

    <link rel="stylesheet" href="style-layout-login.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="backlogin">
            <img src="image/login.png" alt="" class="imagelogin">
            <img src="image/mesin.png" alt="" class="mesin">

            <h1>GO LAUNDRY APP</h1>
        </div>
        <div class="login-form">
            <img src="image/profile.png" alt="" class="login-img">
            <h2>Welcome !</h2>

            <div class="form-user">
                <form action="/dashboard">
                    <div class="input">
                        <i class='bx bxs-user'></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input">
                        <i class='bx bx-key'></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <button>LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>