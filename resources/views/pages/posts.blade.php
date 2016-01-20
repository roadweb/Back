{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('category_id', 'Category_id:') !!}
			{!! Form::text('category_id') !!}
		</li>
		<li>
			{!! Form::label('job_id', 'Job_id:') !!}
			{!! Form::text('job_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('resume', 'Resume:') !!}
			{!! Form::textarea('resume') !!}
		</li>
		<li>
			{!! Form::label('matter', 'Matter:') !!}
			{!! Form::textarea('matter') !!}
		</li>
		<li>
			{!! Form::label('is_sticky', 'Is_sticky:') !!}
			{!! Form::text('is_sticky') !!}
		</li>
		<li>
			{!! Form::label('sticky_end', 'Sticky_end:') !!}
			{!! Form::text('sticky_end') !!}
		</li>
		<li>
			{!! Form::label('published', 'Published:') !!}
			{!! Form::text('published') !!}
		</li>
		<li>
			{!! Form::label('validated', 'Validated:') !!}
			{!! Form::text('validated') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}