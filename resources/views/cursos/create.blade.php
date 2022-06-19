@extends('layouts.plantilla')

@section('title','Create')

@section('content')
<h1>Aqui podras crear un curso</h1>

<form action="{{route('cursos.store')}}" method="post">

    @csrf

    <label for="">
        Name:
        <input name="name" type="text">
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label for="">
        Description:
        <textarea name="description" id="" rows="10"></textarea>
    </label>
    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label for="">
        Category:
        <input type="text" name="category">
    </label>
    <br>
    @error('category')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <button type="submit">Send</button>
</form>

@endsection
