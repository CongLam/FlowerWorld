@extends('backend/layout')
@section('title', 'Product')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Sản Phẩm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-body">
                    <form action="{{ route('seach_product_backend') }}" method="get">
                        <div class="input-group" style="margin-bottom: 30px">
                            @csrf
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                   placeholder="Nhập từ khóa..." value="{{old('keyword')}}">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{ asset('admin/product/add') }}" class="btn btn-primary">Thêm sản phẩm</a>
                            <hr>
                            <h3 class="page-header">Danh Sách</h3>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th>NO</th>
                                    <th width="15%">Tên SP</th>
                                    <th width="5%">Giá</th>
                                    <th width="5%" >Số lượng</th>
                                    <th width="15%">Ảnh </th>
                                    <th width="15%">Danh mục</th>
                                    <th width="25%">Phụ kiện</th>
                                    <th width="20%">Tác vụ</th>
                                </tr>
                                </thead>
                                <tbody
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$product->product_name}}</td>
                                            <td>${{$product->price}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td>
                                                <img width="200px" src="{{ asset('storage/thumbnail/'.$product->thumbnail) }}" class="thumbnail">
                                            </td>
                                            <td>{{$product->topic_name}}</td>
                                            <td>{{$product->accessories}}</td>
                                            <td>
                                                <a href="{{ asset('admin/product/edit/'.$product->product_id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> SỬa</a>
                                                <a href="{{ asset('admin/product/delete/'.$product->product_id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn sẽ xóa sản phẩm này?')" ><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div><!--/.row-->

    <script>
       /* $('#search_btn').on('click', function () {
            $value = $('#keyword').val();
            $.ajax({
                type: 'get',
                url: '{{ route('seach_product_backend')}}',
                data: {
                    'keyword': $value
                },
                success:function(data){
                    // $('tbody').html(data);
                    // console.log(data['data'][0]);

                    jQuery.each( data['data'], function( i, val ) {
                        console.log(val);
                    })
                    $('tbody').html(

                    );
                }
            });

        })
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });*/
    </script>

@endsection
