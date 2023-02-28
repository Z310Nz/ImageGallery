@extends('layouts.frontend')
@section('content')
    <div class="head">
        <h1>
            ภาพวาด Painting
        </h1>
    </div>

    @foreach ($posts as $post)
    <div class="contrainer">
        <div class="item">
            <div class="content">
                <img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:200px; max-width:200px" alt="" srcset="">
                <h3>{{ $post->title }}</h3>
                <div class="text">
                    <p id="one">ARTIST</p>
                    <p>{{ $post->author }}</p>
                </div>

                <form action="/editpic/{{ $post->id }}" method="post">
                    <button class="btn btn-outline-primary"><a href="/editpic/{{ $post->id }}" class="btn btn-outline-primary">Update</a></button>
                </form>

                <form action="/delete/{{ $post->id }}" method="post">
                     <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                     @csrf
                     @method('delete')
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection