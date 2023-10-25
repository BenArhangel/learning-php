<?php include __DIR__ . '/../header.php'; ?>
<main class="cover error-401 reg-cover continue-cover vw-minus">

<div class="inside-cover no-overflow">
<div class="authorization-form ">

<?php if(empty($user->getImgName())){ ?>
    <div class="col-auto d-none d-lg-block customize-image">

        <img class="bd-placeholder-img">
    </div>
    <form  enctype="multipart/form-data" action="/www/users/account" method="post" >
    Выберите файл для загрузки вашего фото фотографии:
        <input  type="file" name="userfile">
        <input  type="submit" value="Загрузить">
    </form>
    <hr>
<?php }else{ ?>

    <img onclick="openPhoto()" class="bd-placeholder-img" src="/src/img/<?php echo $user->getImgName(); ?>" width="200" height="250">

    <form class="customize-text-photo " enctype="multipart/form-data" action="/www/users/account" method="post" >
       <p class="customize-text"> Выберите файл для загрузки вашей фотографии:</p>
        <input class="choose-img" type="file" name="userfile" >
        <input class="download-img login" type="submit" value="Загрузить">
    </form>
</div>
</div>
</main>
    <?php }?>
    <?= include __DIR__ . '/../footer.php' ?>