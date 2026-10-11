<main class="register-page">
    <section class="register-visual" aria-label="Welcome to the Soul Society">
      <a class="brand" href="../landingPage/index.html">BLEACH<span>.</span></a>
      <div class="visual-copy">
        <p class="eyebrow">Your story starts here</p>
        <h1>Cross the<br><em>boundary.</em></h1>
        <p>Join a world where every soul has a purpose and every battle changes what comes next.</p>
      </div>
      <p class="visual-caption">SOUL REAPER ARCHIVES / 001</p>
    </section>

    <section class="register-panel" aria-labelledby="register-title">
      <div class="form-heading">
        <a class="back-link" href="../landingPage/index.html"><span aria-hidden="true">&#8592;</span> Back home</a>
        <p class="eyebrow">Create your account</p>
        <h2 id="register-title">Join the squad.</h2>
        <p class="intro">Build your profile and begin your journey beyond the ordinary.</p>
      </div>

      <form id="registerForm" class="register-form" action="#" method="post" novalidate>
        <div class="field">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" autocomplete="username" placeholder="Choose a username">
        </div>

        <div class="field">
          <label for="email">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com">
        </div>

        <div class="field-row">
          <div class="field">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" autocomplete="new-password" placeholder="At least 8 characters">
          </div>
          <div class="field">
            <label for="confirmPassword">Confirm password</label>
            <input id="confirmPassword" name="confirmPassword" type="password" autocomplete="new-password" placeholder="Repeat password">
          </div>
        </div>

        <label class="terms-field" for="terms">
          <input id="terms" name="terms" type="checkbox">
          <span>I agree to the <a href="#terms">terms of service</a> and privacy policy.</span>
        </label>

        <button class="submit-button" type="submit">Create account <span aria-hidden="true">&#8594;</span></button>
        <p id="successMessage" class="success-message" role="status" hidden>Account details look good. Welcome to the squad.</p>
      </form>

      <p class="sign-in-prompt">Already have an account? <a href="../loginPage/index.html">Sign in</a></p>
    </section>
</main>
