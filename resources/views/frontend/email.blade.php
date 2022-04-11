<div id="wrap-inner">
    <div id="khach-hang">
        <h3>Thông tin của bạn</h3>
        <p>
            <span class="info">Khách hàng: </span>
            {{ $info['fullname'] }}
            {{--{{ $info['middlename'] }}
            {{ $info['lastname'] }}--}}
        </p>
        <p>
            <span class="info">Email: </span>
            {{ $info['email'] }}
        </p>
        <p>
            <span class="info">Số điện thoại: </span>
            {{ $info['telephone'] }}
        </p>
        <p>
            <span class="info">Địa chỉ: </span>
            {{ $info['city'] /*- $info['street']*/ }}
        </p>
    </div>
    <div id="hoa-don">
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
                                        <th width="10%">Mã sp</th>
                                        <th width="15%">Tên SP</th>
                                        <th width="10%" >Gía</th>
                                        <th width="10%">Số lượng</th>
{{--                                        <th width="10%">Color</th>--}}
{{--                                        <th width="10%">Size</th>--}}
                                        <th width="15%">Tổng</th>
                                        <th width="20 %">Địa chỉ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($detailOrder as $detail)
                                        <tr>
                                            <td style="text-align: center">{{$detail->product_id}}</td>
                                            <td style="text-align: center">{{$detail->product_name}}</td>
                                            <td style="text-align: center">{{$detail->amount / $detail->qty}}VNĐ</td>
                                            <td style="text-align: center">{{$detail->qty}}</td>
                                            {{--<td style="text-align: center"> {{$detail->color}}</td>
                                            <td style="text-align: center">{{$detail->size}}</td>--}}
                                            <td style="text-align: center">{{$detail->amount}}VNĐ</td>
                                            <td style="text-align: center">{{$detail->address}}</td>
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
    </div>
    <div id="xac-nhan">
        <br>
        <p align="justify">
            <b>Bạn đã đặt đợn hàng thành công! </b><br />
            • Làm ơn hãy kiểm tra điện thoại trong 24h, chúng tôi sẽ liên lạc với bạn để xác nhận đơn hàng.<br />
            • Sản phẩm của bạn sẽ được chúng tôi xử lý và giao cho bạn trong 5 - 7 ngày tới.<br />
            <b><br />Cảm ơn bạn đã tin tưởng mua hàng của chúng tôi! </b>
        </p>
    </div>
</div>
