@extends('backend/layout')
@section('title', 'Detail Order')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết đơn hàng</h1>
            <h3>Mã đơn hàng: {{$detailOrder->first()->transaction_id}} </h3>
            <h6>Ngày đặt: {{$detailOrder->first()->created_at}}</h6>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">Thông tin khách hàng</h2>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th  width="10%">Mã khách hàng</th>
                                    <th width="20%">Tên khách hàng</th>
                                    <th width="20%">Email</th>
                                    <th width="20%" >Số điện thoại</th>
                                    <th width="30%">Địa chỉ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$detailOrder->first()->customer_id}}</td>
                                        <td>{{$detailOrder->first()->customer_name}}</td>
                                        <td>{{$detailOrder->first()->customer_email}}</td>
                                        <td>{{$detailOrder->first()->customer_phone}}</td>
                                        <td>{{$detailOrder->first()->address}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <hr>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">Thông tin đơn hàng</h2>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th width="10%">Mã SP</th>
                                    <th width="20%">Tên SP</th>
                                    <th width="15%" >Gía</th>
                                    <th width="15%">Sô lượng</th>
                                    {{--<th width="10%">Color</th>
                                    <th width="10%">Size</th>--}}
                                    <th width="20%">Tổng tiền</th>
                                    <th width="20 %">Địa chỉ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($detailOrder as $detail)
                                    <tr>
                                        <td>{{$detail->product_id}}</td>
                                        <td>{{$detail->product_name}}</td>
                                        <td>{{$detail->amount / $detail->qty}}</td>
                                        <td>{{$detail->qty}}</td>
                                        {{--<td>{{$detail->color}}</td>
                                        <td>{{$detail->size}}</td>--}}
                                        <td>{{$detail->amount}}VNĐ</td>
                                        <td>{{$detail->address}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6"><p style="text-align: right"><b>Tổng tiền: {{$detailOrder->first()->total_price}}VNĐ</b></p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    <form action="{{route('transaction.export_order', ['transaction_id' => $detailOrder->first()->transaction_id])}}" method="get" enctype="multipart/form-data">
        @csrf
        <input type="submit" value="Xuất hóa đơn" name="export_pdf" class="btn btn-success">
    </form>

    <script>
        $( document ).ready(function() {



        });

    </script>

@endsection
