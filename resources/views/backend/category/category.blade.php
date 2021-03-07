@extends('layouts.app')
@section('contents')
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Categories</a></li>
            <li><a href="javascript:avoid(0)">Manage Category</a></li>
        </ul>
    </div>
</div>
<h1>Manage Category</h1>

<div class="row animated fadeInUp">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            @include('inc.alert')


            <div class="panel bt-md b-primary">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>Manage Category</h4>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('add_category') }}" class="btn btn-primary pull-right">Add Category</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=1)
                                            @foreach ($category as $row)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $row->categoryname }}</td>
                                                    <td>
                                                        <input type="checkbox" data-size="mini" name="status" id="statuss" data-id="{{ $row->id }}" data-toggle="toggle" data-on="Active" data-off="Inactive" {{ $row->status == 1 ? 'checked' : ''}}>
                                                    </td>
                                                    <td>
                                                        {{--  @if ($row->status == 1)
                                                            <a href="{{ route('change_status',$row->id) }}" class="btn btn-info btn-xs"><i class="fa fa-arrow-up"></i> </a>
                                                        @else
                                                            <a href="{{ route('change_status',$row->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-arrow-down"></i> </a>
                                                        @endif  --}}

                                                        <a href="{{ route('edit_category',$row->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                                                        <a href="{{ route('delete_category',$row->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                                @php($i++)
                                            @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
