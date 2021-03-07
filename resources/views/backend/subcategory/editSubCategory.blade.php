@extends('layouts.app')
@section('contents')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Sub Categories</a></li>
            <li><a href="javascript:avoid(0)">Update Sub Category</a></li>
        </ul>
    </div>
</div>
<h1>Edit Sub Category Info</h1>


<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            @include('inc.alert')


            <div class="panel bt-md b-primary">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>Edit Sub Category</h4>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('manage_sub_category') }}" class="btn btn-primary pull-right">Manage Sub Category</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="{{ route('update_sub_category') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $row['id'] }}">
                                <div class="form-group">
                                    <label for="subcat" class="col-sm-3 control-label">Sub Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="subcat" id="subcat" value="{{ $row['subcat'] }}" placeholder="Shirt">
                                    </div>
                                </div>

                                    <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10" style="margin-left: 25%">
                                        <button type="submit" class="btn btn-primary">Edit Sub Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
