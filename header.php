<?php

    use classes\{Config, Common, Token, Validation, Database, Redirect, Session};
    use models\User;

?>


<header>
    <div>
        <h2>Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php if(Session::exists('Register_success')) { echo Session::flash('Register_success'); } ?>
            <div>
                <label for="email-or-username">Username</label>
                <input type="text" name="email-or-username" value="<?php echo htmlspecialchars(Common::getInput($_POST, "email-or-username")); ?>" placeholder="Username or Email" autocomplete="off">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" autocomplete="off">
            </div>
            <div>
                <input type="checkbox" name="rememberme">
                <label for="rememberme">Remember me</label>
            </div>
            <div>
                <input type="hidden" name="token_log" value="<?php echo Token::generate("login"); ?>">
                <input type="submit" name="login" value="login">
            </div>
        </form>
    </div>
</header>