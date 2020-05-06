
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="{{$hotel->description  ?? 'Hotel Description'}}" />
    <meta name="author" content="SmartUniversity" />
    <title>{{$hotel->name ?? 'Hotel Admin Panle'}}</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('backend/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--bootstrap -->
    <link href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <!-- morris chart -->
    <link href="{{asset('backend/assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/plugins/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/material_style.css')}}">
    <!-- animation -->
    <link href="{{asset('backend/assets/css/pages/animate_page.css')}}" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{asset('backend/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/img/favicon.ico')}}" />

    <!-- specific page css -->
    @yield('css')
</head>
<!-- END HEAD -->