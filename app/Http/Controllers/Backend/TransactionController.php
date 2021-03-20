<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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

        return view('backend.transaction.transaction')->with('transactions', $transactions);
    }
}
