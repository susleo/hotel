@extends('backend.layouts.app')
@section('css')
    <!-- morris chart -->
    <link href="{{asset('backend/assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    @endsection

@section('body')

        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- start dashboard  -->
            @include('backend.inc.dashboard')
            <!-- end dashboard menu -->

            </div>
        </div>
        <!-- end page content -->
@endsection

@section('js')
    <!-- morris chart -->
    <script src="{{asset('backend/assets/plugins/morris/morris.min.js')}}" ></script>
    <script src="{{asset('backend/assets/plugins/morris/raphael-min.js')}}" ></script>
    <script src="{{asset('backend/assets/js/pages/chart/morris/morris_home_data.js')}}" ></script>
    @endsection
