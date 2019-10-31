<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
             // $models = Category::all();
        $models = Alumno::paginate(5);
        
        //  $model = Category::all('id','name','slug');
          //$model = Category::where('name','like','%as%')->get();
  
        // dd($categories);
        
          return view('alumno.index',compact('models'));
             
    }

    public function create(){
        return view('alumno.create');
    }

    public function store(Request $request){
        $data = $request->all();
       // $data['slug']=str_slug($data['name']);

        $model = Alumno::create($data);
        //dd($request);
        return redirect()->route('alumno.index');
    }

    public function edit($id){
        $model = Alumno::findOrFail($id);
       // dd($model);
        return view('alumno.edit',compact('model'));
    }

    public function update(Request $request,$id){
        $model = Alumno::findOrFail($id);
        $data = $request->all();
        $model->update($data);
        /* otra forma de guardar
        $model->fill($data);
        $model->save();
        */
  
        // dd($model);
  
         return redirect()->route('alumno.index');
    }

    
  public function delete($id){
    $model = Alumno::findOrFail($id);
    $model->delete();
   // dd($model);
   return redirect()->route('alumno.index');
}
}
