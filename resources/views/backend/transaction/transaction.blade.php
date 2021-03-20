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
                   {{-- <form action="{{ route('seach_product_backend') }}" method="get">
                        <div class="input-group" style="margin-bottom: 30px">
                            @csrf
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                   placeholder="Search product...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>--}}
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
                                        <td></td>
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


@endsection
