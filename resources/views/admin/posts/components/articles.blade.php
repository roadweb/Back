<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @include ('admin.posts.components.articles-off', ['posts_off' => $post_off_user])
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @include ('admin.posts.components.articles-uc', ['posts_uc' => $post_uc_user])
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @include ('admin.posts.components.articles-on', ['posts_on' => $post_on_user])
    </div>

</div>