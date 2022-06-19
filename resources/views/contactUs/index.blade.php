@extends('layouts.plantilla')

@section('title','ContactUs')

@section('content')
    <h2>Dejanos un mensaje</h2>
    <form action="{{route('contactUs.store')}}" method="post">
        @csrf
        <label for="">
            Name:
            <input type="text" name="name" id="" value="{{old('name')}}">
        </label>

        @error('name')
        <p><small>*{{$messege}}</small></p>
        @enderror
        <label for="">
            Mail:
            <input type="email" name="email" id="" value="{{old('email')}}">
        </label>
        @error('email')
        <p><small>*{{$messege}}</small></p>
        @enderror
        <label for="">
            Messege:
            <textarea name="messege" id="" rows="3"></textarea>
        </label>
        @error('messege')
        <p><small>*{{$messege}}</small></p>
        @enderror
        <button type="submit" >Send</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection
