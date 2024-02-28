<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Voluntario;

class VoluntarioController extends Controller
{
    public function index(){
        $data['voluntarios']=Voluntario::join('users','users.id','=','voluntarios.id')
        ->select('voluntarios.*','users.vc_pr_nome as nome1','users.vc_nome_meio as nome2','users.vc_ult_nome as nome3')->get();

        $data['users']=User::all();
        return view('admin.voluntario.index',$data);
    }

    public function create(){
        $response['users']=User::all();
        return view('admin.voluntario.create.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminatw\Http\Response
    */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
            ], [
                'id.required' => 'Campo obrigatório'
            ]);

                $voluntario = Voluntario::create([
                    'id' => $request->id
                ]);

            return redirect()->back()->with('voluntario.create.success', 1);
        } catch (\Throwable $th) {

            return redirect()->back()->with('voluntario.create.error', 1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function edit($id){
        $response['voluntario']=Voluntario::find($id);
        $response['users']=User::all();
        return view('admin.voluntario.edit.index',$response);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function update(Request $request , $id){

        try {

            $voluntario=Voluntario::findOrFail($id);

            $request->validate([
                'id' => 'required',
            ], [
                'id.required' => 'Campo obrigatório'
            ]);


            Voluntario::findOrFail($id)->update([
                    'id' => $request->id
                ]);



            return redirect()->back()->with('voluntario.update.success',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('voluntario.update.error',1);
        }
    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function delete($id){
        try {
            $voluntario=Voluntario::findOrFail($id)->delete();

            return redirect()->back()->with('voluntario.delete.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('voluntario.delete.error',1);
            //throw $th;
        }

    }

    public function purge($id){
        try {
            $voluntario=Voluntario::findOrFail($id)->forceDelete();

            return redirect()->back()->with('voluntario.purge.success',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('voluntario.purge.error',1);
            //throw $th;
        }
    }

}