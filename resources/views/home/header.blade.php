<div class="header_main">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="/home"><img src="images/logo.png"></a></div>
             <ul>
                @if (Route::has('login'))
            
                @auth
                <li class="nav-item">             <x-app-layout>
       
                </x-app-layout></li>
                @else
                <li><a class="login-button" href="{{route('login')}}">Login</a></li>
                
                @endauth
                @endif
             </ul>
       </nav>
    </div>
    <div class="container-fluid">
       <div class="logo"><a href="/home"><img src="images/logo.png"></a></div>
       <div class="menu_main">
          <ul>
             {{-- <li style="padding-top:15px;" class="active"><a href="/home">Dashboard</a></li> --}}
             @if (Route::has('login'))
            
             @auth
             <li>             <x-app-layout>
    
             </x-app-layout></li>
             @else
             <li><a href="{{route('login')}}">Login</a></li>
             
             @endauth
             @endif
          </ul>
       </div>
    </div>
 </div>