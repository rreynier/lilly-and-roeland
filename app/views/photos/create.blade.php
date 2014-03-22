{{ Form::open(array('route' => 'photos.store')) }}

  <p>{{ Form::label('title', 'Title') }}
  {{ Form::text('title') }}</p>

  <p>{{ Form::label('file_name', 'File') }}
  {{ Form::file('file_name') }}</p>

  <p>{{ Form::submit('Submit') }}</p>

{{ Form::close() }}