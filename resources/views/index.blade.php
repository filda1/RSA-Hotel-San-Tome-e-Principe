@extends('layouts/app1')

 
@include('layouts/head7')
@section('head')


<body>

<div class="container">
        <ul>
            @foreach ($posts as $post)
                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>

</body>
<br><br><br><br>
@section('footer')
@endsection