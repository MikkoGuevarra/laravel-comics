@extends('layouts.app')

@section('content')
    @include('partials.jumbo')
<section id="series">
    <div class="container">
        <div class="section-title">
            <h2 class="uppercase">Current Series</h2>
        </div>
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

@section('page-title', 'Homepage - Laravel DC Comics')
