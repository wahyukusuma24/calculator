<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function cal(Request $request){

        $num =$request->submit;
        return view('calculator', compact('num'));
    }

    public function insert(Request $request)
    {
        $result = "";

        if (isset($request->textView)) {
            $num =$request->textView;
        } else {
            $num = "";
        }

        if (isset($request->submit)) {
            $num =$request->textView . $request->submit;
        } else {
            $num = "";
        }

        if (isset($request->op)) {
            $cookie_value1 = $request->textView;
            setcookie($cookie_name1 = 'num',$cookie_value1, time() + (86400 * 30), "/");
            
            $cookie_value2 = $request->op;
            setcookie($cookie_name2 = 'op',$cookie_value2, time() + (86400 * 30), "/");
            $num = "";
        }

        if (isset($request->equals)) {
            $num = $request->textView;

            switch($_COOKIE['op']) {
                case "+":
                    $result = $num + $_COOKIE['num'];
                    break;
                case "/":
                    $result = $_COOKIE['num'] / $num;
                    break;
                case "-":
                    $result = $_COOKIE['num'] - $num;
                    break;
                case "X":
                    $result = $num * $_COOKIE['num'];
                    break;
                case "%":
                    $result = $_COOKIE['num'] / 100;
                    break;
            }
            $num = $result;
        } 
        return view('calculator', compact('num'));
    }
}
