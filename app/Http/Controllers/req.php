<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class req extends Controller
{
    public function run(Request $request)
    {
    // var_dump($request);
    $res = $_POST["form_data"];
    var_dump($res);
    
// var_dump(  => $res[0]['name']['value'][0]);
var_dump($res[0]['value']);
// return;

    DB::table('order')->insert([
        'income_sum' => $res[0]['value'],
        'outcome_sum' => $res[1]['value'],
        'requisites' => $res[2]['value'],
        // 'requisites_card' => $res[3]['value'],
        // 'requisites_qiwi' => $res[4]['value'],
        'mail' => $res[5]['value'],
        'income_route' => $res[6]['values']['income_route'],
        'outcome_route' => $res[6]['values']['outcome_route'],


        'status' => 'new'
    ]);
    
        // 'outcome__sum' => $res[1],


            // DB::table('db_list')->insert([
        //     'income_route' =>'ZEC',
        //     'outcome_route' =>'BTC',
        //     'income_sum' =>'',
        //     'outcome_sum' =>'',
        // ]);
        
    // var_dump($res);
    // $values = array($res);
    // var_dump($values);
    
    // foreach ($values as $string) {
    //     $row = explode('|', $string); // Explode the string
    //     // Convert it to associative
    //     $result[] = array('income_sum' => $row[0], 
    //     'outcome_sum' => $row[1], 'requisites_purse' => $row[2], 
    //     'requisites_card' => $row[3], 'requisites_qiwi' => $row[4], 
    //     'email' => $row[5], 'requisites_qiwi' => $row[6]);
    //     var_dump($result);
    // }
    // for ($i=0; $i < $res; $i++) { 
    //     var_dump($res);
    // }

    // $result = explode(',', $res);
    // var_dump($result);
    // $res = $arrayName = array('' => , );
    // DB::table('order') -> insert($result);

    // $res -> send(DB::connection('order'));
    
    // $enter = DB::connection('order');

    // var_dump($enter);

    }
}
