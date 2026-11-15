<h1>Posts List</h1>

@foreach ($posts as $post)
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>

@endforeach
