@extends("layouts.main")

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                @if ($post->image)
                    <div class="my-4" style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                    </div>
                @else
                    <img src="https://picsum.photos/800/400" class="my-4" alt="$post->title">
                @endif
                <p>Oleh <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{  $post->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                <p>{!! $post->body !!}</p>
                <a class="text-decoration-none" href="/blog">Back to Blog</a>
            </div>
        </div>
    </div>
    
@endsection