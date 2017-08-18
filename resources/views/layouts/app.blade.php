<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="page-top" class="fixed-nav">
<div id="app">
    @if( Request::path() != 'login')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav">
                <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-area-chart"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="#">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text">Tables</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
                        <i class="fa fa-fw fa-wrench"></i>
                        <span class="nav-link-text">
                Components</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="#">Static Navigation</a>
                        </li>
                        <li>
                            <a href="#">Custom Card Examples</a>
                        </li>
                        <li>
                            <a href="#">Blank Page</a>
                        </li>
                        <li>
                            <a href="#">Login Page</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
                        <i class="fa fa-fw fa-sitemap"></i>
                        <span class="nav-link-text">
                Menu Levels</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third
                                Level</a>
                            <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">    <div class="container-fluid">@endif
        @yield('content')

        </div>
    </div>


</div>

<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
