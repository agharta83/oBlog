<aside class="d-none d-lg-block col-lg-4">
    <form action="index.php" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Rechercher..." name="search" value="" aria-label="Rechercher..." aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary">Allez</button>
            </div>
        </div>
    </form>
    
    <div class="card categories my-3">
        <div class="card-header">
            Catégories
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach ($categoriesList as $currentCategory) :?>
                <li class="list-group-item"><a href=""><?= $currentCategory['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <div class="card authors my-3">
        <div class="card-header">
            Auteurs
        </div>
        <ul class="list-group list-group-flush">
            <?php foreach ($authorsList as $currentAuthor) : ?>
            <li class="list-group-item"><a href=""><?= $currentAuthor['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>
