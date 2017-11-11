<?php

namespace App\Http\Controllers;

use App\User;
use App\Contato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index() {
        return view('contatos.index', ['contatos' => Contato::all()]);
    }

    public function add(Request $request) {
        $sucesso = false;
        if ($request->has('nome')) {
            try {


                $contato = new Contato();
                $contato->nome = $request->input('nome');
                $contato->email = $request->input('email');
                $contato->telefone = $request->input('telefone');
                $contato->endereco = $request->input('endereco');
                $contato->save();
                $sucesso = true;
            } catch (Exception $ex) {
                echo $ex->getMensage();
                exit;
            }
        }
        return view('contatos.add', ['contatos' => Contato::all(), 'sucesso' => $sucesso]);
    }

    public function delete($id) {
        Contato::destroy($id);
        return view('contatos.index', ['contatos' => Contato::all()]);
    }

    public function edit($id, Request $request) {
        $contato = Contato::find($id);

        $sucesso = false;
        if ($request->has('nome')) {
            try {


                $contato->nome = $request->input('nome');
                $contato->email = $request->input('email');
                $contato->telefone = $request->input('telefone');
                $contato->endereco = $request->input('endereco');
                $contato->save();
                $sucesso = true;
            } catch (Exception $ex) {
                echo $ex->getMensage();
                exit;
            }
        }

        return view('contatos.edit', ['contato' => $contato, 'sucesso' => $sucesso]);
    }

}
