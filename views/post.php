<?php include(__DIR__.'/header.php') ?>
    
    <div class="container">
      <div class="row">
        <main class="col-12 col-lg-8">
            <article>
                <div class="title"><?= $currentPost['title'] ?></div>
                <p><?= $currentPost['text'] ?></p>
                <div class="infos">Posté par <span><?= $currentPost['author_name'] ?></span></div>
                <div class="infos">Publié le <span><?= $currentPost['published_date'] ?></span></div>
                <div class="infos">Catégorie : <span><?= $currentPost['category_name'] ?></span></div>
            </article>
        </main>
        <?php include(__DIR__.'/aside.php'); ?>
      </div>
    </div>
    
<?php include(__DIR__.'/footer.php'); ?>
