<!--
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="/services">Services</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link disabled" href="/posts">Blog</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                            <a class="nav-link disabled" href="/posts/create">Create Post</a>
                    </li>
            </ul>
           <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>  
        </div>
      </nav>    -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
                &nbsp;
        </ul>
        
        <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="/services">Services</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link disabled" href="/posts">Blog</a>
                </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if(Auth::guest())
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                        <li class="nav nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span> </a>

                                <ul class="dropdown-menu" role="menu">
                                        <li>  <a  href="/dashboard" >Dashboard</a>   </li>
                                        <li> <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{csrf_field()}}
                                        </form>
                                        </li>
                                </ul>
                        </li>   
                @endif
        </ul>
 </div>
</div>
</nav>