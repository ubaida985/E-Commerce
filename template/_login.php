<?php
    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['logIn']) ){
        $validationObj->logIn( $_POST['email'], $_POST['password'] );
    }

    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signUp']) ){
        $validationObj->signUp( $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['password'] );
    }

    if( $_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['checkLogs']) ){
        $validationObj->getLogs();
    }
?>
<div id="mainSection">
            <div id="logIn" class="logSign">
                <h1 class="colorSecondary">Login Here</h1>
                <form method="post">
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="Email">
                    <label for="phone">Mobile Number</label>
                    <input name="phone" type="tel" placeholder="Number">
                    <label for="password">Password</label>
                    <input name="password" type="password" placeholder="Password">
                    <button type="submit" class="btn form-control border btn-secondary" name="logIn">LogIn</button>
                </form>
            </div>
            <div id="SignUp" class="logSign">
                <h1 class="colorSecondary">SignUp Here</h1>
                <form method="post">
                    <label for="name">Your Name</label>
                    <input name="name" type="text" placeholder="Name">
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="Email">
                    <label for="phone">Mobile Number</label>
                    <input name="phone" type="tel" placeholder="Number">
                    <label for="password">Password</label>
                    <input name="password" type="password" placeholder="Password">
                    <button type="submit" class="btn form-control border btn-secondary" name="signUp">SignUp</button>
                </form>
            </div>

            <div class="checkLogs">
                <form method="post">
                    <button type="submit" name="checkLogs" >Check Logs</button>
                </form>
            </div>
        </div>