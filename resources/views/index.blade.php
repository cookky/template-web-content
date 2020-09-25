@extends('template')
@section('title', 'Page Title')


@section('content')
<div class="container">
    <div class="txt-header pt-5 pb-5">
        <h1>Suggested Articles</h1>
    </div>

    <div class="row">
        <div class="col-12 col-sm-8">

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-5">
                        <div class="img">
                            <img class="card-img" src="{{ $post->image }}" alt="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-7">
                        <div class="body">
                            <div class="card-body">
                                <h6 class="tag"><a href="{{ route('tag', ['tag' => $post->types->name]) }}">{{ $post->types->name }}</a></h6>
                                <h2 class="card-title"><a href="{{ route('show-blog', ['url' => $post->url]) }}">{{ $post->title }}</a></h2>
                                <p class="card-text">{{ $post->show_detail}}</p>
                                <p class="card-text"><small class="text-muted">Last updated {{ $post->show_date }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-sm-4">
            @if(count($postsRight))
            @foreach($postsRight as $pr)
            <div class="col-12 clear-mobile">
                <div class="sub-card">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="body">
                                <div class="card-body">
                                    <h3 class="card-title"><a href="{{ route('show-blog', ['url' => $pr->url]) }}">{{ $pr->title }}</a></h3>
                                    <p class="card-text"><small class="text-muted">Last updated {{ $pr->show_date }}</small></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>

    </div>

    <div class="row">
        @if(count($posts))
        @foreach($posts as $p)
        <div class="col-12 col-sm-4">

            <div class="card-content">
                <div class="card">
                    <img class="card-img-top" src="{{ $p->image }}" alt="{{ $p->title }}">
                    <div class="card-body">
                        <h6 class="tag"><a href="{{ route('tag', ['tag' => $p->types->name]) }}">{{ $p->types->name }}</a></h6>
                        <h2 class="card-title text-truncate"><a href="{{ route('show-blog', ['url' => $p->url]) }}">{{ $p->title }}</a></h2>
                        <p class="card-text p-height">{{ $p->show_detail }}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated {{ $p->show_date }}</small>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
        <div class="col-12">
            <div class="d-flex justify-content-end pt-3">
                {{ $posts->links() }}
            </div>
        </div>
        @endif

    </div>

    <div class="row">
        <div class="txt-header-blog pt-5 pb-5">
            <h3>บทความทั่วไป</h3>
        </div>
    </div>

    <div class="row">

        @if(count($postAll))
        @foreach($postAll as $pa)
        <div class="col-12 col-sm-4">

            <div class="card-content">
                <div class="card">
                    <div class="card-body">
                        <h6 class="tag"><a href="{{ route('tag', ['tag' => $pa->types->name]) }}">{{ $pa->types->name }}</a></h6>
                        <h2 class="card-title text-truncate"><a href="{{ route('show-blog', ['url' => $pa->url]) }}">{{ $pa->title }}</a></h2>
                        <p class="card-text p-height">{{ $pa->show_detail }}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated {{ $pa->show_date }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="d-flex justify-content-center pt-3">
            {{ $postAll->links() }}
        </div>

        @endif
    </div>

</div>
@endsection