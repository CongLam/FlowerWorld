@extends('backend/layout')
@section('title', 'Edit Category')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh mục bài viết</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Chỉnh sửa danh mục bài viết
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục:</label>
                            <input required type="text" name="blog_category_name" class="form-control" placeholder="Nhập tên danh mục..." value="{{$blogCategory->blog_category_name}}">
                        </div>
                        <div class="form-group">
                            <label>Mô tả:</label>
                            <input required type="text" name="description" class="form-control" placeholder="Nhập mô tả..." value="{{$blogCategory->description }}">
                        </div>
                        <div class="form-group" >
                            <label>Trạng thái:</label></br>
                            <div class="status" >
                                @if($blogCategory->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Bật</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="disable">Tắt</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="enable">Bật</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Tắt</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Chỉnh sửa" onclick="return confirm('Bạn chắc chắn muốn sửa danh mục?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/blog_category') }}" class="form-control btn btn-danger">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>


    </script>


@endsection
