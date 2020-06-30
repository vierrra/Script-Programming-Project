<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {

    public function new() {
        return view('client.create');
    }

    public function list() {
        $data['clients'] = [
            ['id' => 1, 'name' => 'Renato Vieira', 'cpf' => '030.044.994-10', 'email' => 'vierrra@gmail.com'],
            ['id' => 2, 'name' => 'Rafael Vieira', 'cpf' => '030.044.994-11', 'email' => 'rafaelvieira2@gmail.com']
        ];

        return view('client.list', $data);
    }

    public function toView($id) {
        $data = ['client' => [
                    'id'      => 1,
                    'name'    => 'Renato Vieira',
                    'cpf'     => '030.044.99.4-10',
                    'email'   => 'vierrra@hotmail.com'
                ]
        ];

        return view('client.toView', $data);
    }

    public function edit($id) {
        $data = ['client' => [
                'id'        => 1,
                'name'      => 'Renato Vieira',
                'cpf'       => '030.044.994-10',
                'email'     => 'vierrra@gmail.com',
            ]
        ];

        return view('client.edit', $data);
    }

    public function update(Request $request) {
        $request->validate([
            'name'  => 'required',
            'cpf   '=> 'required',
            'email' => 'required',
        ]);

        return redirect()->route('client.list')->with('acao', 'Atualizado com sucesso');
    }

    public function salve(Request $request) {
        $request->validate([
            'name'     => 'required',
            'autocpfr' => 'required',
            'email'    => 'required'
        ]);

        return redirect()->route('livros.listar')->with('acao', 'Cadastrado com sucesso');
    }

    public function delete($id) {
     
        return redirect()->route('client.list')->with('acao', 'Excluído com sucesso');
    }
}
