<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Database\QueryException;
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
    public function create(Request $request)
    {
        try {
            // Validasi input
            $request->validate(Food::rules());

            $food = Food::create([
                'food' => $request->food,
            ]);

            return redirect()->back()->with('success', 'Data Food berhasil ditambahkan');

        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode === 1062) {
                return redirect()->back()->with('error', 'Gagal menambahkan data, Data sudah ada');
            } else {
                return redirect()->back()->with('error', 'Gagal menambahkan data, Data sudah ada! ');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan data, Data sudah ada! ');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'food' => 'required|string|max:255',
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
        {
            $food = Food::findOrFail($id);
            $food = $request->validate([
                'food' => 'required|string|max:255',
            ]);

            $food = Food::findOrFail($id);

            $food->update($request->all());
            $food->save();

            return to_route('food.index')->with('success', 'Data Food berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $food = Food::findOrFail($id);
            $food->delete();
            return redirect()->back()->with('success', 'Data Food berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data Food, karena data sedang digunakan! ');
        }
    }
}
