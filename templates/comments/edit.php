<?php include __DIR__ . '/../header.php'; ?>
<main class="cover">
    <h1 class="header-one">Редактор комментария</h1>
<div class="inside-cover redact-article">  
    <div class="authorization-form article-form">
<?php if (!empty($error)) : ?>
    <div style="background-color: red;padding: 5px;margin: 15px"><?= $error ?></div>
<?php endif; ?>
<form action="/www/comments/<?= $comments->getId() ?>/edit" method="post">
        <div class="form-floating">
            <textarea class="form-control  article-create-text " placeholder="Leave a comment here" name="comments"
                      style="height: 100px"><?= $comments->getComments()?></textarea>
        </div>
        <input class="w-100 btn btn-primary btn-lg" type="submit" value="Отправить">
</form>
    </div>
</div>
</main>
<?php include __DIR__ . '/../footer.php'; ?>