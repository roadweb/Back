{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('job_id', 'Job_id:') !!}
			{!! Form::text('job_id') !!}
		</li>
		<li>
			{!! Form::label('right_id', 'Right_id:') !!}
			{!! Form::text('right_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('ip', 'Ip:') !!}
			{!! Form::text('ip') !!}
		</li>
		<li>
			{!! Form::label('training_id', 'Training_id:') !!}
			{!! Form::text('training_id') !!}
		</li>
		<li>
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username') !!}
		</li>
		<li>
			{!! Form::label('firstname', 'Firstname:') !!}
			{!! Form::text('firstname') !!}
		</li>
		<li>
			{!! Form::label('lastname', 'Lastname:') !!}
			{!! Form::text('lastname') !!}
		</li>
		<li>
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('birthday', 'Birthday:') !!}
			{!! Form::text('birthday') !!}
		</li>
		<li>
			{!! Form::label('avatar', 'Avatar:') !!}
			{!! Form::text('avatar') !!}
		</li>
		<li>
			{!! Form::label('visibility', 'Visibility:') !!}
			{!! Form::text('visibility') !!}
		</li>
		<li>
			{!! Form::label('bio', 'Bio:') !!}
			{!! Form::textarea('bio') !!}
		</li>
		<li>
			{!! Form::label('asso', 'Asso:') !!}
			{!! Form::text('asso') !!}
		</li>
		<li>
			{!! Form::label('website', 'Website:') !!}
			{!! Form::text('website') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}