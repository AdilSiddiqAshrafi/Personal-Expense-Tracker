<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .input-control input {
            border: 2px solid #f0f0f0;
            border-radius: 4px;
            display: block;
            font-size: 12px;
            padding: 10px;
            width: 100%;
        }

        .input-control input:focus {
            outline: 0;
        }

        .input-control.success input {
            border-color: #09c372;
        }

        .input-control.error input {
            border-color: #ff3860;
        }

        .input-control .error {
            color: #ff3860;
            font-size: 9px;
            height: 13px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container bg-white rounded container-fluid mx-auto d-block"
        style="width:450px; margin-top: 80px; border-left:1px solid #ff0095;">

        <div class="d-flex justify-content-around">

            <div class="text-center">
                <h4 class="" style="margin-left: 160px;">Login</h4>
            </div>
            <a href="../index.php" class="btn text-white border mt-3"
                style="background-color: #ff0095; margin-left:110px; border-color: #ff0095;">Go to site</a>

        </div>
        <form id="form" method="post" action="../Server/requests.php">
            <div class="mb-3 input-control">
                <label for="email" class="form-label">Email<span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="email" name="email">
                <div class="error"></div>
            </div>

            <div class="mb-3 input-control">
                <label for="password" class="form-label">Password<span class="text-danger"> *</span></label>
                <input type="password" class="form-control" id="password" name="password">
                <div class="error"></div>
                <div class="no-data text-danger mt-1"></div>
            </div>

            <div class="d-grid mb-3">
                <div class="form-check">
                    <input type="checkbox" type="checkbox" id="remember" name="rem">
                    <label for="form-check-label">Remember me</label>
                </div>
                <button type="submit" name="login" class="btn btn-primary text-light" id="submit-btn"
                    style="background-color: #ff0095;border-color: #ff0095;">Log In</button>
            </div>
            <div class="text-center">
                <p>Don't have an account?
                    <a href="../includes/Signup.php" class="text-decoration-none">Sign up</a>
                <p><a href="" class="text-decoration-none">Forgot Password?</a></p>
                </p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
    </script>
    <script src="script.js"></script>
    <script>
        let form = document.getElementById('form');
        let email = document.getElementById('email');
        let password = document.getElementById('password');

form.addEventListener('submit', e => {

    iseror = false; // RESET every time

    validateInputs();

    if (iseror) {
        e.preventDefault();
    }

});

        // dispaly error in err section iff error appear
        var iseror = false;
        let setError = (element, message) => {
            let inputControl = element.parentElement;
            let errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = message;
            inputControl.classList.add('error');
            inputControl.classList.remove('success')      
            iseror = true; 
            return;
        }
        // sucees make error field empty if sucees
        const setSuccess = element => {
            let inputControl = element.parentElement;
            let errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = '';
            inputControl.classList.add('success');
            inputControl.classList.remove('error');
        };
        // regex for email validation
        let isValidEmail = email => {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        // form validation check if input fieldempty or chracter less than required etc.
        let validateInputs = () => {
            let emailValue = email.value.trim();
            let passwordValue = password.value.trim();

            if (emailValue === '') {
                setError(email, 'Email is required');
            } else if (!isValidEmail(emailValue)) {
                setError(email, 'Provide a valid email address');
            } else {
                setSuccess(email);
            }

            if (passwordValue === '') {
                setError(password, 'Password is required');
            } else if (passwordValue.length < 8) {
                setError(password, 'Password must be at least 8 character.')
            } else {
                setSuccess(password);
            }
        };
    </script>
</body>

</html>