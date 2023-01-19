@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Posts</h1>
        </div>
      <div class="table-responsive col-lg-10">
        @if (session()->has('success'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none"><span data-feather="eye" class="align-text-bottom"></span> Show</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-success text-decoration-none"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger text-decoration-none border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash" class="align-text-bottom"></span> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
@endsection
