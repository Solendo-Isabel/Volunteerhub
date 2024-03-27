<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Voluntario;
use App\Models\AtividadeVoluntario;

class AtividadeVoluntarioController extends Controller
{
    public function index(){
        $data['atividade_voluntarios'] = AtividadeVoluntario::join('atividades','atividades.id','=','atividade_voluntarios.id_atividade')
        ->join('voluntarios','voluntarios.id','=','atividade_voluntarios.id_voluntario')
        ->select('atividade_voluntarios.*','atividades.titulo as atividade','voluntarios.id as voluntario')->get();

        $data['voluntarios']=Voluntario::all();
        $data['atividades']=Atividade::all();

        return view('admin.act_vol.index',$data);
    }

    public function create(){
        $response['voluntarios']=Voluntario::all();
        $response['atividades']=Atividade::all();
        return view('admin.act_vol.create.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_atividade' => 'required',
                'id_voluntario' => 'required'
            ], [
                'id_atividade.required' => 'Campo obrigatório',
                'id_voluntario.required' => 'Campo obrigatório'
            ]);



                $act_vol = AtividadeVoluntario::create([
                    'id_atividade' => $request->id_atividade,
                    'id_voluntario' => $request->id_voluntario
                ]);



            return redirect()->back()->with('act_vol.create.success', 1);
        } catch (\Throwable $th) {


            return redirect()->back()->with('act_vol.create.error', 1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function edit($id){
        $response['atividade_voluntarios']=AtividadeVoluntario::find($id);
        $response['voluntarios']=Voluntario::all();
        $response['atividades']=Atividade::all();
        return view('admin.act_vol.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function update(Request $request , $id){

        try {

            $act_vol=AtividadeVoluntario::findOrFail($id);

            $request->validate([
                'id_atividade' => 'required',
                'id_voluntario' => 'required'
            ], [
                'id_atividade.required' => 'Campo obrigatório',
                'id_voluntario.required' => 'Campo obrigatório'
            ]);


            AtividadeVoluntario::findOrFail($id)->update([
                'id_atividade' => $request->id_atividade,
                'id_voluntario' => $request->id_voluntario
                ]);



            return redirect()->back()->with('act_vol.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('act_vol.update.error',1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function delete($id){
        try {
            $act_vol=AtividadeVoluntario::findOrFail($id)->delete();

            return redirect()->back()->with('act_vol.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('act_vol.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $act_vol=AtividadeVoluntario::findOrFail($id)->forceDelete();

            return redirect()->back()->with('act_vol.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('act_vol.purge.error',1);
            //throw $th;
        }
    }

}