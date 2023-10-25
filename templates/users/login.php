<?php include __DIR__ . '/../header.php'; ?>
    <main class="cover error-401 reg-cover">
        <div class="inside-login-main">
            <div class="authorization-form">
            <h2 class="authorization-header">Authorization</h2>

            <hr class="reg-hr">

    <?php if (!empty($error)) : ?>
        
        <div  class="password-error swing animated change-text change-height"><?= $error ?></div>
        <?php endif; ?>
        <form class="needs-validation" action="/www/users/authorization" method="post">
        <div class="reg-form-input">

            
            <label  for="nickname" class="reg-label">Enter Your NickName:
                    <input type="text"  class="reg-input" id="nickname" name="nickname" placeholder="Enter Your NickName" required value="<?= $_POST['nickname'] ?? '' ?>"></label>
                    
                  
                        <label for="password" class="reg-label">Enter Your Password:<span class="text-body-secondary"></span>
                        <input type="password"  class="reg-input" name="password"  placeholder="" required value="<?= $_POST['password'] ?? '' ?>"></label>
                    </div>
                        
                        <hr class="reg-hr">
                  
                
                <div class="">
                    <input class="w-100 btn btn-primary btn-lg" type="submit" value="Sing Up">

            </form>
        </div>
    </div>
    </main>
<?= include __DIR__ . '/../footer.php'; ?>