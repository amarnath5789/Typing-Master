<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>CPPSECRETS | Typing Master</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .containers {
            display: flex;
        }

        .body_image {
            width: 100vh;
        }

        .image {
            position: absolute;
        }

        .right-side {
            width: 51%;
            background-color: #cccccc;
            text-align: center;
        }

        .heading {
            font-family: system-ui;
            text-decoration: underline double;
            font-size: 40px;
            color: #232323;
        }

        h3 {
            font-size: 35px;
            font-style: italic;
            font-family: cursive;
        }
    </style>
</head>

<body>
    <div class="containers">
        <div class="left-side">
            <a href="https://cppsecrets.com/" target="_blank"><img class="image" src="logo.png" alt="logo"></a>
            <img class="body_image" src="hand.png" alt="">
        </div>
        <div class="right-side">
            <h1 class="heading my-5 ">TYPING MASTER</h1>
            <h3 class="my-5">Check your typing skills in 60 seconds</h3>
            <h1 class="display-6">Choose your level</h1>
            <div class="btn-group">
                <button class="btn btn-primary btn-lg dropdown-toggle my-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                LEVELS
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="../Typing-Master/beginner.php">Beginner</a></li>
                    <li><a class="dropdown-item" target="_blank" href="../Typing-Master/intermediate.php">Intermediate</a></li>
                    <li><a class="dropdown-item" target="_blank" href="../Typing-Master/advance.php">Advanced</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>