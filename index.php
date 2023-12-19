<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Changes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<style>
    html,
    body {
        height: 100%;
    }
    .container {
        height: 100%;
    }
    .login-box {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-css {
        border-radius: 10px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 10rem;
        background: #fff;
    }
    .login_btn {
        color: #06b0cd;
        outline: 1px solid #06b0cd;
    }
    .login_btn:hover {
        background-color: #06b0cd;
        color: #fff;
    }
    .login-input {
        min-height: 38px;
        padding-left: 15px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
        border-radius: 0;
        width: 80% !important;
    }
    .input-group-addon {
        max-width: 42px;
        text-align: center;
        background: none;
        border-bottom: 1px solid #ced4da;
        padding-right: 5px;
        border-radius: 0;
        display: flex;
        align-items: center;
    }
    .input-group-addon i {
        color: #06b0cd;
        font-size: 1.3em;
    }
    .login-title {
        color: #06b0cd;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="login-box">
                <div class="col-lg-4 col-md-6 col-sm-12 login-css p-5">
                    <h4 class="my-3 login-title"><b>Login Dashboard</b></h4>
                    <br>
                    <form action="./includes/login_db.php" method="POST">
                        <div class="input-group p-1">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input type="text" name="employee_id" class="form-control login-input"
                                placeholder="Enter Your Employee ID" required>
                        </div>
                        <div class="input-group p-1">
                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                            <input type="password" name="password" class="form-control login-input"
                                placeholder="Enter Your Password" required>
                        </div>
                        <div class="form-group pt-4">
                            <input type="submit" name="login_submit" value="Login" class="btn login_btn float-left w-50">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>