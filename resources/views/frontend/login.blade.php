<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{ asset('backend') }}/">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Khách Hàng Đăng Nhâp</h3></div>
                                    <div class="card-body">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <form method="post">
                                            @include('errors.note')
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email<i class="required_character">*</i></label>
                                                <input class="form-control py-4" id="inputEmailAddress" required
                                                       name="email" type="email" value="{{old('email')}}"
                                                       placeholder="Nhập email của ban..." />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Mật Khẩu<i class="required_character">*</i></label>
                                                <input class="form-control py-4" id="inputPassword" required name="password" type="password" placeholder="Nhập mật khẩu..." />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="rememberPasswordCheck" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Nhớ mật khẩu</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">{{--Quên mật khẩu?--}}</a>
                                                <input class="btn btn-primary" name="submit" type="submit" value="Đăng Nhập">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{asset('register_customer')}}">Bạn cần tạo tài khoản? Đăng kí ngay!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            {{--<div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>--}}
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>


<style>

    body, html {
        background-image: url("https://wallpaper.dog/large/407845.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .required_character {
        color: red;
    }

</style>
