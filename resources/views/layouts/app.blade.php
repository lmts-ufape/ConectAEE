<body>
  @include('layouts.header')

  <!-- c1e9aa -->
  <div id="page-container" style="background-color:#f6e6cf">
    <div id="content-wrap">
      @include('layouts.body')
      <br><br><br>
    </div>

    @include('layouts.footer')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  @include('layouts.scripts')
</body>
