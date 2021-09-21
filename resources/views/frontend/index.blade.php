@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tn-center mb-5">
                    <div class="row tn-slider">
                        @foreach ($posts as $item)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{asset('upload/'.$item->thumbnail)}}" />
                                    <div class="tn-title">
                                        <a href="{{url($item->slug.'/'.$item->id.'.html')}}">{{$item->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-md-6 tn-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/news-350x223-1.jpg" />
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/news-350x223-2.jpg" />
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/news-350x223-3.jpg" />
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="img/news-350x223-4.jpg" />
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Top News End-->

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($posts as $item)
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{asset('upload/'.$item->thumbnail)}}" />
                                    <div class="mn-title">
                                        <a href="{{url($item->slug.'/'.$item->id.'.html')}}">{{$item->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Read More</h2>
                        <ul>
                            @foreach ($posts as $item)
                            <li><a href="{{url($item->slug.'/'.$item->id.'.html')}}">{{$item->slug}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
