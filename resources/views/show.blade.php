@extends('layouts.app')

@section('page-title', 'comic page')

@section('content')

<div class="bgblue">
    <div class="container">
         <div class="thumb">
            <div class="album">
                <img src="{{ $album['thumb'] }}" alt="{{ $album['title'] }}">
                <p class="type_album">{{ $album['type'] }}</p>
                <small class="view_gallery">
                    <a href="#">view gallery</a>
                </small>
            </div>
            <!-- /.album -->
        </div>
           <!-- /.thumb -->
    </div>
    <!-- /.container -->
</div>
<!-- /.bgblue -->

<div class="single_album container">
   <div class="row d_flex">
       <div class="col-75">
            <h2> {{ strtoupper($album['title']) }} </h2>
            <div class="single_album_info">
                <div class="avaiable col-75">
                    <p>U.S. Price: <span>{{ $album['price'] }}</span></p>
                    <p>AVAIABLE</p>
                </div>
                <!-- /.avaiable -->
                <div class="check col-25 t_center">
                    <p>Check Availability</p>
                </div>
                 <!-- /.check -->
            </div>
            <!-- /.single_album_info -->
            <div class="description">
                <p>{{ $album['description'] }} </p>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.col-75 -->
        <div class="col-25 rewards">
            <p>ADVERTISEMENT</p>
            <img src="{{asset('img/unleash.jpg')}}" alt="Superman">
        </div>
        <!-- /.col-25 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.single_album container -->
<div class="specifications">
    <div class="container">
        <div class="row">
            <div class="col-50 talent">
            <h3>Talent</h3>
            <div class="artists">
                <div class="col-25">
                    <p>Art by:</p>
                </div>
                <!-- /.col-25 -->
                <div class="col-75">
                    <p> @foreach($album['artists'] as $artist)
                    {{$artist}},
                    @endforeach
                    </p>
                </div>
                <!-- /.col-75 -->
            </div>
            <!-- /.artists -->
            <div class="writters">
                <div class="col-25">
                    <p>Written by:</p>
                </div>
                <!-- /.col-25 -->
               <div class="col-75">
                    <p> @foreach($album['writers'] as $writer)
                    {{$writer}},
                    @endforeach

                    </p>
               </div>
               <!-- /.col-75 -->
            </div>
            <!-- /.writers -->
        </div>
        <!-- /.col-50 -->
        <div class="col-50 specs">
            <h3>Specs</h3>
            <div class="info_specs">
                <div class="col-25">
                    <p>Series:</p>
                </div>
                <!-- /.col-25 -->
                <div class="col-75">
                    <p class="series">{{ strtoupper($album['series']) }}</p>
                </div>
                <!-- /.col-75 -->
            </div>
            <!-- /.info_specs -->
             <div class="info_specs">
                <div class="col-25">
                    <p>U.S. Price:</p>
                </div>
                <!-- /.col-25 -->
                <div class="col-75">
                    <p>{{ $album['price'] }}</p>
                </div>
                <!-- /.col-75 -->
            </div>
            <!-- /.info_specs -->
            <div class="info_specs date">
                <div class="col-25">
                    <p>On Sale Date:</p>
                </div>
                <!-- /.col-25 -->
                <div class="col-75">
                    <p>{{ $album['sale_date'] }}</p>
                </div>
                <!-- /.col-75 -->
            </div>
            <!-- /.info_specs -->
        </div>
        <!-- /.col-50 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</div>
<!-- /.specifications -->



@endsection
