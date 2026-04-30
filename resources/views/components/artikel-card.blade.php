<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
    <h3>{{ $article->title }}</h3>
    <p>{{ \Illuminate\Support\Str::limit($article->content, 100) }}</p>
</div>
