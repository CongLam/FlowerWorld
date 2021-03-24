@extends('backend/layout')
@section('title', 'Transaction')
@section('content')




    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Transaction</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">

                    <form action="{{ route('transaction.seach_transaction_by_date') }}" method="get">
                        @csrf
                        <div class="input-group" style="margin-bottom: 30px">
                            <div class="form-group">
                                <label >Start date</label>
                                <input type="date" name="start_date" max="3000-12-31"
                                       min="1000-01-01" class="form-control">
                            </div>
                            <div class="form-group" style="margin-left: 10px">
                                <label >End date</label>
                                <input type="date" name="end_date" max="3000-12-31"
                                       min="1000-01-01" class="form-control">
                            </div>
                            <div class="form-group search_btn" style="margin: 32px 0px 0px 10px;">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th  width="5%">NO</th>
                                    <th width="15%">Customer name</th>
                                    <th width="15%">Email</th>
                                    <th width="15%" >Phone</th>
                                    <th width="15%">Product</th>
                                    <th width="5%">Quantity</th>
                                    <th width="15%">Amount</th>
                                    <th width="15%">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td> {{$transaction->customer_name}}</td>
                                        <td>{{$transaction->customer_email}}$</td>
                                        <td>{{$transaction->customer_phone}}</td>
                                        <td>{{$transaction->product_name}}</td>
                                        <td>{{$transaction->qty}}</td>
                                        <td>{{$transaction->amount}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $transactions->links() }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div><!--/.row-->

    <script>
        $( document ).ready(function() {
            $('#inputDate').datepicker({
            });
        });

    </script>

@endsection
