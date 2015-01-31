<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/bootstrap.min..js') }}
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="wb-da-logo">
          <a class="wb-da-logo" href="" title="The World Bank Analytics Data"></a>
          <div class="title-logo">Educational Data Analytics</div> <!-- End title logo -->
          <div class="login_conner">
            <ul>
              @if(Auth::user())
              <li>{{ HTML::link('logout','Logout')}}</li>
              @else
              <li>{{ HTML::link('login','Login')}}</li>
              @endif
            </ul>
        </div>
        </div> <!-- End logo -->
        <nav class="nav-bar">
          <ul class="navbar-nav">
            <li>{{ HTML::link('/', 'Home')}}</li>
            <li><a href="upload">Import Data</a></li>
            <li><a href="search">Search</a></li>
            <li><a href="calculation">Calculation</a></li>
            <li><a href="visualization">Visualization</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </nav> <!-- End navigator -->
      </div> <!-- End header -->
      <div id="main">
        @yield('content')
      </div> <!-- End main -->
      <div id="footer">
        <div class="clear-fix"></div> <!-- fix position -->
        <div class="footer-content">
          <a class="wbg-footer-logo" href="/" title="The World Bank Analytic Data"></a> <!-- End footer logo -->
          <div class="copyright">&copy
            <script language="javascript">
              <!-- // BEGIN
              if( typeof _copyrightYear === 'undefined' || _copyrightYear ) { var t = new Date(); var year = t.getYear(); if( year < 2000 ) year += 1900; document.write(year); }
              // END -->
            </script> All Rights Reserved
          </div>
        </div> <!-- End footer main content -->
        <div class="clear-fix"></div> <!-- fix position -->
      </div> <!-- End footer -->
    </div> <!-- End container -->
  </body>
</html>