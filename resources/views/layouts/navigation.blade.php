<div id="navigation" style="background-color:#f6e6cf">
  @php($url = str_replace(URL::to('/'),'',URL::current()))

  <div style="margin-top: -30px" class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <br>
        <h4>
          @yield('navbar')
        </h4>
        <br>
      </div>
    </div>
  </div>

</div>
