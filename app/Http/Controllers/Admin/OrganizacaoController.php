<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizacao;

class OrganizacaoController extends Controller
{
    public function index(){
        $data['organizacoes']=Organizacao::all();
        return view('admin.organizacao.index',$data);
    }

    public function create(){
        return view('admin.organizacao.create.index');
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'vc_nome' => 'required',
                'descricao' => 'required',
                'unid_comando' => 'required', // Corrigi o typo em 'required'
                'imagem' => 'required'
            ], [
                'vc_nome.required' => 'Campo obrigatório',
                'descricao.required' => 'Campo obrigatório',
                'unid_comando.required' => 'Campo obrigatório', // Adicionei 'required' aqui
                'imagem.required' => 'Campo obrigatório'
            ]);

            // Se chegou até aqui, a validação foi bem-sucedida

            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $caminho = $this->carregar_imagem($request);

                $organizacao = Organizacao::create([
                    'vc_nome' => $request->vc_nome,
                    'descricao' => $request->descricao,
                    'unid_comando' => $request->unid_comando,
                    'imagem' =>$caminho
                ]);

            }


            return redirect()->back()->with('organizacao.create.success', 1);
        } catch (\Throwable $th) {
            // Se ocorrer uma exceção, trata o erro
            // Pode adicionar logs ou outras ações de tratamento de erro aqui


            return redirect()->back()->with('organizacao.create.error', 1);
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

    public function update(Request $request , $id){

        try {

            $org=Organizacao::find($id);

            $request->validate([
                'vc_nome'=>'required',
                'descricao'=>'required',
                'unid_comando'=>'required',
                'imagem' => 'required'

            ],[
                'vc_nome.required'=>'Campo obrigatório',
                'descricao.required'=>'Campo obrigatório',
                'unid_comando.required'=>'Campo obrigatório',
                'imagem.required' => 'Campo obrigatório'
            ]);

            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $caminho= $this->carregar_imagem($request);

                if (isset($org->imagem)) {
                    $path = public_path($org->imagem);
                    unlink($path);
                }

                $organizacao=Organizacao::findOrFail($id)->update([
                    'vc_nome'=>$request->vc_nome,
                'descricao'=>$request->descricao,
                'unid_comando'=>$request->unid_comando,
                'imagem'=> $caminho
                ]);

            }



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
            $organizacao=Organizacao::findOrFail($id);
            Organizacao::findOrFail($id)->delete();

            return redirect()->back()->with('organizacao.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('organizacao.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $organizacao=Organizacao::findOrFail($id);
            Organizacao::findOrFail($id)->forceDelete();

            return redirect()->back()->with('organizacao.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('organizacao.purge.error',1);
            //throw $th;
        }
    }

    public function carregar_imagem(Request $request){
        $name = uniqid(date('HisYmd'));
        $organizacao = $request->file('imagem');

        $extension = $request->imagem->extension();
        $nameFile = "{$name}.{$extension}";
        $destionationPath = public_path("images/organizacao");
        $organizacao->move($destionationPath, $nameFile);

        $caminho = "images/organizacao/" . $nameFile;

        if (!$caminho) {
            return redirect()->back()->with('error','Falha ao carregar imagem')->withInput();
        } else {
            return $caminho;
        }
    }
}
