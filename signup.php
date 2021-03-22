<?php
    include 'header1.php';
?>

<div class="container ui main text">

    <form class="ui form mt-5" action="signupdb.php" method="POST">
        <fieldset>

            <h1 class="mt-5 display-4">Sign Up</h1>
            <div class="field">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="field">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="field">
                <input type="text" name="mobile" placeholder="Mobile Number">
            </div>
            <div class="field">
                <textarea name="address" id="" cols="30" rows="4" placeholder="Address"></textarea>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field">
                <button type="submit" name="submit" class="btn btn-outline-danger btn-block">Sign Up</button>
            </div>
            <br>
            <h4>OR</h4>
            <br>
            <a href="https://www.facebook.com/" class="ui circular facebook icon button mr-3">
                <i class="facebook icon"></i>
            </a>
            <button class="ui circular twitter icon button mr-3">
                <i class="twitter icon"></i>
            </button>
            <button class="ui circular linkedin icon button mr-3">
                <i class="linkedin icon"></i>
            </button>
            <button class="ui circular google plus icon button">
                <i class="google plus icon"></i>
            </button>

            <br><br>

            <a href="login.php">Already a user? Login now.</a>

        </fieldset>
    </form>
</div>

<?php
        include 'footer.php';
    ?>