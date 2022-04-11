
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">CHI TIET DON HANG</h1>
            <h3>Ma don hang: {{$detailOrder->first()->transaction_id}} </h3>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">THONG TIN DON HANG</h2>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary"  style="background: #0da5c0">
                                    <th  width="10%">Ma KH</th>
                                    <th width="20%">Ten KH</th>
                                    <th width="20%">Email</th>
                                    <th width="20%" >SDT</th>
                                    <th width="30%">Dia chi</th>
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
                            <h2 class="customer_info" style="text-align: center; background: lightskyblue">THONG TIN DON HANG</h2>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="bg-primary"  style="background: #0da5c0">
                                    <th width="10%">Ma SP</th>
                                    <th width="20%">Ten SP</th>
                                    <th width="15%" >Gia</th>
                                    <th width="10%">So luong</th>
                                   {{-- <th width="10%">Color</th>
                                    <th width="10%">Size</th>--}}
                                    <th width="15%">Tong tien</th>
                                    <th width="30 %">Dia chi</th>
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
                                        <td>{{$detail->amount}}VND</td>
                                        <td>{{$detail->address}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6"><p style="text-align: right"><b>Tong thanh tien: {{$detailOrder->first()->total_price}}VND</b></p></td>
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

    <style>
        th,td {
            text-align: center;
        }
    </style>
