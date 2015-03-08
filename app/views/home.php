<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-pills">
                <li class="active"><a href="<?= $app->urlFor('home'); ?>">Home</a></li>
                <li><a href="<?= $app->urlFor('create'); ?>">Create</a></li>
                <li><a href="#">Card</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <?php foreach ($wars as $value) : ?>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $value['title']; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?= $value['content']; ?>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-default" href="">Editer</a>
                        <a class="btn btn-danger" href="">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>