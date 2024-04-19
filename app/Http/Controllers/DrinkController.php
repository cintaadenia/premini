<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drink = Drink::get();
        return view('admin.drink', compact('drink'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

            $fotopath = null;
            if ($request->hasFile('image')) {
                $fotopath = $request->file('image')->store('image', 'public');
            }

            Drink::create([
                'drink' => $request->drink,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' => $fotopath,
            ]);


            return redirect()->back()->with('success', 'Data Drink berhasil ditambahkan');

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
            'drink' => 'required',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => $fotopath,
        ]);

        Drink::create($validatedData);

        return redirect()->route('admin.drink')->with('success', 'Dimsum created successfully.');
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
        $drink = Drink::findOrFail($id); // Mengambil data post berdasarkan ID
        return view('admin.editdrink', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $drink = Drink::findOrFail($id);
        // dd($drink);

        $request->validate([
            'drink' => 'required|unique:drinks,drink,' . $id,
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg',
        ]);

        if ($request->hasFile('image')) {
            if ($drink->image) {
                Storage::disk('public')->delete($drink->image);
            }

            $fotopath = $request->file('image')->store('image', 'public');
            $drink->image = $fotopath;
        }

        $drink->drink = $request->input('drink');
        $drink->price = $request->input('price');
        $drink->stock = $request->input('stock');

        $drink->save();

        return redirect('/drink')->with('success', 'Data Drink berhasil Diupdate');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $drink = Drink::FindOrFail($id);
        if ($drink->image) {
            $fotopath = storage_path('app/public/' . $drink->image);

            if (file_exists($fotopath)) {
                unlink($fotopath);
            }
        }
        try {
            $drink = Drink::findOrFail($id);
            $drink->delete();
            return redirect()->back()->with('success', 'Data drink berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data Drink, karena data sedang digunakan! ');
        }
    }
}
