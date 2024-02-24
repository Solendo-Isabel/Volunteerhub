<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;

class OrganizacaoController extends Controller
{
    public function index(){
        return view('admin.organizacao.index');
    }

    public function create(){
        return view('admin.organizacao.create.index');
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request){
        $request->validate([
            'vc_nome'=>'required',
            'descricao'=>'required',
            'unid_comando'=>'request'

        ],[
            'vc_nome.required'=>'Campo obrigatório',
            'descricao.required'=>'Campo obrigatório',
            'unid_comando'=>'Campo obrigatório'
        ]);

        try {
           $organizacao=Organizacao::create([
                'vc_nome'=>$request->vc_nome,
                'descricao'=>$request->descricao,
                'unid_comando'=>$request->unid_comando
            ]);

            dd($organizacao);

            return redirect()->back()->with('organizacao.create.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($organizacao);
            return redirect()->back()->with('organizacao.create.error',1);
        }


    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function edit($id){
        $response['organizacao']=Organizacao::find($id);
        return view('admin.organizacao.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function update(Request $request,$id){
        $request->validate([
            'vc_nome'=>'required',
            'descricao'=>'required',
            'unid_comando'=>'request'

        ],[
            'vc_nome.required'=>'Campo obrigatório',
            'descricao.required'=>'Campo obrigatório',
            'unid_comando'=>'Campo obrigatório'
        ]);

        try {
            Organizacao::findOrFail($id)->update([
                'vc_nome'=>$request->vc_nome,
            'descricao'=>$request->descricao,
            'unid_comando'=>$request->unid_comando]
             );

            return redirect()->back()->with('organizacao.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('organizacao.update.error',1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function delete($id){
        try {
            $organizacao=Organizacao::find($id);
            Organizacao::findOrFail()->delete();

            return redirect()->back()->with('organizacao.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('organizacao.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $organizacao=Organizacao::find($id);
            Organizacao::findOrFail()->forceDelete();

            return redirect()->back()->with('organizacao.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('organizacao.purge.error',1);
            //throw $th;
        }
}
}
