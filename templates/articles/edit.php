<?php include __DIR__ . '/../header.php'; ?>
<main class="cover">
    <h1 class="header-one">Редактор статьи</h1>
<div class="inside-cover redact-article">  
    <div class="authorization-form article-form">

        <?php if (!empty($error)) : ?>
            <div style="font-size: 21px; width:300px; margin:0px auto" class="password-error swing animated change-text change-height"><?= $error ?></div>
            <?php endif; ?>
            <form class="needs-validation" action="/www/articles/<?= $article->getId()?>/edit" method="post">
                <div class="row g-3">
                    <div class="col-sm-6 article-name">
                     
                        <input type="text" class="form-control article-name" id="name" name="name" placeholder="Название статьи" value="<?= $_POST['name'] ?? $article->getName() ?>">
                    </div>
                    
                    <div class="col-12">
                            <input type="text" class="form-control article-text " name="text"  placeholder="" value="<?= $_POST['text'] ?? $article->getText() ?>">
                    </div>

                    
                    <input id="" class="w-100 btn btn-primary btn-lg" type="submit" value="Edit">
                </form>
            </div>   
            </div>
        </main>
        <?php include __DIR__ . '/../footer.php'; ?>