{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('post_id', 'Post_id:') !!}
			{!! Form::text('post_id') !!}
		</li>
		<li>
			{!! Form::label('url_thumb', 'Url_thumb:') !!}
			{!! Form::text('url_thumb') !!}
		</li>
		<li>
			{!! Form::label('alt_thumb', 'Alt_thumb:') !!}
			{!! Form::textarea('alt_thumb') !!}
		</li>
		<li>
			{!! Form::label('title_thumb', 'Title_thumb:') !!}
			{!! Form::text('title_thumb') !!}
		</li>
		<li>
			{!! Form::label('head_title', 'Head_title:') !!}
			{!! Form::text('head_title') !!}
		</li>
		<li>
			{!! Form::label('head_description', 'Head_description:') !!}
			{!! Form::text('head_description') !!}
		</li>
		<li>
			{!! Form::label('head_keywords', 'Head_keywords:') !!}
			{!! Form::textarea('head_keywords') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}