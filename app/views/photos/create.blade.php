{{ Form::open(array('route' => 'photos.store', 'files' => true)) }}

  <p>{{ Form::label('title', 'Title') }}
  {{ Form::text('title') }}</p>

  <p>{{ Form::label('file', 'File') }}
  {{ Form::file('file') }}</p>

  <p>{{ Form::submit('Submit') }}</p>

{{ Form::close() }}