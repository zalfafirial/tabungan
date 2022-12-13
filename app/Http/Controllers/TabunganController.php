<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
class TabunganController extends Controller
{
    public function index()
    {
        $data = Tabungan::get();

        return view('welcome', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rayon' => 'required',
        ]);

        Tabungan::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rayon' => $request->rayon,

        ]);

        return redirect()->route('index')->with('add', 'Success add new Member!');
    }

    public function indexEditTabungan($id)
    {
        $data = Tabungan::where('id', $id)->first();
        return view('edit-tabungan', compact('data'));
    }

    public function updateTabungan(Request $request, $id)
    {

        Tabungan::where('id', $id)->update([
            'nis', 'nama', 'rayon', 'jumlah_uang' => $request->nama_activity
        ]);

        return redirect(route('index'));
    }

    public function deleteTabungan($id){
        Tabungan::where('id', $id)->delete();
        return redirect(route('index'));
    }
}
