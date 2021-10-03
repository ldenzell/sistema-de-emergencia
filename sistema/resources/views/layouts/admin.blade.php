<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ env('APP_NAME') }} | @yield('titulo')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- select2-bootstrap4-theme -->
        <link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
        @stack('styles')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">                
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-user"></i>
                            {{ auth()->user()->nombre }} {{ auth()->user()->paterno }} {{ auth()->user()->materno }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="background-color: #007bff">
                            <a class="btn btn-flat btn-block btn-sm" href="{{ route('logout') }}" style="color:white;"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="{{ route('home') }}" class="brand-link">
                    <!-- <img src="/dist/img/AdminLTELogo.png"
                        class="brand-image img-circle elevation-2"
                        style="opacity: .8">
                        
                    <span class="brand-text font-weight-light" style="font-weight: 5px;">{{ __('Sistema de emergencias') }}</span> -->
                    <img src="{{ URL::to('/assets/img/ambulancia.png') }}" width="45px" heigh="45px">
                    <br>
                    <span class="brand-text font-weight-light" style="font-weight: 5px;">{{ __('Sistema de emergencias') }}</span> 
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        @include('layouts.partials.nav')
                    </nav>
                </div>
            </aside>
            <div class="content-wrapper">
                @yield('header')
                <section class="content">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="container-fluid">
                                    <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
                                        {{ Session::get('message') }}
                                        @if($errors->any())
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <script>
                                            $('.alert').slideDown();
                                            setTimeout(function(){ $('.alert').slideUp(); }, 10000);
                                        </script>
                                    </div>
                                </div>
                            @endif
                            @yield('contenido')
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('home') }}">{{ env('APP_NAME') }}</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <!-- jQuery -->
        <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('/dist/js/demo.js')}}"></script>
        <!-- Select2 -->
        <script src="{{asset('/plugins/select2/js/select2.full.min.js')}}"></script>
        <script>
            $(function(){
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4',
                });
            })
        </script>
        @stack('scripts')
    </body>
</html>