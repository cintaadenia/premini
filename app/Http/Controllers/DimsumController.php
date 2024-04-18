<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dimsum;
use Illuminate\Database\QueryException;


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
            // Validasi input
            $request->validate(Dimsum::rules());

            $dimsum = Dimsum::create([
                'dimsum' => $request->dimsum,
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
            'dimsum' => 'required|string|max:255',
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
            $dimsum = Dimsum::findOrFail($id);
            $dimsum->delete();
            return redirect()->back()->with('success', 'Data Dimsum berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data Dimsum, karena data sedang digunakan! ');
        }
    }
}
