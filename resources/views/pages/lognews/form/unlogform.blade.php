<!-- dev: mathieu -->

<form class="rw-lognews-form" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> <!-- value="{{ csrf_token() }}" -->

    
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">
            <h1 class="rw-welcome">
                Bienvenue
                <p class="rw-subscriber">$abonné(e)</p>
            </h1>
        </div>
    </div>    
    
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">  
            <a class="rw-lognews-myaccompt" href="#">Mon compte</a> 
        </div>
    </div>  

    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-btn rw-bg-disconnect">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/ok.png') }}" alt="ok"/>
            </div>
            <button type="submit">Se déconnecter</button>
        </div>
    </div>
    
</form>