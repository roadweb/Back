{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('socialnetwork_id', 'Socialnetwork_id:') !!}
			{!! Form::text('socialnetwork_id') !!}
		</li>
		<li>
			{!! Form::label('url', 'Url:') !!}
			{!! Form::text('url') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}