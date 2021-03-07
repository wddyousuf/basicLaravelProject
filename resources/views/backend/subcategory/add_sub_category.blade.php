@extends('layouts.app')
@section('contents')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Sub Categories</a></li>
            <li><a href="javascript:avoid(0)">Add Sub Category</a></li>
        </ul>
    </div>
</div>
<h1>Add Sub Category</h1>


<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            @include('inc.alert')


            <div class="panel bt-md b-primary">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>Add Sub Category</h4>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('manage_sub_category') }}" class="btn btn-primary pull-right">Manage Sub Category</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" action="{{ route('create_sub_category') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="cat" class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="cat" id="cat" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($cat as $item)
                                                <option value="{{ $item->id }}">{{ ucwords($item->categoryname) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subcat" class="col-sm-2 control-label">Sub Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="subcat" id="subcat" value="{{ old('subcat') }}" placeholder="Clothes">
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Create Sub Category</button>
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
