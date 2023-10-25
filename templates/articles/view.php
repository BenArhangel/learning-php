<?php include __DIR__ . '/../header.php'; ?>

<main class="cover error-401 reg-cover continue-cover vw-bottom">
        <div class="inside-login-main continue-inside">
            
        <div class="authorization-form article-form">

    <h1 id="header-change" class="header-one"><?= $article->getName() ?></h1>
    
<div class="article-content">
    <p class="main-text"><?= $article->getText() ?></p>
    <p class="author-name">Автор: <?= $article->getAuthor()->getNickname() ?></p>
    
</div>

    <?php if (!empty($user) && $user->isAdmin()) { ?>
        
        <?php } ?>
        <?php if (!empty($user)) { ?>
            <form action="/www/articles/<?= $article->getId() ?>/comments" method="post">
                <div class="form-floating">
                    <textarea class="form-control area-form" placeholder="Leave a comment here..." name="comments"></textarea>
                </div>
                
                <input class="w-100 btn btn-primary btn-lg" type="submit" value="Отправить">
                <p><a class="link-offset-1" href="/www/articles/<?= $article->getId() ?>
                /edit">Редактировать статью</a></p>
            </form>


<?php } else { ?>
    <div class="notice-message">
        <p>Для добавления комментариев, пожалуйста,
            <a class="notice-anchor" href="/www/users/authorization">авторизуйтесь</a> или
            <a class="notice-anchor" href="/www/users/register">зарегистрируйтесь</a></p>

    </div>
        
<?php } ?>

</div>
<?php if (!empty($comments)) { ?>
    <div  class="comments-container">
        <h3 class="header-one header-left" >Комментарии</h3>
        <?php foreach ($comments as $comment) {
            ?>
        <div id="comment<?php echo $comment->getId() ?>" class="media d-block d-md-flex mt-1 font09">
            <div class="user-comment-form">
                    <div class="user-name-pic">

                        <img class="user-pic" src="/src/img/<?php echo $comment->getAuthor()->getImgName();?>" width="50" height="50" alt="">
                        <a class="user-name" href=""><?php echo $comment->getAuthor()->getNickname() ?></a>
                        <span class="dot"> · </span>
                        <span class="user-date"><?php echo $comment->getCreatedAt() ?></span>
                    </div>
                
                <div class="user-comment" id="Comment<?php echo $comment->getId() ?>Text"><p><?php echo $comment->getComments() ?></p></div>
                <?php if ((!empty($user)) && ($user->getNickname() === $comment->getAuthor()->getNickname() || $user->isAdmin())){?>
                    <p><a class="link-offset-1" href="/www/comments/<?php echo $comment->getId() ?>/edit">Редактировать комментарий</a></p>
                    <?php } ?>
                </div>
            </div>
            
            
    
            
            
            <?php } ?>
            <?php } ?>
    </div>
        </main>
        <?php include __DIR__ . '/../footer.php'; ?>
    </div>
</div>
</div>