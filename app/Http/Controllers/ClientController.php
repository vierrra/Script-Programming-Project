<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller {

    public function new() {
        
        return view('client.create');
    }

    public function list() {
        $data['clients'] = Client::all();

        return view('client.list', $data);
    }

    public function edit($id) {
        $data['client'] =Client::find($id);

        return view('client.edit', $data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name'  => 'required',
            'cpf'   => 'required',
            'email' => 'required'
        ]);

        Client::where('id', $id)->update($request->except('_token'));

        return redirect()->route('client.list')->with('acao', 'Atualizado com sucesso');
    }

    public function save(Request $request) {
        $request->validate([
            'name'      => 'required',
            'cpf'       => 'required',
            'email'     => 'required'
        ]);
            
        Client::create($request->except('_token'));

        return redirect()->route('client.list')->with('acao', 'Cadastrado com sucesso');
    }

    public function delete($id) {
        Client::destroy($id);
     
        return redirect()->route('client.list')->with('acao', 'Excluído com sucesso');
    }
}
