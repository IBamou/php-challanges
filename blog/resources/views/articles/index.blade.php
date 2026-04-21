

@foreach ($articles as $article)
    <h2>{{ $article['title'] }}</h2>
    <p>{{ $article['content'] }}</p>
    <p><strong>Author:</strong> {{ $article['author'] }}</p>
    <p><strong>Published Date:</strong> {{ $article['published_date'] }}</p>
    <hr>
@endforeach
