@extends('layouts.plantilla')

@section('title','Edit')

@section('content')
<h1>Aqui podras editar este curso</h1>

<form action="{{route('cursos.update',$curso)}}" method="post">

    @method('put');
    @csrf


    <label for="">
        Name:
        <input name="name" type="text" value="{{$curso->name}}" value="{{old('name',$curso->name)}}">
    </label>
    <br>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <label for="">
        Description:
        <textarea name="description" id="" rows="10">{{old('description',$curso->description)}}</textarea>
    </label>
    <br>
    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <label for="">
        Category:
        <input type="text" name="category" value="{{$curso->category}}" value="{{old('category',$curso->category)}}">
    </label>
    <br>
    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <button type="submit">Update</button>
</form>

@endsection
