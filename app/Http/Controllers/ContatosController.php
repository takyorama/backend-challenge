<?php namespace App\Http\Controllers;

use App\Http\Requests\ContatosRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contatos;

class ContatosController extends Controller{
    /**
     * @return Response
     */
    public function index(){
        $contatos = Contatos::all();

        return view('lista', ['contatos'=>$contatos]);
    }
    /**
     * @return Response
     */
    public function create(){return view('cadastro');}
    /**
     * @return Response
     */
    public function store(ContatosRequest $request){
        $input = $request->all();
        Contatos::create($input);

        return redirect('lista');
    }
    /**
     * 
     * @param int $id
     * @return Response
     */
    public function edit($id){
        $contato = Contatos::find($id);
        return view('edit', compact('contato'));
    }
    /**
     * 
     * @param int $id
     * @return Response
     */
    public function update(ContatosRequest $request, $id){
        $contato = Contatos::find($id)->update($request->all());

        return redirect('contatos');
    }
    /**
     * @param int $id
     * @return Response
     */
    public function delete($id){
        Contatos::find($id)->delete();

        return redirect('lista');
    }
    /**
     * @return Response
     */
    public function aula(){
        return view('contatos/aula');
    }
    public function cad_aula(){
        return view('/contatos');
    }
}
