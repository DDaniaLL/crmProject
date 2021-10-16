<div>
    <a href="{{ route('categories.show', $category) }}">
        <h4>{{ $category->name }}</h4>
    </a>
    <p>{{ substr($category->content, 0, 10) }} ...</p>
    <h6>{{ $category->created_at }}</h6>
</div>
