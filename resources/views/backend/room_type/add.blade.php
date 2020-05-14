@extends('backend.layouts.app')

@section('css')
    <!-- dropzone -->
{{--    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/pages/formlayout.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">{{isset($room_type)?'Edit Room Type Detail':'Add Room Type Details'}}</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('adminhome')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{route('room_type.index')}}">Room Types</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">{{isset($room_type)?'Edit Room Type Detail':'Add Room Type Details'}}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>{{isset($room_type)?'Edit Room Type Detail':'Add Room Type Details'}}</header>
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
                        {!! Form::open([ 'route' => [ 'room_type.store' ], 'files' => true, 'enctype' => 'multipart/form-data', ]) !!}
{{--                        <form enctype="multipart/form-data" action="{{route('room_type.store')}}" method="POST" file="true">--}}
                            @csrf
                        <div class="card-body row">
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "text" id = "type" name="room_type" value="{{isset($room_type)?$room_type->room_type:old('room_type')}}">
                                    <label class = "mdl-textfield__label">Room Type</label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "text"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "proce" name="price"  value="{{isset($room_type)?$room_type->price:old('price')}}">
                                    <label class = "mdl-textfield__label" for = "proce">Rent Per Night</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-12 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"
                                                   id = "education" name="description"  >{{isset($room_type)?$room_type->description:old('description')}}</textarea>
                                    <label class = "mdl-textfield__label" for = "description">RoomType Description</label>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "number"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "max_adults" name="max_adults"  value="{{isset($room_type)?$room_type->max_adults: old('max_adults') }}">
                                    <label class = "mdl-textfield__label" for = "text8">Max Adults</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "number"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "maxchildre" name="max_children"  value="{{isset($room_type)?$room_type->max_children: old('max_children')}}">
                                    <label class = "mdl-textfield__label" for = "text7" >Max Children</label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>

                            <div class="col-lg-6 p-t-20">
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                    <input class = "mdl-textfield__input" type = "number"
                                           pattern = "-?[0-9]*(\.[0-9]+)?" id = "rooms" name="max_children"  value="{{isset($room_type)?$room_type->max_children: old('max_children')}}">
                                    <label class = "mdl-textfield__label" for = "text7" >Number of Rooms </label>
                                    <span class = "mdl-textfield__error">Number required!</span>
                                </div>
                            </div>

                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-md-3">Upload Room Photos</label>
                                <input  type = "file" id = "image" name="image[]"
                                multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                            </div>
                            <div id="image_preview"></div>


                            <div class="col-lg-12 p-t-20">
                                <label class="control-label col-lg-4">Status</label>
                                    <label class="switchToggle">
                                        Off<input type="checkbox"  id="togBtn"  onclick="getValue()" name="status" value="{{old('status')}}"
                                        @if(isset($room_type))
                                            {{($room_type->status)?'checked':''}}
                                                @endif>
                                        <span class="slider bg red"></span>
                                    </label>
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                            </div>
                        </div>
{{--                        </form>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    @endsection

@section('js')
    <!-- dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>--}}
{{--    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>--}}
    <script type="text/javascript">
            console.log('hello');
            function getValue(){
                if (document.getElementById('togBtn').checked) {
                    console.log("Checked");
                    document.getElementById('togBtn').setAttribute("value", "1");

                } else {
                    console.log("Not Checked");
                    document.getElementById('togBtn').setAttribute("value", "0");
                }
                console.log(document.getElementById('togBtn').getAttribute("value"));

            }

            $("#image").fileinput({
                theme: 'fa',
                uploadUrl: '{{route("room_type.imageStore")}}',
                uploadExtraData: function() {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                allowedFileExtensions: ['jpg','jpeg' ,'png', 'gif'],
                overwriteInitial: false,
                maxFileSize:2000,
                maxFilesNum: 10,
                slugCallback: function (filename) {
                      return filename.replace('(', '_').replace(']', '_');
                }
            });
    </script>
    @endsection

