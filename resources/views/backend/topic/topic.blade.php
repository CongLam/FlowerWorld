@extends('backend/layout')
@section('title', 'Topic')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Danh mục sản phẩm</h2>
        </div>
    </div><!--/.row-->
    <hr>

    <div class="row">
        <div class="input-group" style="width:40%; margin: auto">
            {{--<input type="text" class="form-control" name="search" placeholder="Search topic...">
            <div class="input-group-append">
                <button id="search_topic" class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>--}}
        </div>
        <div class="col-xs-12 col-md-12 col-lg-10" style="margin: auto">
            <div class="panel panel-primary" style="width:70%; margin: auto">
                <div class="panel-heading">
                    <h3>Thêm danh mục</h3>
                </div>
                <div class="panel-body" style="border: solid gray; padding: 20px">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input required type="text" name="topic_name" class="form-control" {{old('topic_name')}} placeholder="Nhập tên danh mục...">
                        </div>
                        <div class="form-group">
                            <label>Mô tả:</label>
                            <input required type="text" name="description" class="form-control" {{old('description')}} placeholder="Nhập mô tả...">
                        </div>
                        <div class="form-group" >
                            <label>Trạng thái:</label></br>
                            <div class="status" >
                                <input type="radio" id="enable" name="status" value="1" checked><label for="male" >Bật</label><br>
                                <input type="radio" id="disable" name="status" value="0"><label for="female">Tắt</label><br>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm danh mục" onclick="return confirm('Bạn có chắc chắn muốn thêm?')">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Danh sách danh mục</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>NO</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th style="width:30%">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topicList as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->topic_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ asset('admin/topic/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                        <a href="{{ asset('admin/topic/delete/'.$item->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
                    {{ $topicList->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->


    {{--<script>
        $(document).ready(function () {
            $('#search_topic').click(function () {

                e.preventDefault();
                var url = route('admin.topic.search')
                $.ajax({
                    url: '',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        a: "content abc",
                        b: "content bcd"
                    }
                }).done(function(ketqua) {
                    $('#noidung').html(ketqua);
                });

            })

        });
    </script>--}}

@endsection
