<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Voluntario;
use App\Models\AtividadeVoluntario;
use App\Models\User;


class HomeController extends Controller
{
    public function index(){
        $data['atividades'] = AtividadeVoluntario::join('atividades','atividades.id','=','atividade_voluntarios.id_atividade')
        ->join('voluntarios','voluntarios.id','=','atividade_voluntarios.id_voluntario')
        ->join('users','users.id', '=','voluntarios.id')
        ->select('atividade_voluntarios.*','atividades.titulo as atividade','users.vc_pr_nome as voluntario','users.vc_nome_meio as voluntario2','users.vc_ult_nome as voluntario3')->get();

        $data['voluntarios']=Voluntario::all();
        $data['atividades']=Atividade::all();
        $data['uses']=User::all();

        return view('site.index',$data);

    }

    /**
     * @param int $id
     * @return Illuminate\Http\Response
    */

    public function view($id){
        $response['atividades']=AtividadeVoluntario::find($id);

        return view('site.view' ,$response);
    }
}
