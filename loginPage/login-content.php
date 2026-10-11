<main class="login-shell">
    <section class="login-card" aria-labelledby="login-title">
        <h1 id="login-title">Login</h1>
        <p class="intro">Please enter your details to sign in.</p>

        <form class="login-form" action="#" method="post" novalidate>
            <div class="field">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" autocomplete="username" placeholder="Enter your username" required>
            </div>

            <div class="field">
                <div class="label-row">
                    <label for="password">Password</label>
                    <a href="#">Forgot password?</a>
                </div>
                <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" required>
            </div>

            <label class="remember-me">
                <input type="checkbox" name="remember">
                <span>Remember me</span>
            </label>

            <button type="submit">Sign in</button>
            <p id="loginSuccess" class="success-message" role="status" hidden>Sign-in details look good.</p>
        </form>

        <details class="register-details">
            <summary>Create an account</summary>
            <h2>Create account</h2>
            <form class="register-form" action="#" method="post" novalidate>
                <div class="field">
                    <label for="register-username">Username</label>
                    <input id="register-username" name="register-username" type="text" autocomplete="username" placeholder="Choose a username" required>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="Enter your email" required>
                </div>

                <div class="field">
                    <label for="register-password">Password</label>
                    <input id="register-password" name="register-password" type="password" autocomplete="new-password" placeholder="Create a password" required>
                </div>

                <div class="field">
                    <label for="confirm-password">Confirm password</label>
                    <input id="confirm-password" name="confirm-password" type="password" autocomplete="new-password" placeholder="Repeat your password" required>
                </div>

                <button type="submit">Register</button>
                <p id="registerSuccess" class="success-message" role="status" hidden>Registration details look good.</p>
            </form>
        </details>
    </section>
</main>
