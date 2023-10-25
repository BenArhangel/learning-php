<?php include __DIR__ . '/../header.php' ?>
<div class="cover">

    <h1 class="header-one">Статьи</h1>
    
    <p class="paragraph">Здесь вы можете увидеть все статьи</p>
    <div class="inside-cover">
        
            <button id="accc"  class="accordion">Открыть все статьи</button>
            <div class="panel">
                
                <?php foreach ($articles as $article): ?>
                    
                        <article class="comment">
                            
                            <div class="article-header">
                                
                                <h2><a  href="/www/articles/<?= $article->getId() ?>"><?= $article->getName() ?></a></h2>
                                
                                
                                <div class="bar-btn">
                                    <div class="string"></div>
                                    <div class="string"></div>
                                    <div class="string"></div>
                                </div>
                                
                                
                                
                                
                            </div>
                        <div class="no-content">
                            
                            <p><?= $article->getShortText() ?></p>
                            <?php if (!empty($user) && $user->isAdmin()){ ?>
                                <a class="edit" href="/www/articles/<?= $article->getId() ?>/edit">Редактировать статью</a>
                                <?php }?>
                            </article>
                            <?php endforeach; ?>
                        </div>
                        </div>

                    
                </div>
          
            <?php include __DIR__ . '/../footer.php' ?>