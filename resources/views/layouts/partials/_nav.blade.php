<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('route_path')}}">Laravarte>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('route_path')}}">Home</a></li>
                <li><a href="{{route('about_path')}}">About</a></li>
                <li><a href="#contact"> Artisan </a> </i>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Laravel.com</a></li>
                        <li><a href="#">Laravel.io</a></li>
                        <li><a href="#">Laracast</a></li>
                        <li><a href="#">larajobs</a></li>
                        <li><a href="#">Laravel news</a></li>
                        <li><a href="#">Laracart</a></li>

                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
