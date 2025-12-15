@extends('template.default')
@section('title', 'MyController')
@section('header1', 'My View')

@section('content')
    <form action="#" method="">
        @csrf
        <label for="num">Input multiply table</label>
        <input type="number" name="num" id="num">
        <button type="submit">Submit</button>
    </form>
@endsection
