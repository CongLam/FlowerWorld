@extends('backend/layout')
@section('title', 'Edit Admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chỉnh sửa QTV</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Chỉnh sửa tài khoản QTV
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên:</label>
                            <input required type="text" name="name" class="form-control" placeholder="Nhập tên..." value="{{$admin->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="Nhập Email..." value="{{$admin->email }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label"  for="input-phone">Số điện thoại</label>
                            <input type="text" id="input-phone" name="phone"
                                   class="form-control form-control-alternative"
                                   placeholder="Số điện thoại" required
                                   value="{{ !empty($admin->phone) ? $admin->phone : null }}"
                                   maxlength="10" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" >
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-phone">Giới tính</label><br>
                            <div class="status" >
                                @if($admin->gender == 2)
                                    <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender" checked value="2">Nam</label>
                                    <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" value="1">Nữ</label>
                                @else
                                    <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender"  value="2">Nam</label>
                                    <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" checked value="1">Nữ</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-address">Địa chỉ</label>
                            <input type="text" id="input-address" name="address"
                                   class="form-control form-control-alternative"
                                   placeholder="Địa chỉ" required
                                   value="{{ !empty($admin->address) ? $admin->address : null  }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label"  for="input-birthday">Sinh nhật</label>
                            <input type="date" id="input-birthday" name="birthday"
                                   class="form-control form-control-alternative"
                                   placeholder="Sinh nhật" required
                                   value="{{ !empty($admin->birthday) ? date('Y-m-d',strtotime( $admin->birthday)) : null }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-password">Mật khẩu</label>
                            <input type="password" id="input-password" name="password"
                                   class="form-control form-control-alternative"
                                   placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <label>Trạng thái:</label></br>
                            <div class="status" >
                                @if($admin->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Bật</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="disable">Tắt</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="enable">Bật</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Tắt</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Chỉnh sửa" onclick="return confirm('Bạn chắc chắn muốn chỉnh sửa?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/admin_manager') }}" class="form-control btn btn-danger">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>


    </script>


@endsection
