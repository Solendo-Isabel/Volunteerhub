<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organizacao;

class UserController extends Controller
{
    public function index(){
        $data['users']=User::join('organizacoes','organizacoes.id','=','users.it_id_org')
        ->select('users.*','organizacoes.vc_nome as org_nome')->get();

        $data['organizacoes']=Organizacao::all();
        return view('admin.membro.index',$data);
    }

    public function create(){
        $response['organizacoes']=Organizacao::all();
        return view('admin.membro.create.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'vc_pr_nome' => 'required',
                'vc_nome_meio' => 'required',
                'vc_ult_nome' => 'required',
                'BI'=> 'required',
                'telefone' => 'required',
                'email' => 'required',
                'provincia' => 'required',
                'municipio' => 'required',
                'genero' => 'required',
                'senha' => 'required',
                'it_id_org' => 'required'
            ], [
                'vc_pr_nome.required' => 'Campo obrigatório',
                'vc_nome_meio.required' => 'Campo obrigatório',
                'vc_ult_nome.required' => 'Campo obrigatório',
                'BI.required' => 'Campo obrigatório',
                'telefone.required' => 'Campo obrigatório', // Adicionei 'required' aqui
                'email.required' => 'Campo obrigatório',
                'provincia.required' => 'Campo obrigatório',
                'municipio.required' => 'Campo obrigatório',
                'genero.required' => 'Campo obrigatório',
                'senha.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório'
            ]);



                $user = User::create([
                    'vc_pr_nome' => $request->vc_pr_nome,
                    'vc_nome_meio' => $request->vc_nome_meio,
                    'vc_ult_nome' => $request->vc_ult_nome,
                    'BI'=> $request->BI,
                    'telefone' => $request->telefone,
                    'email' => $request->email,
                    'provincia' => $request->provincia,
                    'municipio' => $request->municipio,
                    'genero' => $request->genero,
                    'senha' => $request->senha,
                    'it_id_org' => $request->it_id_org
                ]);



            return redirect()->back()->with('membro.create.success', 1);
        } catch (\Throwable $th) {


            return redirect()->back()->with('membro.create.error', 1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function edit($id){
        $response['user']=User::find($id);
        $response['organizacoes']=Organizacao::all();
        return view('admin.membro.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function update(Request $request , $id){

        try {

            $org=User::find($id);

            $request->validate([
                'vc_pr_nome' => 'required',
                'vc_nome_meio' => 'required',
                'vc_ult_nome' => 'required',
                'BI'=> 'required',
                'telefone' => 'required',
                'email' => 'required',
                'provincia' => 'required',
                'municipio' => 'required',
                'genero' => 'required',
                'senha' => 'required',
                'it_id_org' => 'required'
            ], [
                'vc_pr_nome.required' => 'Campo obrigatório',
                'vc_nome_meio.required' => 'Campo obrigatório',
                'vc_ult_nome.required' => 'Campo obrigatório',
                'BI.required' => 'Campo obrigatório',
                'telefone.required' => 'Campo obrigatório', // Adicionei 'required' aqui
                'email.required' => 'Campo obrigatório',
                'provincia.required' => 'Campo obrigatório',
                'municipio.required' => 'Campo obrigatório',
                'genero.required' => 'Campo obrigatório',
                'senha.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório'
            ]);


                $user=User::findOrFail($id)->update([
                    'vc_pr_nome' => $request->vc_pr_nome,
                    'vc_nome_meio' => $request->vc_nome_meio,
                    'vc_ult_nome' => $request->vc_ult_nome,
                    'BI'=> $request->BI,
                    'telefone' => $request->telefone,
                    'email' => $request->email,
                    'provincia' => $request->provincia,
                    'municipio' => $request->municipio,
                    'genero' => $request->genero,
                    'senha' => $request->senha,
                    'it_id_org' => $request->it_id_org
                ]);



            return redirect()->back()->with('membro.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('membro.update.error',1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function delete($id){
        try {
            $user=User::findOrFail($id);
            User::findOrFail($id)->delete();

            return redirect()->back()->with('membro.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('membro.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $user=User::findOrFail($id);
            User::findOrFail($id)->forceDelete();

            return redirect()->back()->with('membro.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('membro.purge.error',1);
            //throw $th;
        }
    }

}
