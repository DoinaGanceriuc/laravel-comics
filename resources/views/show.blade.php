@extends('layouts.app')

@section('page-title', 'comic page')

@section('content')

   <div class="container">
        <div class="thumbs row">
            <div class="thumb col-2">
        <img src="{{ $album['thumb'] }}" alt="{{ $album['title'] }}">
         <h5> {{ strtoupper($album['series']) }} </h5>
        </div>
    </div>
    <!-- /.thumbs -->
   </div>



@endsection
