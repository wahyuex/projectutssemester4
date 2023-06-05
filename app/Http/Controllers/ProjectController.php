<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Support\Facades\Validator;


class ProjectController extends Controller
{
    public function index()
    {
        $pageTitle = 'Project List Barang';
        $barangs = Barang::all();
        
        return view('project.project', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    public function create()
    {
        $pageTitle = 'Create Barang';
        $satuans = Satuan::all();

        return view('project.create', compact('pageTitle', 'satuans'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'kode_barang' => 'Example Buah = B1',
            'deskripsi_barang' => 'Deskripsi Barang harus diisi',
            'harga_barang' => 'Harga Barang harus diisi',
        ];
    
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'deskripsi_barang' => 'required',
            'kode_barang' => 'required',
            'harga_barang' => 'required|numeric',
            
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // 'KodeBarang' => $request->input('kode_barang'),
        // 'NamaBarang' => $request->input('nama_barang'),
        // 'DeskripsiBarang' => $request->input('deskripsi_barang'),
        // 'HargaBarang' => $request->input('harga_barang'),
        // 'satuan_id' => $request->input('satuan_barang'),
        $barang = New Barang;
        $barang->KodeBarang = $request->kode_barang;
        $barang->NamaBarang = $request->nama_barang;
        $barang->DeskripsiBarang = $request->deskripsi_barang;
        $barang->HargaBarang = $request->harga_barang;
        $barang->satuan_id = $request->satuan_barang ;
        $barang->save();

        return redirect()->route('project.index');
    }

    public function edit(string $id)
    {
        $pageTitle = 'Barang Edit';
        $satuans = Satuan::all();
        $barang = Barang::findOrFail($id);

        return view('project.edit', compact('pageTitle', 'barang', 'satuans'));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'kode_barang' => 'Example Buah = B1',
            'deskripsi_barang' => 'Deskripsi Barang harus diisi',
            'harga_barang' => 'Harga Barang harus diisi',
        ];
    
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'deskripsi_barang' => 'required',
            'kode_barang' => 'required',
            'harga_barang' => 'required|numeric',
            
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $barang = Barang::findOrFail($id);
        $barang->KodeBarang = $request->kode_barang;
        $barang->NamaBarang = $request->nama_barang;
        $barang->DeskripsiBarang = $request->deskripsi_barang;
        $barang->HargaBarang = $request->harga_barang;
        $barang->satuan_id = $request->satuan_barang ;
        $barang->save();

        return redirect()->route('project.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('project.index');
    }
}
