<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Prasun Paul Chowdhury">
<meta name="description" content="Novatree CMS">
<meta name="keywords" content="Novatree CMS">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>

<title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

<!-- Font -->
<link href="{{ asset('assets/fonts/font-material-icon.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/fonts/font-roboto.css') }}" rel="stylesheet" type="text/css"/>

<!-- Styles -->
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
