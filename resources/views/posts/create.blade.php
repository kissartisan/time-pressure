@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @include('posts.form', [
        'post' => new App\Post,
        'buttonText' => 'Create Project'
    ])
</form>

@if($errors->any())
<div class="field mt-6">
    @foreach ($errors->all() as $error)
    <li class="text-sm text-red">{{ $error }}</li>
    @endforeach
</div>
@endif

@endsection
