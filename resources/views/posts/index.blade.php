@extends('layouts.app')


@section('content')
    <ul>
        @foreach ($posts as $post)
            <li>
                <details>
                    <summary><a href="{{ route('posts.show',$post->id) }}" >{{ $post->title }}</a></summary>
                    <div class="image-container">
                        <img src="{{ $post->path }}" alt="Comming Soon !!!" width="50%">
                    </div>
                </details>
            </li>   
        @endforeach
    </ul>
@endsection

@section('footer')
    
@endsection