@extends('layouts.app')


@section('content')
    <ul>
        @foreach ($posts as $post)

            <li><a href="{{ route('posts.show',$post->id) }}" >{{ $post->title }}</a>
                <div class="image-container">
                    <img src="{{ $post->path }}" alt="" width="50%">
                </div>
            </li>   
        @endforeach
    </ul>

@endsection

@section('footer')
    
@endsection