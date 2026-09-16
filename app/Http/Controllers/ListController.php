<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ListController extends Controller
{
    public function index()
    {
        $lists = ListItem::with('user')->latest()->get();

        return view('lists.index', compact('lists'));
    }

    public function create()
    {
        Gate::authorize('create', ListItem::class);

        return view('lists.create');
    }

    public function store(Request $request)
    {
        Gate::authorize('create', ListItem::class);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
        ], [
            'name.required' => 'Nama list wajib diisi.',
            'name.max' => 'Nama list maksimal 255 karakter.',
            'description.max' => 'Deskripsi maksimal 1000 karakter.',
        ]);

        try {
            DB::transaction(function () use ($validated) {
                ListItem::create([
                    'name' => $validated['name'],
                    'description' => $validated['description'] ?? null,
                    'user_id' => auth()->id(),
                ]);
            });

            return redirect()->route('lists.index')
                ->with('success', 'List berhasil dibuat.');
        } catch (\Throwable $e) {
            return back()
                ->withInput()
                ->withErrors([
                    'general' => 'Terjadi kesalahan saat membuat list. Silakan coba lagi.',
                ]);
        }
    }

    public function edit(ListItem $list)
    {
        Gate::authorize('update', $list);

        return view('lists.edit', compact('list'));
    }

    public function update(Request $request, ListItem $list)
    {
        Gate::authorize('update', $list);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
        ], [
            'name.required' => 'Nama list wajib diisi.',
            'name.max' => 'Nama list maksimal 255 karakter.',
            'description.max' => 'Deskripsi maksimal 1000 karakter.',
        ]);

        try {
            DB::transaction(function () use ($list, $validated) {
                $list->update([
                    'name' => $validated['name'],
                    'description' => $validated['description'] ?? null,
                ]);
            });

            return redirect()->route('lists.index')
                ->with('success', 'List berhasil diperbarui.');
        } catch (\Throwable $e) {
            return back()
                ->withInput()
                ->withErrors([
                    'general' => 'Terjadi kesalahan saat memperbarui list.',
                ]);
        }
    }

    public function destroy(ListItem $list)
    {
        Gate::authorize('delete', $list);

        try {
            DB::transaction(function () use ($list) {
                $list->delete();
            });

            return redirect()->route('lists.index')
                ->with('success', 'List berhasil dihapus.');
        } catch (\Throwable $e) {
            return back()
                ->withErrors([
                    'general' => 'Terjadi kesalahan saat menghapus list.',
                ]);
        }
    }
}