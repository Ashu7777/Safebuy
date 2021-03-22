<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeBuy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://kit.fontawesome.com/a5f979f6a2.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand mr-5" href="index.php"><i class="fas fa-shopping-bag" style="color: red;"></i> SafeBuy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mr-auto">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-auto">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown mr-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="grocery.php">Grocery</a>
                        <a class="dropdown-item" href="medicine.php">Medicine</a>
                        <a class="dropdown-item" href="fitness.php">Fitness Equipments</a>
                        <a class="dropdown-item" href="mask.php">Masks, Gloves and Sanitizers</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a class="nav-link" href="login.php">Login</a>
                <a class="nav-link" href="signup.php">Signup</a>
            </ul>
        </div>
    </nav>