<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrelimController extends Controller

{
    public function showAdditionPage(){
        return view('prelim-rosaupan.addition' ,[
            'total' => null,
        ]);
    }
    
    public function calculateAdd(Request $request){
        $request->validate([
            'number1' => 'numeric',
            'number2' =>  'numeric',
        ]);
        // $validatedData = $request->validate([
        //     'number1' => 'numeric',
        //     'number2' =>  'numeric',
        // ]);
        $num1 = $request ->input('number1');
        $num1 = $request ->input('number2');       
       
        $total = $num1 + $num2;

        return view('prelim-rosaupan.addition', [
            'total' => $total,
        ]);
    }

    public function showSubtractionPage(){
        return view('prelim-rosaupan.subtraction' ,[
            'total' => null,
        ]);
    }

    public function calculateSub(Request $request){
        $request->validate([
            'number1' => 'numeric',
            'number2' =>  'numeric',
        ]);
        // $validatedData = $request->validate([
        //     'number1' => 'numeric',
        //     'number2' =>  'numeric',
        // ]);
        $num1 = $request ->input('number1');
        $num2 = $request ->input('number2');       
       
        $total = $num1 - $num2;

        return view('prelim-rosaupan.subtraction', [
            'total' => $total,
        ]);
    }

    public function showMultiplicationPage(){
        return view('prelim-rosaupan.multiplication' ,[
            'total' => null,
        ]);
    }



    public function showDivisionPage(){
        return view('prelim-rosaupan.division' ,[
            'total' => null,
        ]);
    }
    

    public function calculateDiv(Request $request){
        $request->validate([
            'number1' => 'numeric',
            'number2' =>  'numeric',
        ]);
        // $validatedData = $request->validate([
        //     'number1' => 'numeric',
        //     'number2' =>  'numeric',
        // ]);
        $num1 = $request ->input('number1');
        $num2 = $request ->input('number2');       
       
        $total = $num1/$num2;

        return view('prelim-rosaupan.division', [
            'total' => $total,
        ]);
    }
}




