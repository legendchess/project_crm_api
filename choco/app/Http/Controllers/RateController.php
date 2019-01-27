<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;
use App\Tax;
use Illuminate\Support\Facades\DB;
class RateController extends Controller
{
    public function index()
    {
    	return Rate::all();
    }

    public function store(Request $request)
    {


        $rate = new Rate();
        $rate->name = $request->input('aircompany_rate');
        $rate->air_fees = $request->input('aircompany_fees');
        $rate->agent_fees = $request->input('agent_fees');
        $rate->fees_type = $request->input('fees_type');
        $rate->hashFile = $request->input('hash_fileq');
        $rate->save();

        $taxe = new Tax();
        $taxe->name = $request->input('non_r_tax_t');
        $taxe->amount = $request->input('non_r_tax_a');
        $taxe->rate_id = $rate->id;
        $taxe->save();

         return response()->json($rate, 201);

    }

    public function check(Request $request)
    {
        
        $checkRate = $request->input('aircompany_rate');
        $checkFile = $request->input('hash_fileq');

        $d = true;
        $rate_file = DB::table('rates')->where('name', $checkRate)->pluck('hashFile')[0];
        if($rate_file != $checkFile)
            $d=false;
        
        
      return (int)($d);

    }

    public function update(Request $request)
    {
        $updateRate = $request->input('aircompany_rate');
        $updateFile = $request->input('hash_fileq');

        DB::table('rates')->where('name', $updateRate)->update(['hashFile' => $updateFile]);

       return response()->json($rate, 200);
    }

    public function calculate(Request $request)
    {   
        $calcRate = $request->input('aircompany_rate');
        $tic = $request->input('ticket');
        $agent_f_r_t = $request->input('agent_f_r_t');
        $new_n_r_t = $request->input('new_n_r_t');

        $calc1 = DB::table('rates')->where('name', $calcRate)->select('agent_fees', 'air_fees', 'id', 'fees_type')->get()[0];
        $calc2 = DB::table('taxes')->where('rate_id', $calc1->id)->select('amount')->get()[0];
        if($calc1->fees_type == 1)
            $total = $tic - ($agent_f_r_t + $new_n_r_t + $calc1->agent_fees + $calc1->air_fees + $calc2->amount);
        else
        {
             $total = ($tic * (100-$calc1->air_fees))/100 - ($agent_f_r_t + $new_n_r_t + $calc1->agent_fees  + $calc2->amount);
        }
     return $total;
    }

}



