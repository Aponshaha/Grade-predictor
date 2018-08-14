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
        $t = $c->multiplication($c1,$d);
        $z = $z+$t;
        //$b=$b+$c;
        
        $x = $c->sum($b,$c1); 

        $y=$c->sum($z,$d);


        $result=round($c->div($y,$x),2);




 

        $a = $z;
        $b = $x;


        return view('calc',['result'=>$result],['x'=>$x]);

        
    }

    
}