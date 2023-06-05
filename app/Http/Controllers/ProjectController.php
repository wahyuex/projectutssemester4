<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
{
    $pageTitle = 'Project List Barang';
    $barangs = DB::select('
        SELECT *, barang.id AS barang_id, satuans.name AS satuan_name
        FROM barang
        LEFT JOIN satuans ON barang.satuan_id = satuans.id
    ');
    return view('project.project', [
        'pageTitle' => $pageTitle,
        'barangs' => $barangs
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        // RAW SQL Query done
        $satuans = DB::table('satuans')->get();

        return view('project.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'kode_barang' => 'Example Buah = B1',
            'Deskripsi Barang' => 'Deskripsi Barang harus diisi',
            'Harga Barang' => 'Harga Barang harus diisi',
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

        // INSERT QUERY
        DB::table('barang')->insert([
            'KodeBarang' => $request->kode_barang,
            'NamaBarang' => $request->nama_barang,
            'DeskripsiBarang' => $request->deskripsi_barang,
            'HargaBarang' => $request->harga_barang,
            'satuan_id' => $request->satuan_barang,
        ]);

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Barang Edit';
        $satuans = DB::table('satuans')->get();
        $barang = DB::table('barang')->where('id', $id)->first();
        return view('project.edit', compact('pageTitle', 'barang', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'kode_barang' => 'Example Buah = B1',
            'Deskripsi Barang' => 'Deskripsi Barang harus diisi',
            'Harga Barang' => 'Harga Barang harus diisi',
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
        DB::table('barang')
            ->where('id', $id)
            ->update([
            'KodeBarang' => $request->input('kode_barang') ,
            'NamaBarang' => $request->input('nama_barang') ,
            'DeskripsiBarang' => $request->input('deskripsi_barang') ,
            'HargaBarang' => $request->input('harga_barang') ,
            'satuan_id' => $request->input('satuan_barang') ,
                // kolom-kolom lain yang ingin diupdate
            ]);
        return redirect()->route('project.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('barang')
        ->where('id', $id)
        ->delete();

    return redirect()->route('project.index');
    }
}
