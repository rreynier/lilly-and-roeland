@extends('layouts.front')

@section('content')

  {{ link_to_route('photos.create', 'add photo') }}

  @if (count($photos) > 0)
    <ul>
      @foreach ($photos as $photo)
        <li>
          {{ $photo->title }}
          <img src="{{ asset($photo->file_name) }}" />
        </li>
      @endforeach
    </ul>
  @else
    <p>No photos have been added, lets go!</p>
  @endif
@stop