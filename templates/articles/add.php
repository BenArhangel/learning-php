<?php include __DIR__ . '/../header.php'; ?>
<main class="cover">
    <h1 class="header-one">Cоздание новой статьи</h1>
<div class="inside-cover redact-article">  
<div class="authorization-form article-form">
       
        <?php if (!empty($error)) : ?>
            <div style="background-color: red;padding: 5px;margin: 15px"><?= $error ?></div>
        <?php endif; ?>
        <form class="needs-validation" action="/www/articles/create" method="post">
            <div class="row g-3">
                <div class="col-sm-6">
                    <input type="text" class="form-control article-create-name" id="name" name="name" placeholder="Название статьи..." required value="<?= $_POST['name'] ?? '' ?>">
                </div>

                <div class="col-12">
                 <!-- <span class="text-body-secondary"></span> -->
                    <textarea type="text" class="form-control  article-create-text " name="text"  placeholder="Текст статьи..." required value="<?= $_POST['text'] ?? '' ?>"></textarea>
                </div>


                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Create">
        </form>
</div>
</div>
    </main>
<?php include __DIR__ . '/../footer.php'; ?>