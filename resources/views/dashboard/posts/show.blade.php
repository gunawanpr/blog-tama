@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div>
                    <a href="/dashboard/posts" class="btn btn-sm btn-info text-white"><span data-feather="arrow-left" class="align-text-center"></span> Back to all my posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success"><span data-feather="edit" class="align-text-center"></span> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash" class="align-text-bottom"></span> Delete</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="my-4" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="my-4" src="https://picsum.photos/800/400" alt="{{ $post->category->name }}">
                @endif
                <p>{!! $post->body !!}</p>
            </div>
        </div>
    </main>
@endsection
