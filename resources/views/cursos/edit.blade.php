@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
<h1>Aqui podras editar este curso</h1>

<form action="{{route('cursos.update',$curso)}}" method="post">

    @method('put');
    @csrf

    <label for="">
        Name:
        <input name="name" type="text" value="{{$curso->name}}">
    </label>
    <br>
    <label for="">
        Description:
        <textarea name="description" id="" rows="10">{{$curso->description}}</textarea>
    </label>
    <br>
    <label for="">
        Category:
        <input type="text" name="category" value="{{$curso->category}}">
    </label>
    <br>
    <button type="submit">Update</button>
</form>

@endsection
