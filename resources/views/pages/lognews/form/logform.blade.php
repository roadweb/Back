<form class="rw-logform" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> <!-- value="{{ csrf_token() }}" -->

    <div class="rw-logform-login">
        <label class="rw-logform-login-label">Login/Email</label>

        <div class="rw-logform-login-input">
            <input type="email" class="form-control" name="email" value="#"> <!-- value="{{ old('email') }}" -->
        </div>
    </div>

    <div class="rw-logform-send">
        <div class="rw-logform-send-container">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
</form>