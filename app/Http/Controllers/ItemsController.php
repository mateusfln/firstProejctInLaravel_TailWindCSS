<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsFormRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    



    public function index(Request $request)
    {
        $items = Item::query()->orderBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('items.index')->with('items', $items)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemsFormRequest $request)
    {
        

        $item = Item::create($request->all());
        
        

        return to_route('items.index')
            ->with('mensagem.sucesso', "Item '{$item->nome}' adicionado com sucesso");
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return to_route('items.index')
            ->with('mensagem.sucesso', "Item '{$item->nome}' removido com sucesso");
    }

    public function edit(Item $item)
    {

        return view('items.edit')->with('item', $item);
    }

    public function update(Item $item, ItemsFormRequest $request)
    {
       
        $item->fill($request->all());
        $item->save();

        return to_route('items.index')
            ->with('mensagem.sucesso', "Item '{$item->nome}' atualizado com sucesso");
    }


}
