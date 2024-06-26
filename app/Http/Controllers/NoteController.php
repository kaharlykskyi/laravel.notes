<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()
            ->where("user_id", auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;

        Note::create($validated);

        return to_route('note.index')->with('message', 'Note created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        if ($note->user_id != auth()->user()->id) {
            abort(403);
        }
        return view('note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        if ($note->user_id != auth()->user()->id) {
            abort(403);
        }
        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNoteRequest $request, Note $note)
    {
        if ($note->user_id != auth()->user()->id) {
            abort(403);
        }

        $validated = $request->validated();

        $note->update($validated);

        return to_route('note.index')->with('message', 'Note was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id != auth()->user()->id) {
            abort(403);
        }

        $note->delete();

        return to_route('note.index')->with('message', 'Note was deleted successfully');
    }
}
