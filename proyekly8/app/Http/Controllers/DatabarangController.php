<?php

namespace App\Http\Controllers;

use App\Models\databarang;
use Illuminate\Http\Request;

class DatabarangController extends Controller
{
    public function index(){
        $data = databarang::all();
        return view('Databarang',compact('data'));
    }


    public function tambahDatabarang(){
        return view('tambahDatabarang');
    }
    public function insertdata(Request $request){
        $validatedData = $request->validate([
            'namabarang' => 'required',
            'Satuan' => 'required', // Hapus aturan validasi numeric
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|numeric',
        ]);
    
        // Validasi tambahan untuk memastikan jenis satuan yang diterima
        $validSatuan = ['kg', 'pcs', 'm']; // Tambahkan jenis satuan yang diizinkan
        if (!in_array($validatedData['Satuan'], $validSatuan)) {
            return redirect()->back()->with('error', 'Jenis satuan tidak valid');
        }
    
        Databarang::create($validatedData);
    
        return redirect()->route('databarang')->with('success', 'Data barang berhasil ditambahkan');
    }
    
    
    public function editdatabarang($id)
    {
        $data =databarang::find($id);
        return view('editdatabarang', compact('data'));
    }
   


    public function updatedatabarang(Request $request,$id)
    {
        $data = databarang::find($id);
        $data->namabarang = $request->input('namabarang');
        $data->Satuan = $request->input('Satuan');
        $data->HargaSatuan = $request->input('HargaSatuan');
        $data->save();
        return redirect()->route('databarang')->with('success', 'Data berhasil di Update');
    }
    public function deletedatabarang(Request $request, $id)
    {
        $data = databarang::find($id);
        $data->delete();
        return redirect()->route('databarang')->with('success', 'Data berhasil dihapus');
    }
}
