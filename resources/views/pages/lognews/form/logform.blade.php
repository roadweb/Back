<!-- dev: mathieu -->

<form class="rw-lognews-form" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> {{-- value="{{ csrf_token() }}" --}}

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/connexion.png') }}" alt="login"/>
            </div>            
            <input type="email" name="login" value="identifiant"> <!-- class="form-control" value="{{ old('email') }}" -->
        </div>
    </div>

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/lock.png') }}" alt="password"/>
            </div>
            <input type="password" name="password" value="password"> <!-- class="form-control" -->
        </div>
    </div>

    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container rw-justify-content-end">
            <label class="rw-lognews-remember" for="checkbox1">Se rappeler de moi ?</label>
            <input id="rw-checkbox1"
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
            
            <button type="submit">Se connecter</button>
        </div>
        <div class="rw-lognews-container">
            <a class="rw-lognews-pwd-forgoten" href="#">Mot de passe oublié ?</a> <!-- {{ url('/admin/password/email') }} -->
        </div>
    </div>
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container">
            <a class="rw-lognews-create-accompte" href="#">Créer un compte</a> <!-- value="{{ old('email') }}" -->
        </div>
    </div>
    
</form>
