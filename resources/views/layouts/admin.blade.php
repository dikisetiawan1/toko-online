<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addon-style')
  </head>
  <body>

<div class="page-dashboard" >
  <div class="d-flex" id="wrapper" data-aos="fade-right">
    <!-- sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">
        <img src="/images/admin.png" alt="" class="my-4 " style="width:150px">
      </div>
      <div class="list-group list-group-flush">
        <a href="/dashboard.html" class="list-group-item list-group-item-action ">
          Dashboard
        </a>
        <a href="#" class="list-group-item  list-group-item-action">
          Products
        </a>
        <a href="#" class="list-group-item  list-group-item-action">
          Categories
        </a>
        <a href="#" class="list-group-item  list-group-item-action">
          Transactions
        </a>
        <a href="#" class="list-group-item  list-group-item-action">
          Users
        </a>
       
        <a href="/index.html" class="list-group-item  list-group-item-action">
          Sign Out
        </a>
      </div>
      </div>

      <!-- Page content -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" 
        data-aos="fade-down">

    <div class="container-fluid">
        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">&laquo; Menu</button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">

        </span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
  <!-- desktop menu -->
    <ul class="navbar-nav d-none d-lg-flex ml-auto">
          <li class="nav-item dropdown">
      <a 
      href="#"
      class="nav-link"
      id="navbarDropdown"
      role="button"
      data-toggle="dropdown"

      ></a>
      <img src="/images/icon-user.png" alt="cart-empty" class="rounded-circle mr-2 profile-picture">
      Hi, Diki
        <div class="dropdown-menu">
          <a href="/" class="dropdown-item">Logout</a>
        </div>
      </li>

    </ul>

  <!-- mobile menu -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a href="#" class="nav-link">
            Hi, Diki
          </a>
        </li>
        
      </ul>
</div>
</div>
        </nav>
         <!-- section content -->
        
      {{-- content --}}
      @yield('content')

    </div>
    
  </div>
  
  
</div>




@stack('prepend-script')
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      $('#menu-toggle').click(function (e){
        e.preventDefault();
        $('#wrapper').toggleClass('toggled');
      })
    </script>
@stack('addon-script')

  </body>
</html>
