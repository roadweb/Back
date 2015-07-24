<!-- dev: mathieu -->

<form class="rw-lognews-form" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> {{-- value="{{ csrf_token() }}" --}}

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/connexion.png') }}" alt="login"/>
            </div>            
            <input type="email" name="login" value="identifiant"> <!-- class="form-control" value="{{ old('email') }}" -->
        </div>
    </div>

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/lock.png') }}" alt="password"/>
            </div>
            <input type="password" name="password" value="password"> <!-- class="form-control" -->
        </div>
    </div>

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-remember">
            <label class="rw-lognews-remember rw-font-connect" for="checkbox1">Se rappeler de moi ?</label>
            <input id="checkbox1"
                   type="checkbox"
                   class="checkbox checkbox-success rw-checkbox"
                   name="remember">
        </div>
    </div>

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-btn rw-bg-connect">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/ok.png') }}" alt="ok"/>
            </div>
            
            <button type="submit" class="rw-lognews-btn-send">Se connecter</button>
        </div>
        <div class="rw-lognews-container-forgoten ">
            <a class="rw-lognews-pwd-forgoten rw-font-connect" href="#">Mot de passe oublié ?</a> <!-- {{ url('/admin/password/email') }} -->
        </div>
    </div>
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">
            <a class="rw-lognews-create-accompte rw-font-connect" href="#">Créer un compte</a> <!-- value="{{ old('email') }}" -->
        </div>
    </div>
    
</form>
