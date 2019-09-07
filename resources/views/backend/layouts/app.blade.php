<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - @yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/backend/styles.css') }}" />
</head>

<body>
  
  @section('side_navigation')
    <div class="side-nav ">
      <ul id="main-nav" class="sidenav sidenav-fixed">
        <li class="bold"><a href="#" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold {{ (request()->segment(1) == 'settings') ? 'active' : '' }}">
            <a href="#" class="waves-effect waves-teal "><i class="material-icons">settings</i>Settings</a>
          <ul class="">
            <li class="{{ (request()->segment(1) == 'settings' && request()->segment(2) == 'general') ? 'active' : '' }}"><a href="{{ route('admin.settings', 'general') }}" class="waves-effect waves-teal">General</a></li>
            <li class="{{ (request()->segment(1) == 'settings' && request()->segment(2) == 'social') ? 'active' : '' }}"><a href="{{ route('admin.settings', 'social') }}" class="waves-effect waves-teal ">Social Media</a></li>
            
          </ul>
        </li>
      </ul>      
    </div>     
        
  @show
  @section('top_bar')
    <div class="navbar-fixed">
      <nav class="navbar top-menu">
        <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4">Logo</a>
        <ul id="top-right">
          <li><a href='#' >user</a></li>
          <li><a href="#" class="dropdown-toggle icon-item" data-toggle="dropdown">
            <i class="material-icons ">notifications</i>
            <span class="badge top-right">4</span>
          </a></li>
          <li><a class='dropdown-trigger' href='#' data-target='user-drop'><i class="material-icons">settings</i></a>
            <ul id='user-drop' class='dropdown-content'>
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider" tabindex="-1"></li>
              <li><a href="#!">three</a></li>
              <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
              <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul>
          </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a> </div>
      </nav>
    </div>
  @show
  <div class="content">
    @yield('content')
  </div>
  @section('footer')
  <footer class="page-footer main-wrap ">
   Footer Content  
  </footer>
  @show
  <script src="{{ asset('js/backend/scripts.js') }}"></script>
  @section('page_script')
  @show
</body>


</html>