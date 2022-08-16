<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresas = Empresas::latest()->paginate(5);

        return view('empresas.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        //for debbug and end function 
        //dd($request->all());
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];

        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required'
        ], $mensagens);

        Empresas::create($request->all());

        return redirect()->route('empresas.index')
            ->with('sucess', 'Empresa Criada com sucesso!');
    }

    public function show($id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('empresas.show', ['empresa' => $empresa]);
    }

    public function update(Request $request, Empresas $empresa)
    {

        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];

        $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required'
        ], $mensagens);

        
        
        $empresa->update($request->all());
      
        return redirect()->route('empresas.index')
                        ->with('success','Empresa atualizada com sucesso!');
    }

    public function destroy(Empresas $empresa)
    {
        $empresa->delete();
       
        return redirect()->route('empresas.index')
                        ->with('success','Empresa deletada com sucesso!');
    }
}
