<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursoController;
use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCursoController $request){
        //Asinacion uno por uno e instanciacion del objeto
       /*  $curso = new Curso();

        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;
        $curso->save(); */

        //Asignacion masiva de datos
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }

    public function update(StoreCursoController $request,Curso $curso){
        /* $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;

        $curso->save(); */

        $curso->update($request->all());
        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
