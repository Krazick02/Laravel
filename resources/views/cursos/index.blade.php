@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1 class="font-sans font-bold text-2xl">Bienbenido a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <table class="border-separate border border-slate-400 ...">
        <thead>
          <tr>
            <th class="border border-slate-300 ...">Id</th>
            <th class="border border-slate-300 ...">Title</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td class="border border-slate-300 ...">
                    <a href="{{route('cursos.show',$curso)}}">{{$curso->id}}</a>
                </td>
                <td class="border border-slate-300 ...">
                    <a href="{{route('cursos.show',$curso)}}">{{$curso->name}}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$cursos->links()}}

@endsection
