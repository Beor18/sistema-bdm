<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">BDM - Gestion</a>


    </div>

    <ul style="margin-right: 6%;" class="nav navbar-nav navbar-right">
                
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> Bienvenido {{ Auth::user()->name }}</a>
                       
                    </li>
                
        </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
        
            <ul class="nav" id="side-menu">

                @if(Auth::check())
                    @if(Auth::user()->admin==1)
                                    <!--<li>
                    <a href="{{ url('') }}"><i class="fa fa-backward"></i> Volver</a>
                </li>-->
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Escritorio
                    </a>
                </li>
                    @endif
                @endif

                <!-- Permiso para ver menu usuario-->

                @if(Auth::check())
                    @if(Auth::user()->admin==0)
                                    <!--<li>
                    <a href="{{ url('') }}"><i class="fa fa-backward"></i> Volver</a>
                </li>-->
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-dashboard fa-fw"></i> Escritorio
                    </a>
                </li>
                    @endif
                @endif

                <!-- FIN Permiso para ver menu usuario-->

                 <li>
                    <a href="{{url('admin/language')}}">
                        <i class="fa fa-language"></i> Proveedores
                    </a>
                </li>
                @if(Auth::check())
                    @if(Auth::user()->admin==1)
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> Control de Stock
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>   Pensando...
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> Articulos
                            </a>
                        </li>
                    </ul>
                </li>
                    @endif
                @endif

            <!-- Permiso para ver menu usuario-->
                @if(Auth::check())
                    @if(Auth::user()->admin==0)
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-bullhorn"></i> Articulos
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/articlecategory')}}">
                                <i class="glyphicon glyphicon-list"></i>   Categorias
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/article')}}">
                                <i class="glyphicon glyphicon-bullhorn"></i> Articulos
                            </a>
                        </li>
                    </ul>
                </li>
                    @endif
                @endif
            <!-- FIN Permiso para ver menu usuario-->

                <!--<li>
                    <a href="#">
                        <i class="glyphicon glyphicon-camera"></i> Photo items
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav collapse">
                        <li>
                            <a href="{{url('admin/photoalbum')}}">
                                <i class="glyphicon glyphicon-list"></i> Photo albums
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/photo')}}">
                                <i class="glyphicon glyphicon-camera"></i> Photo
                            </a>
                        </li>
                    </ul>
                </li> -->

                @if(Auth::check())
                    @if(Auth::user()->admin==1)
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="glyphicon glyphicon-user"></i> Usuarios
                    </a>
                </li>
                    @endif
                @endif
                <li>
                    <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>