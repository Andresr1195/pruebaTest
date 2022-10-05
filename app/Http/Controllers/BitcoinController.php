<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precio;

use Yajra\DataTables\DataTables;
use Carbon\Carbon;


class BitcoinController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function historial(){
        return view('history');
    }

    public function updatePrice(Request $request){
        try{

            Precio::create(['crypto' => 'BTC', 'currency' => 'USD', 'amount' => $request->amount]);
            return response()->json(['tipo'=>'success','titulo'=>'Registrado!'],200);

        } catch (\Exception $ex) {
            return response()->json([
                'exception' => $ex,
                'error' => $ex->getMessage()
            ], 500);
        }
      
    }

    public function getHistory(){

        try{
            $data = Precio::latest()->get();

                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function ($request) {

                        $date = Carbon::parse($request->created_at);
                        return $date->format('Y-m-d H:i');
                    })
                    ->rawColumns([])
                    ->toJson();

        } catch (\Exception $ex) {
            return response()->json([
                'exception' => $ex,
                'error' => $ex->getMessage()
            ], 500);
        }
    }
}
