<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getId(Request $request)
    {
        $id = $request->id;
        //lấy id của sản phẩm
        return $id;
    }
        public function index(){
        return view('index');
    }
    public function create($id){
        return "hien thi them khach hang moi";
    }
    public function edit($id){
        return "hien thi thay doi thong tin ";
    }
    public function delete($id){
        return "hien thi xoa khach hang";
    }
}
