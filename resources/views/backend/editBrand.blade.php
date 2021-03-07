@extends('layouts.app')
@section('contents')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Brands</a></li>
            <li><a href="javascript:avoid(0)">Update Brand</a></li>
        </ul>
    </div>
</div>
<h1>Edit Brand Info</h1>


<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            @include('inc.alert')


            <div class="panel bt-md b-primary">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>Edit Brand</h4>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('manage_brand') }}" class="btn btn-primary pull-right">Manage Brand</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="{{ route('update_brand') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $row['id'] }}">
                                <div class="form-group">
                                    <label for="brandname" class="col-sm-2 control-label">Brand Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="brandname" id="brandname" value="{{ $row['brandname'] }}" placeholder="Artisan">
                                    </div>
                                </div>

                                    <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Edit Brand</button>
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
