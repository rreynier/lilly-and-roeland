@extends('layouts.front')

@section('content')
  @if (count($photos) > 0)
    <ul>
      @foreach ($photos as $photo)
        <li>{{ $photo->title }}</li>
      @endforeach
    </ul>
  @else
    <p>No photos have been added, lets go!</p>
  @endif
@stop