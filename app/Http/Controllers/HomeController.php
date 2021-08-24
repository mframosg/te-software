<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {
        return view('home.form');
    }

    public function store(Request $request)
    {
        Item::create([
            'quantity' => $request->quantity,
            'subTotal' => $request->subTotal,
            'vat' => $request->vat
        ]);
        return back()->withSuccess('Succesfully added');
    }

    public function list()
    {
        $items = Item::all()->reverse();
        return view('home.list', compact('items'));
    }

    public function info($id)
    {
        $items = Item::find($id);
        return view('home.info', compact('items'));
    }

    public function delete($id)
    {
        $items = Item::destroy($id);
        return redirect()->route('home.list');
    }
}
