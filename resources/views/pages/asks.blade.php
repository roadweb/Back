{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('job_id', 'Job_id:') !!}
			{!! Form::text('job_id') !!}
		</li>
		<li>
			{!! Form::label('manager_id', 'Manager_id:') !!}
			{!! Form::text('manager_id') !!}
		</li>
		<li>
			{!! Form::label('state_id', 'State_id:') !!}
			{!! Form::text('state_id') !!}
		</li>
		<li>
			{!! Form::label('askable_id', 'Askable_id:') !!}
			{!! Form::text('askable_id') !!}
		</li>
		<li>
			{!! Form::label('askable_type', 'Askable_type:') !!}
			{!! Form::text('askable_type') !!}
		</li>
		<li>
			{!! Form::label('matter', 'Matter:') !!}
			{!! Form::text('matter') !!}
		</li>
		<li>
			{!! Form::label('likes', 'Likes:') !!}
			{!! Form::text('likes') !!}
		</li>
		<li>
			{!! Form::label('post_id', 'Post_id:') !!}
			{!! Form::text('post_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}