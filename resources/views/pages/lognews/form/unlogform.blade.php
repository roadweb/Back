<!-- dev: mathieu -->

<form class="rw-lognews-form" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> <!-- value="{{ csrf_token() }}" -->

    
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-header">
            <span class="rw-lognews-sub rw-welcome">Bienvenue </span>
            <span class="rw-lognews-sub rw-subscriber">$abonné</span>
        </div>
    </div>    
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">  
            <div class="rw-lognews-container-row">
                <a class="rw-lognews-myaccompt rw-font-disconnect" href="#">Mon compte</a> 
            </div>
        </div>
    </div>  

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-btn rw-bg-disconnect">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/ok.png') }}" alt="ok"/>
            </div>
            
            <button type="submit" class="rw-lognews-btn-send">Se déconnecter</button>
        </div>
    </div>
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">
            <a class="rw-lognews-create-accompte rw-font-disconnect" href="#">Créer un compte</a> <!-- value="{{ old('email') }}" -->
        </div>
    </div>
    
</form>
