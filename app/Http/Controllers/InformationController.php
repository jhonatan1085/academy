<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        // $models = Category::all();
   $models = Information::paginate(5);
   
   //  $model = Category::all('id','name','slug');
     //$model = Category::where('name','like','%as%')->get();

   // dd($categories);
   
     return view('information.index',compact('models'));
        
}

public function create(){
   return view('information.create');
}

public function store(Request $request){
   $data = $request->all();
  // $data['slug']=str_slug($data['name']);

   $model = Information::create($data);
   //dd($request);
   return redirect()->route('information.index');
}

public function edit($id){
   $model = Information::findOrFail($id);
  // dd($model);
   return view('information.edit',compact('model'));
}

public function update(Request $request,$id){
   $model = Information::findOrFail($id);
   $data = $request->all();
   $model->update($data);
   /* otra forma de guardar
   $model->fill($data);
   $model->save();
   */

   // dd($model);

    return redirect()->route('information.index');
}


public function delete($id){
$model = Information::findOrFail($id);
$model->delete();
// dd($model);
return redirect()->route('information.index');
}
}
