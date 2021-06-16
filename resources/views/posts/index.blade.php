@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th class="btn btn-default">
                                <a href="{{ route('posts.create') }}" >+(New)</a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->author->name }}</td>
                                <td>
                                    <ul class="list-unstyled">
                                        <li>
                                            @can('update', $post)
                                                <a class="btn btn-outline-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                            @endcan
                                        </li>
                                        <li>
                                            @can('delete', $post)
                                                <form action= "{{ route('posts.destroy', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            @endcan
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
