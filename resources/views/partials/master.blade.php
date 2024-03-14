<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
  <div class="adminx-container">
    @include('partials.navbar')

    <div class="adminx-content">
      <div class="adminx-main-content">
        @yield('content')
      </div>
    </div>
  </div>
  @include('partials.script')
  @yield('script')
</body>

</html>
