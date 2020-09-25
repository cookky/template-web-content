@extends('template')
@section('title', 'Page Title')


@section('content')

<div class="container">
    <div class="row">
        <div class="txt-header-blog pt-5 pb-5">
            <h3>บทความทั้งหมด</h3>
        </div>
    </div>

    <div class="row">

        @if(count($posts))
        @foreach($posts as $post)
        <div class="col-12 col-sm-4">

            <div class="card-content">
                <div class="card">
                    <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h6 class="tag"><a href="{{ route('tag', ['tag' => $post->types->name]) }}">{{ $post->types->name }}</a></h6>
                        <h2 class="card-title"><a href="{{ route('show-blog', ['url' => $post->url]) }}">{{ $post->title }}</a></h2>
                        <p class="card-text p-height">{{ $post->show_detail }}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated {{ $post->show_date }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{ $posts->links() }}

        @endif
    </div>
</div>
@endsection