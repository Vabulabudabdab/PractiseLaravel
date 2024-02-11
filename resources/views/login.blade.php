@extends('welcome')

@section('content')
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
    <form action="/getid" method="post">
        {{csrf_field()}}
        <input type="text" name="title" value="{{old('title')}}">
        <br>
        <input type="text" name="password">
        <br>
        <button type="submit">Submit</button>

    </form>

@endsection
