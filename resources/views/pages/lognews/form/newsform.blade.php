<!-- dev: mathieu -->
    
<form class="rw-lognews-form" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-header">
            <span class="rw-lognews-sub">Recevoir la newsletter</span>
        </div>
    </div>
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-row">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/arobaz.png') }}" alt="newsletter">
            </div>
            <input type="email" name="newsletter" value="e-mail"> <!--  class="form-control"  value="{{ old('email') }}" -->
        </div>
        
    </div>
    
    <div class="rw-lognews-form-group">
        <div class="rw-lognews-container-btn rw-bg-connect">
            <div class="rw-lognews-icon">
                <img src="{{ asset('images/icons-manquantes/ok.png') }}" alt="ok"/>
            </div>
            <button type="submit" class="rw-lognews-btn-send">Enregistrer</button>
        </div>
    </div>
    
</form>