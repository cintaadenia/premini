<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use Illuminate\Database\QueryException;

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
        try {
            // Validasi input
            $request->validate(Drink::rules());

            $drink = Drink::create([
                'drink' => $request->drink,
            ]);

            return redirect()->back()->with('success', 'Data Drink berhasil ditambahkan');
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
            'drink' => 'required|string|max:255',
        ]);

        Drink::create($validatedData);

        return redirect()->route('admin.drink')->with('success', 'Drink created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $drink = Drink::findOrFail($id);
            $drink->delete();
            return redirect()->back()->with('success', 'Data Drink berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data Drink, karena data sedang digunakan! ');
        }
    }
}
