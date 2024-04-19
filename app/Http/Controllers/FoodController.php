<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food = Food::get();
        return view('admin.food', compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FoodRequest $request)
    {
        try {

            $fotopath = null;
            if ($request->hasFile('image')) {
                $fotopath = $request->file('image')->store('image', 'public');
            }

            Food::create([
                'food' => $request->food,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' => $fotopath,
            ]);


            return redirect()->back()->with('success', 'Data Food berhasil ditambahkan');

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
            'food' => 'required|unique:food,food,',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => $fotopath,
        ]);

        Food::create($validatedData);

        return redirect()->route('admin.food')->with('success', 'Dimsum created successfully.');
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
        $food = Food::findOrFail($id); // Mengambil data post berdasarkan ID
        return view('admin.editfood', compact('food'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

            $food = Food::findOrFail($id);

            $request->validate([
                'food' => 'required|unique:food,food,',
                'price' => 'required|numeric|min:1',
                'stock' => 'required|numeric|min:1',
                'image' => 'nullable|mimes:jpg,png,jpeg,svg',
            ]);

            $exit = $food->image;

            if ($request->hasFile('image')) {
                if ($food->image) {
                    Storage::disk('public')->delete($food->image);
                }

                $fotopath = $request->file('image')->store('image', 'public');
                $food->image = $fotopath;
            }

            //$food = Food::findOrFail($id);
            //$food->update($request->all());

            $food->food = $request->input('food');
            $food->price = $request->input('price');
            $food->stock = $request->input('stock');
            $food->save();

            if ($request->hasFile('image') && $exit) {
                $food->image = $exit;
                $food->save();
            }

            return redirect('/food')->with('success', 'Data Food berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::FindOrFail($id);
        if ($food->image) {
            $fotopath = storage_path('app/public/' . $food->image);

            if (file_exists($fotopath)) {
                unlink($fotopath);
            }
        }
        try {
            $food = Food::findOrFail($id);
            $food->delete();
            return redirect()->back()->with('success', 'Data Food berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data Food, karena data sedang digunakan! ');
        }
    }
}
