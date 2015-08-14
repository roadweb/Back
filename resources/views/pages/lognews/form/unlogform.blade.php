<!-- dev: mathieu -->

<div class="rw-lognews-form">

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">
            <h1 class="rw-welcome">
                Bienvenue
                @if(Auth::check())
                    <p class="rw-subscriber">{{Auth::user()->username}}</p>
                @endif

            </h1>
        </div>
    </div>    
    
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">  
            <a class="rw-lognews-myaccompt" href="{{ url('/compte') }}">
                <i class="fa fa-hand-o-right"></i>
                Mon compte
            </a>
        </div>
        @if(Auth::user()->right_id >= 2)
            <div class="rw-lognews-container">
                <a class="rw-lognews-myaccompt" href="{{ url('/admin') }}">
                    <i class="fa fa-hand-o-right"></i>
                    Accès back office
                </a>
            </div>
        @endif
    </div>

    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-btn rw-bg-disconnect">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/ok.png') }}" alt="ok"/>
            </div>
            <a href="{{ URL::to('/auth/logout') }}"><button type="submit">Se déconnecter</button></a>
        </div>
    </div>
    
</div>