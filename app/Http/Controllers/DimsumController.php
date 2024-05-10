<?php

namespace App\Http\Controllers;

use App\Http\Requests\DimsumRequest;
use Illuminate\Http\Request;
use App\Models\Dimsum;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;



class DimsumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dimsum = Dimsum::get();
        return view('admin.dimsum', compact('dimsum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {

            $fotopath = null;
            if ($request->hasFile('image')) {
                $fotopath = $request->file('image')->store('image', 'public');
            }

            Dimsum::create([
                'dimsum' => $request->dimsum,
                'deskripsi' => $request->deskripsi,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' => $fotopath,
            ]);


            return redirect()->back()->with('success', 'Data Dimsum berhasil ditambahkan');

        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode === 1062) {
                return redirect()->back()->with('error', 'Gagal menambahkan data, Data sudah ada');
            } else {
                return redirect()->back()->with('error', 'Gagal menambahkan data, Data sudah ada! ');
            }
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fotopath = null;
        if ($request->hasFile('image')) {
            $fotopath = $request->file('image')->store('image', 'public');
        }

        $validatedData = $request->validate([
            'dimsum' => 'required',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => $fotopath,
        ]);

        Dimsum::create($validatedData);

        return redirect()->route('admin.dimsum')->with('success', 'Dimsum created successfully.');
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
        $dimsum = Dimsum::findOrFail($id); // Mengambil data post berdasarkan ID
        return view('admin.editdimsum', compact('dimsum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dimsum = Dimsum::findOrFail($id);

        $request->validate([
            'dimsum' => 'required',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1 ',
            'stock' => 'required|numeric|min:1',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if ($request->hasFile('image')) {
            if ($dimsum->image) {
                Storage::disk('public')->delete($dimsum->image);
            }

            $fotopath = $request->file('image')->store('image', 'public');
            $dimsum->image = $fotopath;
        }

        $dimsum->dimsum = $request->input('dimsum');
        $dimsum->deskripsi = $request->input('deskripsi');
        $dimsum->price = $request->input('price');
        $dimsum->stock = $request->input('stock');

        $dimsum->save();

        return redirect('/dimsum')->with('success', 'Data Dimsum berhasil Diupdate');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dimsum = Dimsum::FindOrFail($id);
        if ($dimsum->image) {
            $fotopath = storage_path('app/public/' . $dimsum->image);

            if (file_exists($fotopath)) {
                unlink($fotopath);
            }
        }
        try {
            $dimsum = Dimsum::findOrFail($id);
            $dimsum->delete();
            return redirect()->back()->with('success', 'Data dimsum berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data dimsum, karena data sedang digunakan! ');
        }
    }
}
