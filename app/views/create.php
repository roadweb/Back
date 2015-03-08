<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-pills">
                <li><a href="<?= $app->urlFor('home'); ?>">Home</a></li>
                <li class="active"><a href="#">Create</a></li>
                <li><a href="#">Card</a></li>
            </ul>
        </div>
    </div>

    <div class="col-sm-12">
        <form action="">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Latitude</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Longitude</label>
                        <input type="text" class="form-control"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Liens pour en savoir plus</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Résumé</label>
                <textarea type="text" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
</div>