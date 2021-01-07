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
        <div class="load">
            <a href="#">
                <h3 class="uppercase">Load More</h3>

            </a>
        </div>
    </div>
</section>

<section id="merch">
    <div class="container">
        <ul>
            <li>
                <a href="#">
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                    <div class="uppercase">digital comics</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                    <div class="uppercase">digital merchandise</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                    <div class="uppercase">subscription</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                    <div class="uppercase">comic shop locator</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                    <div class="uppercase">dc power visa</div>
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection

@section('page-title', 'Homepage - Laravel DC Comics')
