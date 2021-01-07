@extends('layouts.app')

@section('content')
<section id="series">
    <div class="container">
        <div class="comic-cont">
            @foreach ($series as $item)
                <div class="comic">
                    <div class="comic-img">
                        <img src="{{$item['thumb']}}" alt="{{$item['series']}}">
                    </div>
                    <div class="comic-name">
                        <p>{{$item['series']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
@endsection
