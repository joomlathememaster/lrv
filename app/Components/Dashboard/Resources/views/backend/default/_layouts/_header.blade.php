<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('assets/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('templates/backend/default/css/admin.css?v=1.01')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    @section('styles')
        {{-- Here goes the page level styles --}}
    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>