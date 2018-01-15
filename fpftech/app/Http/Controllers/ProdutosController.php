<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produtos;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        /*
        $produtos = Produtos::orderBy('created_at', 'desc')->paginate(10);
        return view('produtos.index',['produtos' => $produtos]);
        */
        $produtos = Produtos::orderBy('id','DESC')->paginate(5);
        return view('produtos.index',compact('produtos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('produtos.create');
    }
  
    public function store(Request $request)
    {
        /*
        $product = new Product;
        $product->name        = $request->name;
        $product->description = $request->description;
        $product->quantity    = $request->quantity;
        $product->price       = $request->price;
        $product->save();
        */

        request()->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
        ]);

        Produtos::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }
  
    public function show($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.show',compact('produto'));
    }
  
    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);
        return view('produtos.edit',compact('produto'));
    }
  
    public function update(Request $request, $id)
    {
        /*
        $product = Product::findOrFail($id);
        $product->name        = $request->name;
        $product->description = $request->description;
        $product->quantity    = $request->quantity;
        $product->price       = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
        */

        request()->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
        ]);
        Produtos::find($id)->update($request->all());
        return redirect()->route('produtos.index')
                        ->with('success','Produto atualizado com sucesso');
    }
  
    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success','Produto deletado com sucesso!');
    }
}
