                          <?php include __DIR__ . '/../header.php'; ?>
    <main class="cover error-401 reg-cover">
    <div class="inside-login-main">
    <div class="authorization-form reg-form">
        <h2 class="authorization-header">Registration</h2>
        <hr class="reg-hr">
        <?php if (!empty($error)) : ?>
            <div class="password-error swing animated change-text change-height fitted"><?= $error ?></div>
        <?php endif; ?>
        <form class="needs-validation" action="/www/users/register" method="post">
        <div class="reg-form-input">
                    <label class="reg-label" for="nickname">Enter Your NickName:</label>
                    <input class="reg-input no-mrgn" type="text"  id="nickname" name="nickname" placeholder="Enter Your NickName" required value="<?= $_POST['nickname'] ?? '' ?>">
              

          
                    <label class="reg-label" for="email">Enter Your Email: <span class="text-body-secondary"></span></label>
                    <input class="reg-input no-mrgn" type="email" name="email" placeholder="Enter Your Email"  required value="<?= $_POST['email'] ?? '' ?>">
       

          
                    <label class="reg-label" for="password">Enter Your Password:<span class="text-body-secondary"></span></label>
                    <input class="reg-input no-mrgn" type="password"  name="password"  placeholder="" required value="<?= $_POST['password'] ?? '' ?>">
          

                </div>
                <hr class="reg-hr">
                <div class="btn-output">
                    <input id="register-success" class="w-100 btn btn-primary btn-lg " type="submit" value="Register">

                </div>
        </form>
        </div>
    </div>
    </main>
    
<?= include __DIR__ . '/../footer.php'; ?>