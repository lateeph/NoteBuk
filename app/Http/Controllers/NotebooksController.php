<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;

class NotebooksController extends Controller
{
    public function ShowAddNotebookForm(){
    	return view('notebooks.add-notebook');
    }

    public function addNotebook(Request $request){
    	$title = $request->title;
    	Notebook::create(['title'=>$title]);
    	return 'created';
    }

    public function showNotebooks(){
    	$notebooks = Notebook::all();
    	return view('notebooks.notebooks', compact('notebooks'));
    }
}
