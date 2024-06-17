<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Organizacao;

class AtividadeController extends Controller
{
    public function index(){
        $data['atividades'] = Atividade::join('organizacoes', 'organizacoes.id', '=', 'atividades.it_id_org')
            ->select('atividades.*','organizacoes.vc_nome as organizacao')
            ->get();

        $data['organizacoes'] = Organizacao::all();

        return view('admin.atividade.index',$data);
    }

    public function create(){
        $response['organizacoes']=Organizacao::all();
        return view('admin.atividade.create.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'titulo' => 'required',
                'descricao' => 'required',
                'estado' => 'required',
                'data_inicio' => 'required',
                'data_fim' => 'required',
                'desc_estado' => 'required',
                'it_id_org' => 'required'

            ], [
                'titulo.required' => 'Campo obrigatório',
                'descricao.required' => 'Campo obrigatório',
                'estado.required' => 'Campo obrigatório',
                'data_inicio.required' => 'Campo obrigatório',
                'data_fim.required' => 'Campo obrigatório',
                'desc_estado.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório'
            ]);



                $atividade = Atividade::create([
                    'titulo' => $request->titulo,
                    'descricao' => $request->descricao,
                    'estado' => $request->estado,
                    'data_inicio' => $request->data_inicio,
                    'data_fim' => $request->data_fim,
                    'desc_estado' => $request->desc_estado,
                    'it_id_org' => $request->it_id_org
                ]);



            return redirect()->back()->with('atividade.create.success', 1);
        } catch (\Throwable $th) {


            return redirect()->back()->with('atividade.create.error', 1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function edit($id){
        $response['atividade']=Atividade::find($id);
        $response['organizacoes']=Organizacao::all();
        return view('admin.atividade.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function update(Request $request , $id){

        try {

            $atividade=Atividade::findOrFail($id);

            $request->validate([
                'titulo' => 'required',
                'descricao' => 'required',
                'estado' => 'required',
                'data_inicio' => 'required',
                'data_fim' => 'required',
                'desc_estado' => 'required',
                'it_id_org' => 'required'

            ], [
                'titulo.required' => 'Campo obrigatório',
                'descricao.required' => 'Campo obrigatório',
                'estado.required' => 'Campo obrigatório',
                'data_inicio.required' => 'Campo obrigatório',
                'data_fim.required' => 'Campo obrigatório',
                'desc_estado.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório'
            ]);

            Atividade::findOrFail($id)->update([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'estado' => $request->estado,
                'data_inicio' => $request->data_inicio,
                'data_fim' => $request->data_fim,
                'desc_estado' => $request->desc_estado,
                'it_id_org' => $request->it_id_org
            ]);



            return redirect()->back()->with('atividade.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('atividade.update.error',1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function delete($id){
        try {
            $atividade=Atividade::findOrFail($id)->delete();

            return redirect()->back()->with('atividade.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('atividade.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $atividade=Atividade::findOrFail($id)->forceDelete();

            return redirect()->back()->with('atividade.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('atividade.purge.error',1);
            //throw $th;
        }
    }

}

