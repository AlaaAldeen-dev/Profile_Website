<?php

namespace App\Http\Controllers\Admin\Typer_Title;

use App\Http\Controllers\Controller;
use App\Http\Requests\TyperTitleStoreRequest;
use App\Http\Requests\TyperTitleUpdateRequest;
use App\Models\TyperTitle;
use Illuminate\Http\Request;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $typerTitles = TyperTitle::all();
        $typerTitles = TyperTitle::orderBy('id', 'desc')->get();
        return view('admin.typer-title.index', compact('typerTitles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.typer-title.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TyperTitleStoreRequest $request)
    {
        $typerTitle = new TyperTitle();
        $typerTitle->title = $request->title;
        $typerTitle->save();
        toast('Created Successfully', 'success');
        return redirect()->route('admin.typer-title.index');
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
        $typerTitle = TyperTitle::findOrFail($id);
        return view('admin.typer-title.edit', compact('typerTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TyperTitleUpdateRequest $request, string $id)
    {
        $typerTitle = TyperTitle::findOrFail($id);
        $typerTitle->title = $request->title;
        $typerTitle->save();
        toast('Updated Successfully', 'success');
        return redirect()->route('admin.typer-title.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typerTitle = TyperTitle::findOrFail($id);
        $typerTitle->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
