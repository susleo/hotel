@extends('backend.layouts.app')

@section('css')
    <!-- dropzone -->
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">--}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="{{asset('backend/assets/plugins/dropzone/dropzone.css')}}" rel="stylesheet" media="screen">
    @endsection
<style>
    .small-img{
        height:100px;
        width: 300px;
    }
</style>
@section('body')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Room Type Details</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminhome')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('room_type.index')}}">Room Types</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Room Type Details</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Add Room Type Details</header>
                            <button id = "panel-button"
                                    class = "mdl-button mdl-js-button mdl-button--icon pull-right"
                                    data-upgraded = ",MaterialButton">
                                <i class = "material-icons">more_vert</i>
                            </button>
                            <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for = "panel-button">
                                <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                            </ul>
                        </div>
                        <form enctype="multipart/form-data" action="{{route('room_type.store')}}" method="POST" >
                            @csrf
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="room_type">
                                    <label class = "mdl-textfield__label">Room Type</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "text"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "text7" name="price">
                                    <label class = "mdl-textfield__label" for = "text7">Rent Per Night</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"
                                                   id = "education" name="description"></textarea>
                                    <label class = "mdl-textfield__label" for = "text7">RoomType Description</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "number"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "text8" name="max_adults">
                                    <label class = "mdl-textfield__label" for = "text8">Max Adults</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "number"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "text7" name="max_children">
                                    <label class = "mdl-textfield__label" for = "text7" >Max Children</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3">Upload Room Photos</label>
                                <form class = "dropzone" id="id_dropzone" name="image" multiple>
                                    <div class="dz-message">
                                        <div class="dropIcon">
                                            <i class="material-icons">cloud_upload</i>
                                        </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                </form>
                            </div>


                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-lg-3">Status</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger" data-size="large">
                                </label>

                            </span>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    @endsection

@section('js')
    <!-- dropzone -->
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>--}}
    <script src="{{asset('backend/assets/plugins/dropzone/dropzone.js')}}" ></script>
    <script src="{{asset('backend/assets/plugins/dropzone/dropzone-call.js')}}" ></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    @endsection

