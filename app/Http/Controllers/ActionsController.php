<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endpoint;
use App\Models\Aor;
use App\Models\Auth;

class ActionsController extends Controller {
    
    public function index(Request $request) {

        

        return view('addramal');

    }



    public function new(Request $request) {
        
        $ramal = new Endpoint();
        $aor = new Aor();
        $auth = new Auth();

        $request->validate([
            'ramal' => 'required|int|min:4|max:4',
            'name' => 'required'
            
        ],[
            'ramal.required' => 'O campo Ramal é obrigatório!',
            'ramal.unique' => 'O Ramal já existe!',
            'ramal.min' => 'O campo Ramal só pode conter 4 dítigos!',
            'ramal.max' => 'O campo Ramal só pode conter 4 dítigos!',
            'ramal.integer' => 'O campo Ramal só pode conter números!',
        ]);

        if($ramal->find($request->input('ramal'))) {
            $request->validate([
                'id' => 'unique:endpoints'
            ],[
                'id.unique' => 'O ramal já existe'
            ]); 
            
            return redirect()->back()->withErrors(['msg' => 'Esse ramal já existe!']);

        } else {

            //endpoint
            $ramal->id = $request->input('ramal');
            $ramal->transport = 'transport-udp';
            $ramal->aors = $request->input('ramal');
            $ramal->auth = $request->input('ramal');
            $ramal->context = $request->input('department');
            $ramal->disallow = 'all';
            $ramal->allow = 'gsm';
            $ramal->direct_media = 'no';
            $ramal->callerid = $request->input('name').' <'.$request->input('ramal').'>';
            $ramal->name = $request->input('name');
            $ramal->department = $request->input('department');

            //aors
            $aor->id = $request->input('ramal');
            $aor->max_contacts = '1';
            $aor->qualify_frequency = '1';

            //auths
            $auth->id = $request->input('ramal');
            $auth->auth_type = 'userpass';
            $auth->password = $request->input('pass');
            $auth->username = $request->input('ramal');

            $ramal->save();
            $aor->save();
            $auth->save();

            return redirect()->back()->withErrors(['msg' => 'Ramal adicionado com sucesso!']);
        }

        
    }
}
