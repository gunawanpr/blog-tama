
@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="card-img-top" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}">
                </div>
            @else
                <img src="https://picsum.photos/1200/400" class="card-img-top" alt="$posts[0]->title">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p class="card-text"><small class="text-muted">Oleh <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{  $posts[0]->author->name }}</a>  in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> - {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/blog/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>
        
        <div class="container">
            <div class="row align-item-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.7)">
                                <a class="text-light fs-6 text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <div style="max-height: 350px; overflow:hidden;">
                                    <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                </div>
                            @else
                                <img src="https://picsum.photos/500/400" class="card-img-top" alt="$post->title">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <p class="card-text m-0"><small class="text-muted">Oleh <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{  $post->author->name }}</a> </small></p>
                                <p class="m-0"><small>{{ $post->created_at->diffForHumans() }}</small></p>
                                <p class="card-text pt-3">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection