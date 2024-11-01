<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class FilesController extends Controller
{
    public function index()
    {
        $Files = Files::get();
        return view('Files.index',compact('Files'));
    }

    public function create()
    {
        return view('Files.create');
    }
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',         
        ]);

        $Files = new Files();
        $Files->title = $request->title;
        $Files->slug = $request->slug;

        $Files->save();

        return redirect()->route('Files');
    }

    public function edit($id)
    {
        $Files = Files::find($id);
        return view('Files.edit', compact('Files'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',        
        ]);
        $Files = Files::find($id);

       
        $Files->title = $request->title;
        $Files->slug = $request->slug;

        $Files->save();

        return redirect()->route('Files');

    }

    public function delete($id)
    {
        $Files = Files::find($id);
        $Files->delete();
        return redirect()->route('Files');
    }
}