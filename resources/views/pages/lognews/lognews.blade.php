<!-- dev: mathieu -->

<div class="rw-lognews-login">
    <div class="rw-login">
        <div class="rw-square">
            <img class="rw-icon-login" src="{{ asset('images/connexion.png')}}" alt="connexion"/>
        </div>
        <div class="rw-lognews-container">
            @include('pages.lognews.form.unlogform')
            @include('pages.lognews.form.logform')
        </div>
    </div>
</div>

<div class="rw-lognews-newsletter">
    <div class="rw-newsletter">
        <div class="rw-square">
            <img class="rw-icon-newsletter" src="{{ asset('images/newsletter.png')}}" alt="Newsletter"/>
        </div>
        <div class="rw-lognews-container">
            @include('pages.lognews.form.newsform')
        </div>
    </div>
</div>