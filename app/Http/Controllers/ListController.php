<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:1', 'regex:/\S/'],
        ]);

        TaskList::create([
            'nama_list' => $validated['name'],
            'owner_id' => $request->user()->id,
        ]);

        return back()->with('success', 'Daftar tugas berhasil dibuat.');
    }
}
