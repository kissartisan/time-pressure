@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @method('PATCH')
    @include('posts.form', [
        'buttonText' => 'Update Post'
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
