<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;

class CalcController extends Controller
{
    public function home()
    {
        return $this->calc();
    }

    public function calc(Request $request )
    {
        $c = new Calculator();
        $a = $request->input('a');
        $b = $request->input('b');
        $c1 =$request->input('c1');
        $d= $request->input('d');

        $c = new Calculator(); 

        $z = $c->multiplication($a,$b);
        //$b=$b+$c;
        
        $x = $c->sum($b,$c1); 

        $y=$c->sum($z,$d);


        $result=$c->div($y,$x);

          echo "your new CGPA is:",$result;  
          echo "Credit completed ",$x;

 

        $z = $a;
        $x = $b;
        return view('calc');

        
    }

    
}