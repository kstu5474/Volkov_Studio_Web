<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //아이디 중복 확인하기
    public function existsId(Request $req)
    {
        $userid = $req->input('userid');

        $data = DB::select('SELECT count(userid) from member_list where userid=?', [$userid]);


        return $data;
    }

    //이메일 중복 확인하기
    public function existEmail(Request $req)
    {
        $useremail = $req->input('useremail');

        $data = DB::select('SELECT count(email) from member_list where email=?', [$useremail]);


        return $data;
    }
    //회원가입을 진행하는 로직
}
