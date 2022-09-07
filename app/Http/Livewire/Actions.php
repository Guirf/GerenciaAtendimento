<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Actions extends Component {

    public function dashboard() {

        $dados1 = DB::select("SELECT event FROM queue_log WHERE event = 'ENTERQUEUE' ");
        $dados2 = DB::select("SELECT event FROM queue_log WHERE event = 'CONNECT'");
        $dados3 = DB::select("SELECT event FROM queue_log WHERE event = 'ABANDON' ");
        $dados4 = DB::select("SELECT event FROM queue_log WHERE event = 'RINGNOANSWER' AND data >= 5 ");

        $notes = DB::select('SELECT *,(SELECT SUM(agent_note) FROM satisfacao WHERE ramal = endpoints.aors) as nota FROM endpoints ORDER BY (SELECT SUM(agent_note) FROM satisfacao WHERE ramal = endpoints.aors) DESC');

        $enter_queue = count($dados1);
        $answer_queue = count($dados2);
        $abandon_queue = count($dados3);
        $ctee = count($dados4);
        
        return view('livewire.actions', [
            'enter_queue' => $enter_queue,
            'answer_queue' => $answer_queue,
            'abandon_queue' => $abandon_queue,
            'ctee' => $ctee,
            'notes' => $notes
        ]);


    }


    public function filaLogIn() {
        return view('livewire.fila');
    }

    public function logIN() {
        echo "teste";
    }
    
}
