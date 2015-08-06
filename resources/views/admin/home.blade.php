@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenue sur Roadweb !</div>

				<div class="panel-body">
					Pour être redirigé vers le site cliquez <a href="{{url('/')}}">ici</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
