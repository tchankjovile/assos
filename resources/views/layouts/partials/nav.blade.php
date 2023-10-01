<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="{{route('home')}}" class="logo m-0 float-start">{{config('app.name')}}<span class="text-primary">.</span></a>
                    </div>
                    <div class="col-8 text-center ">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="{{Route::is('home')?'active':''}}"><a href="{{route('home')}}"> <i class="fa fa-home"></i> Home</a></li>
                           <li class="{{Route::is('prestations.*')?'active':''}}"><a href="{{route('prestations.index')}}">Prestations</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            @if (auth()->check())
                            <li class="border rounded bg-primary p-1"><a  href="{{route('dashboard')}}">Mon Dashboard</a></li>
                            @else
                            <li><a class=" rounded" href="{{route('login')}}">Se connecter</a></li>
                            <li><a class="bg-primary rounded" href="{{route('adhesion.ask')}}">Demander l'adhesion</a></li>
                            @endif

                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>

                        <a class=" btn btn-success rounded" href="{{route('donate')}}"><i class="fas fa-money-bill-wave"></i> Faire un don</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
