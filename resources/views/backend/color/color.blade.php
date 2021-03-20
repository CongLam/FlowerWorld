@extends('backend/layout')
@section('title', 'Color')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Color Product</h2>
        </div>
    </div><!--/.row-->
    <hr>

    <div class="row">
        <div class="input-group" style="width:40%; margin: auto">
            <input type="text" class="form-control" name="search" placeholder="Search color...">
            <div class="input-group-append">
                <button id="search_color" class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-10" style="margin: auto">
            <div class="panel panel-primary" style="width:70%; margin: auto">
                <div class="panel-heading">
                    <h3>Add color</h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>color Name:</label>
                            <input required type="text" name="color_name" class="form-control" placeholder="...">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                <input type="radio" id="enable" name="status" value="1"><label for="male">Enable</label><br>
                                <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add color" onclick="return confirm('Do you want to add new color?')">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>color List</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>color Name</th>
                                <th style="width:30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colorList as $item)
                                <tr>
                                    <td>{{ $item->color_name }}</td>
                                    <td>
                                        <a href="{{ asset('admin/color/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="{{ asset('admin/color/delete/'.$item->id) }}" onclick="return confirm('Do you want to delete this color?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
                    {{ $colorList->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection
