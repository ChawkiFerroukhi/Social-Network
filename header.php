<header>
    <div>
    <h2>LOGIN</h2>
    <?php // Route when logo clicked to index to be added using : Config::get("path"); ?>
    </div>
    <div>
        <label for="email-or-username">Email or Username</label>
        <input type="text" form="login-form" placeholder="Email">
        <div>
            <input type="checkbox" id="keep-me-connected" form="login-form" checked>
            <label for="keep-me-connected">Remember me</label>
        </div>
    </div>
    <div>
        <label for="email-or-phone">Password</label>
        <input type="password" form="login-form" placeholder="Password">
        <a href="">Forgotten your passowrd?</a>
    </div>
    <form>
        <input type="submit" value="Login">
    </form>
</header>