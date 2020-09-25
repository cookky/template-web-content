@extends('template')
@section('title', 'Page Title')

@section('css')
<style>
    .card-body img {
        width: 100%;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="first-top"></div>
    <div class="row">
        <div class="col-12 col-sm-7">
            <div>
                <h6 class="tag"><a href="{{ route('tag', ['tag' => $post->types->name]) }}">{{ $post->types->name }}</a></h6>
                <h1>{{ $post->title }}</h1>
            </div>

            <p class="update-text">
                <small class="text-muted">Last updated {{ $post->show_date }}</small>
            </p>
        </div>

        <div class="col-12 col-sm-5">
            <div class="head-img">
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">

            <div class="txt-content">
                <div class="card-body">
                    {!! $post->content !!}

                    <hr>
                    <div class="footer-tag">
                        <div class="tag-list">
                            <h5>Tags:</h5>
                            @if(count($types))
                            @foreach($types as $type)
                            <h6 class="tag"><a href="{{ route('tag', ['tag' => $type->name]) }}">{{ $type->name }}</a></h6>
                            @endforeach
                            @endif
                        </div>

                        <div class="share">
                            <h5>Share:</h5>

                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="txt-header-blog pt-5 pb-5">
            <h3>บทความทั่วไป</h3>
        </div>
    </div>

    <div class="row">
        @if(count($posts))
        @foreach($posts as $p)
        <div class="col-12 col-sm-4">

            <div class="card-content mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{ $p->image}}" alt="{{ $p->title }}">
                    <div class="card-body">
                        <h6 class="tag"><a href="{{ route('tag', ['tag' => $p->types->name]) }}">{{  $p->types->name }}</a></h6>
                        <h2 class="card-title"><a href="{{ route('show-blog', ['url' => $p->url]) }}">{{ $p->title }}</a></h2>
                        <p class="card-text p-height">{{ $p->show_detail }}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated {{ $p->show_date }}</small>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
        @endif
    </div>

</div>
@endsection