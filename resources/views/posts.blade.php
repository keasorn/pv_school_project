@extends("layouts.app")

@section('title','POST')
@section('content')
    <H1>POST</H1>
    <ul>
        @foreach($posts as $p)
            <li>{{$p['title']}}: {{$p['content']}}</li>
        @endforeach
    </ul>
@endsection
