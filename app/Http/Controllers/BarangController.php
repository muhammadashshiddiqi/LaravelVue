<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $brg = Barang::all();
        $arr = array();
        foreach ($brg as $key => $value) {

            $arr[$key]['ID']    = $value->id;
            $arr[$key]['NMBRG'] = $value->Nama_barang;
            $arr[$key]['QTY']   = $value->Qty;
            $arr[$key]['PRICE'] = $value->Price;

        }
        return datatables()->of($arr)->escapeColumn([])->toJson();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
