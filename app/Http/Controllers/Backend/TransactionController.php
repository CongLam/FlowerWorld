<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function getTransaction(){

        $transactions = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'transactions.*',
                'orders.*'
            )
            ->paginate(10);
        //dd($transaction);

        return view('backend.transaction.transaction')->with('transactions', $transactions)->with('i', $i=1);
    }

    public function searchByDatetime(Request $request){
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        $transactions = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
            ->select(
                'transactions.id as transaction_id',
                'transactions.*',
                'orders.*',
                'transactions.created_at as created_at'
            )
            ->where('transactions.created_at','>=', $startDate)
            ->where('transactions.created_at', '<=', $endDate)
            ->paginate(10);

        return view('backend.transaction.transaction')->with('transactions', $transactions)->with('i', $i=1);
    }
}
