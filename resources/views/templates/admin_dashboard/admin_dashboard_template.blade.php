@extends("layouts.kitadmin.kitadmin_layout")

@section("sidebar")
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="{{url('/')}}">
                <span class="align-middle">{{config('app.name')}} | Admin</span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li @class(["sidebar-item","active"=>Route::is("admin.home")])>
                    <a class="sidebar-link" href="{{route('admin.home')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Acceuil</span>
                    </a>
                </li>

                <li @class(["sidebar-item","active"=>Route::is("admin.demandes.index")])>
                    <a class="sidebar-link" href="{{route('admin.demandes.index')}}">
                        <i class="align-middle" data-feather="home"></i> <span class="align-middle">Toutes Les demandes</span>
                    </a>
                </li>

                <li  @class(["sidebar-item","active"=>Route::is("admin.demandes.listvalid")])>
                    <a class="sidebar-link"  href="{{route('admin.demandes.listvalid')}}">
                        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Demandes Approuvées</span>
                    </a>
                </li>
                <li  @class(["sidebar-item","active"=>Route::is("admin.demandes.listinvalid")])>
                    <a class="sidebar-link"  href="{{route('admin.demandes.listinvalid')}}">
                        <i class="align-middle" data-feather="share"></i> <span class="align-middle">Demandes non approuvées </span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Parametres & Configurations
                </li>

                <li @class(["sidebar-item"])>
                    <a class="sidebar-link" href="{{''}}">
                        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Parametres</span>
                    </a>
                </li>

                <li @class(["sidebar-item","active"=>Route::is("admin.membres.*")])>
                    <a class="sidebar-link" href="{{route('admin.membres.index')}}">
                        <i class="align-middle" data-feather="user"></i> <span
                            class="align-middle">Membres</span>
                    </a>
                </li>
                <li @class(["sidebar-item","active"=>Route::is("admin.dons.index")])>
                    <a class="sidebar-link" href="{{route('admin.dons.index')}}">
                        <i class="align-middle" data-feather="user"></i> <span
                            class="align-middle">Dons</span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Espaces
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('home')}}">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Espace client</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="#">
                        <i class="align-middle" data-feather="map"></i> <span class="align-middle">Mon espace</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
@endsection

@section("navbar")
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                @stack("top_navigation")
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        <span class="text-dark"><i class="fa fa-user"></i> User</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                            Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i>
                            Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                            Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section("footer")
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>{{config('app.name')}}</strong></a>
                        &copy;
                    </p>
                </div>
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Support</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Help Center</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push("scripts")
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset("js/validation.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.js"
    integrity="sha512-T+j1sjPaHbyld8mIECU9hNHPT+kYC+H7EfLEiZT53kOuG+X2SPQeNLdO5ujX2cGKL7Gf708eb2wxo1CMLwYxJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @includeIf("layouts.kitadmin._partials.izitoast")
@endpush

@push("stylesheets")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
    integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/customstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">
@endpush
