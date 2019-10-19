@extends('layouts.app')


@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts">
        @csrf
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit" name="submit" class="btn btn-info">
    </form>

    @if (count($errors)>0)
        <hr>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
@endsection

@section('footer')
    
@endsection