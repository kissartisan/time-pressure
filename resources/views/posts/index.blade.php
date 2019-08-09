@extends('layouts.app')

@section('content')
    <div style="display:flex; justify-content: space-between;align-items:center;margin-bottom: 1rem;">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    </div>

    <table class="table table-hover">
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    <a href="{{ route('posts.destroy', $post) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
