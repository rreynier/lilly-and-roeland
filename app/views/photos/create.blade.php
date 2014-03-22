{{ Form::open(array('route' => 'photos.store', 'files' => true)) }}

  <p>{{ Form::label('title', 'Title') }}
  {{ Form::text('title') }}</p>

  <p>{{ Form::label('taken_on', 'Date of Event') }}
  {{ Form::input('date', 'taken_on', null) }}</p>

  <p>{{ Form::label('description', 'Description') }}
  {{ Form::textarea('description') }}</p>

  <p>{{ Form::label('file', 'File') }}
  {{ Form::file('file') }}</p>

  <p>{{ Form::submit('Submit') }}</p>

{{ Form::close() }}