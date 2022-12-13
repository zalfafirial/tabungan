<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabunganModels;
use App\Http\Controllers;

class TabunganController extends Controller
{
public function index(){
    $data = TabunganModels::get();

    return view('welcome')
    ->with('data', $data);
}

public function store(Request $request){
$request->validate([
'nis' => 'required',
'nama' => 'required',
'rayon' => 'required',
]);

TabunganModels::create([
'nis' => $request->nis,
'nama' => $request->nama,
'rayon' => $request->rayon,

]);

return redirect()->route('index')->with('add','Success Add new Member');
}

public function indexEditTabungan($id){

//$data = Activity::get();
//dd($data);
$data = TabunganModels::where('id',$id)->first();
return view ('edit-data')
->with('data',$data);

}

public function updateTabungan(Request $request , $id){

    TabunganModels::where('id',$id)->update([
    'nis', 'nama', 'rayon', 'jumlah_uang' => $request->nama_activity
    ]);
    
    return redirect(route('index'));
    }
    
    
    
    
    
    
    
    }