<?php include(__DIR__.'/header.php') ?>
    
    <div class="container">
      <div class="row">
        <main class="col-12 col-lg-8">
            <?php foreach ($postsList as $currentPost) : ?>
                <article>
                    <a class="title" href="post.php?id=<?= $currentPost['id'] ?>"><?= $currentPost['title'] ?></a>
                    <p><?= $currentPost['short_text'] ?></p>
                    <div class="infos">Posté par <span><?= $currentPost['author_name'] ?></span> le <?= $currentPost['dateFormate'] ?> dans <span>#<?= str_replace(' ', '', ucwords($currentPost['category_name'])) ?></span>.</div>
                </article>
            <?php endforeach; ?>
        </main>
        <?php include(__DIR__.'/aside.php'); ?>
      </div>
    </div>
    
<?php include(__DIR__.'/footer.php'); ?>
