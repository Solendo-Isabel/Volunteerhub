<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organizacao;
use Illuminate\Support\Facades\Hash;

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
                'password' => 'required',
                'it_id_org' => 'required',
                'imagem' => 'required'
            ], [
                'vc_pr_nome.required' => 'Campo obrigatório',
                'vc_nome_meio.required' => 'Campo obrigatório',
                'vc_ult_nome.required' => 'Campo obrigatório',
                'BI.required' => 'Campo obrigatório',
                'telefone.required' => 'Campo obrigatório',
                'email.required' => 'Campo obrigatório',
                'provincia.required' => 'Campo obrigatório',
                'municipio.required' => 'Campo obrigatório',
                'genero.required' => 'Campo obrigatório',
                'password.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório',
                'imagem.required' => 'Campo obrigatório'
            ]);

            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $caminho = $this->carregar_imagem($request);


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
                    'password' =>  Hash::make($request->password),
                    'it_id_org' => $request->it_id_org,
                    'imagem' =>$caminho
                ]);

            }


            return redirect()->back()->with('membro.create.success', 1);
        } catch (\Throwable $th) {
            dd($th);


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

            $user=User::find($id);

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
                'password' => 'required',
                'it_id_org' => 'required',
                'imagem' => 'required'

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
                'password.required' => 'Campo obrigatório',
                'it_id_org.required' => 'Campo obrigatório',
                'imagem.required' => 'Campo obrigatório'
            ]);

            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $caminho= $this->carregar_imagem($request);

                if (isset($user->imagem)) {
                    $path = public_path($user->imagem);
                    unlink($path);
                }


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
                    'password' =>  Hash::make($request->password),
                    'it_id_org' => $request->it_id_org,
                    'imagem' =>$caminho
                ]);

            }


            return redirect()->back()->with('membro.update.success',1);
        } catch (\Throwable $th) {

            dd($th);
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

    public function carregar_imagem(Request $request){
        $name = uniqid(date('HisYmd'));
        $associado = $request->file('imagem');

        $extension = $request->imagem->extension();
        $nameFile = "{$name}.{$extension}";
        $destionationPath = public_path("images/membros");
        $associado->move($destionationPath, $nameFile);

        $caminho = "images/membros/" . $nameFile;

        if (!$caminho) {
            return redirect()->back()->with('error','Falha ao carregar imagem')->withInput();
        } else {
            return $caminho;
        }
    }

}
