<!-- dev: mathieu -->

<form class="rw-logform" role="form" method="POST" action="#">  <!-- action="{{ url('/admin/auth/login') }}" -->
    <input type="hidden" name="_token" value="#"> <!-- value="{{ csrf_token() }}" -->

    <div class="form-group">
        <label class="col-md-4 control-label">Login/Email</label>

        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="#"> <!-- value="{{ old('email') }}" -->
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Mot de passe</label>

        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox checkbox-success">
                <input id="checkbox1"
                       type="checkbox"
                       class="checkbox checkbox-success"
                       name="remember">
                <label for="checkbox1">
                    Se rappeler de moi ?
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Se connecter</button>

            <a class="btn btn-link" href="#">Mot de passe oublié ?</a> <!-- {{ url('/admin/password/email') }} -->
        </div>
    </div>
</form>