@extends('layouts.app')

@section('content')
    @include('partials.jumbo')
    <section class="thumb-cont">
        <div class="small-container">
            <img src="{{$comic['thumb']}}" alt={{$comic['title']}}"">

        </div>

    </section>
    <section>
        <div class="small-container">
            <h1>{{$comic['title']}}</h1>
            <p>{{$comic['description']}}</p>
        </div>
    </section>
@endsection

@section('page-title', 'Comic - Laravel DC Comics')
