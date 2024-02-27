<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Associado;

class AssociadoController extends Controller
{
    public function index(){
        $data['associados']=Associado::join('users','users.id','=','associados.id_membro')
        ->select('associados.*','users.vc_pr_nome as membro')->get();

        $data['users']=User::all();
        return view('admin.associado.index',$data);
    }

    public function create(){
        $response['users']=User::all();
        return view('admin.associado.create.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_membro' => 'required',
                'credencial' => 'required'
            ], [
                'id_membro.required' => 'Campo obrigatório',
                'credencial.required' => 'Campo obrigatório'
            ]);



                $associado = Associado::create([
                    'id_membro' => $request->id_membro,
                    'credencial' => $request->credencial
                ]);



            return redirect()->back()->with('associado.create.success', 1);
        } catch (\Throwable $th) {


            return redirect()->back()->with('associado.create.error', 1);
        }
    }

    /**
     * @param int $id_membro
     * @return Illuminate\Http\Response
    */

    public function edit($id_membro){
        $response['associado']=Associado::where('id_membro',$id_membro)->first();
        $response['users']=User::all();
        return view('admin.associado.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id_membro
     * @return Illuminate\Http\Response
    */

    public function update(Request $request , $id_membro){

        try {

            $associado=Associado::where('id_membro',$id_membro)->firstOrFail();

            $request->validate([
                'id_membro' => 'required',
                'credencial' => 'required'
            ], [
                'id_membro.required' => 'Campo obrigatório',
                'credencial.required' => 'Campo obrigatório'
            ]);


                $associado->update([
                    'id_membro' => $request->id_membro,
                    'credencial' => $request->credencial
                ]);



            return redirect()->back()->with('associado.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('associado.update.error',1);
        }
    }

    /**
     * @param int $id_membro
     * @return Illuminate\Http\Response
    */

    public function delete($id_membro){
        try {
            $associado=Associado::where('id_membro',$id_membro)->firstOrFail();
            $associado->delete();

            return redirect()->back()->with('associado.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('associado.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id_membro){
        try {
            $associado=Associado::where('id_membro',$id_membro)->firstOrFail();
            $associado->forceDelete();

            return redirect()->back()->with('associado.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('associado.purge.error',1);
            //throw $th;
        }
    }

}
