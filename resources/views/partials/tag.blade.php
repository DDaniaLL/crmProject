<div>
    <a href="{{ route('tags.show', $tag) }}">
        <h4>{{ $tag->name }}</h4>
    </a>
    <p>{{ substr($tag->content, 0, 10) }} ...</p>
    <h6>{{ $tag->created_at }}</h6>
</div>
