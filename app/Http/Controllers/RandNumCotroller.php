<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RandNumCotroller extends Controller
{
    public function getGenerateNumber()
    {
        $lotto_str = "";
        $lotto_arr = Array();

        for($i=0;$i<6;)
        {
           $randNum = rand(1,45);

           if(in_array($randNum, $lotto_arr))
           {
                continue;
           }
           else
           {
                $lotto_arr[$i] = $randNum;
                $i++;
           }
        }

        sort($lotto_arr);

        for($i=0;$i<6;$i++)
        {
            if($i == 5)
            {
                $lotto_str.="+".$lotto_arr[$i];
            }
            else
            {
                $lotto_str.= $lotto_arr[$i]." ";
            }
        }

        return view('etc.roller', ['roller' => $lotto_str]);
    }
}
