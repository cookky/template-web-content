<div>
    <input class="form-control txt-search" type="text" placeholder="ค้นหา บทความ" wire:keydown="searchPost($event.target.value)">
    {{ $search }}
    <div class="list">
        <ul class="list-group">
            @if($posts)
            @foreach($posts as $post)
            <li class="list-group-item"><a href="{{ route('show-blog', ['url' => $post->url]) }}">{{ $post->title }}</a></li>
            @endforeach
            @endif
        </ul>
    </div>
</div>