<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use Illuminate\Database\QueryException;


class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $level = Level::get();
        return view('admin.level', compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            // Validasi input
            $request->validate(Level::rules());

            $level = Level::create([
                'level' => $request->level,
            ]);

            return redirect()->back()->with('success', 'Data Level berhasil ditambahkan');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan data! ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan data! ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'level' => 'required|string|max:255',
        ]);

        Level::create($validatedData);

        return redirect()->route('admin.level')->with('success', 'Level created successfully.');
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
        $level = Level::findOrFail($id); 
        return view('admin.editlevel', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { {
            $level = Level::findOrFail($id);
            $level = $request->validate([
                'level' => 'required|string|max:255',
            ]);

            $level = Level::findOrFail($id);

            $level->update($request->all());
            $level->save();

            return to_route('level.index')->with('success', 'Data Level berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $level = Level::findOrFail($id);
            $level->delete();
            return redirect()->back()->with('success', 'Data level berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus data level, karena data sedang digunakan! ');
        }
    }
}
