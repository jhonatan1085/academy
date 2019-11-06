<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index(){
        $models = Matricula::paginate(5);

        //  $model = Category::all('id','name','slug');
        //$model = Category::where('name','like','%as%')->get();

      // dd($categories);
        return view('matricula.index',compact('models'));
    }

    public function create(){
        $alumnos = Alumno::all()->pluck('nombre','id');
        return view('matricula.create',compact('alumnos'));
    }
    public function store(Request $request){
      $data = $request->all();
      $model = Matricula::create($data);
      //dd($request);
      return redirect()->route('matricula.index');
  }

    public function edit($id){
        $model = Matricula::findOrFail($id);
        $alumnos = Alumno::all()->pluck('nombre','id');
       // dd($model);
        return view('matricula.edit',compact('model','alumnos'));
    }


    public function update(Request $request,$id){
      $model = Matricula::findOrFail($id);
      $data = $request->all();
      $model->update($data);

       return redirect()->route('matricula.index');
  }

  public function delete($id){
    $model = Matricula::findOrFail($id);
    $model->delete();
   // dd($model);
   return redirect()->route('matricula.index');
}
}
