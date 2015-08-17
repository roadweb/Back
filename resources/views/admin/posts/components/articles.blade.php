<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @if(Auth::user()->right_id >= '3')
            @include ('admin.posts.components.articles-off', ['posts_off' => $posts_off])
        @elseif(Auth::user()->right_id == '2')
            @include ('admin.posts.components.articles-off', ['posts_off' => $post_off_user])
        @endif

    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @if(Auth::user()->right_id >= '3')
            @include ('admin.posts.components.articles-uc', ['posts_uc' => $posts_uc])
        @elseif(Auth::user()->right_id == '2')
            @include ('admin.posts.components.articles-uc', ['posts_uc' => $post_uc_user])
        @endif
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        @if(Auth::user()->right_id >= '3')
            @include ('admin.posts.components.articles-on', ['posts_on' => $posts_on])
        @elseif(Auth::user()->right_id == '2')
            @include ('admin.posts.components.articles-on', ['posts_on' => $post_on_user])
        @endif
    </div>

</div>