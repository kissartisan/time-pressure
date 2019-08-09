@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

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
