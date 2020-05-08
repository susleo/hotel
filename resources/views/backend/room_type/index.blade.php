@extends('backend.layouts.app')

@section('css')
    <!-- data tables -->
    <link href="{{asset('backend/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    @endsection
<style>
    .small-img{
        height:100px;
        width: 300px;
    }
</style>
@section('body')
{{--    {{dd($room_types->rtImages)}}--}}
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Room Types</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminhome')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('room_type.index')}}">Room Types</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Room Types</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>All Room Types</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row p-b-20">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="add_room.html" id="addRow" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group pull-right">
                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table class="table table-hover table-checkable order-column full-width" id="example4">
                                    <thead>
                                    <tr>
                                        <th class="center"> # </th>
                                        <th class="center"> Image </th>
                                        <th class="center"> Type </th>
                                        <th class="center"> Price </th>
                                        <th class="center"> Max Adult </th>
                                        <th class="center"> Max Child </th>
                                        <th class="center"> Status </th>
                                        <th class="center"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i = 1 @endphp
                                    @foreach($room_types as $rt)
{{--                                       {{ ($images =$rt->images->where('status', 1))}}--}}
                                          @foreach($rt->images->where('status', 1) as $imd)
                                    <tr class="odd gradeX">
                                        <td class="center">{{$i}}</td>
                                        <td>
                                            <img src="storage/images/room_types/{{$imd->image}}" alt="Images" class="small-img" >
                                        </td>
                                        <td class="center">{{$rt->room_type}}</td>
                                        <td class="center">{{$rt->price}}</td>
                                        <td class="center">{{$rt->max_adults}} </td>
                                        <td class="center">{{$rt->max_children}}</td>
                                        <td class="center">
                                            @if($rt->status)
                                            <span class="label label-sm label-success">Active </span>
                                            @else
                                            <span class="label label-sm label-danger">InActive </span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            <a href="edit_room.html" class="btn btn-tbl-edit btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                    </tr>
                                        @php $i++ @endphp
                                          @endforeach
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
    <!-- end page content -->

    @endsection

@section('js')
    <!-- data tables -->
    <script src="{{asset('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}" ></script>
    <script src="{{asset('backend/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}" ></script>
    <script src="{{asset('backend/assets/js/pages/table/table_data.js')}}" ></script>
    @endsection