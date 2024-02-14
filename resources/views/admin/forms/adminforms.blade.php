<!DOCTYPE html>
<html>
  @include('admin.cssadmin')
  <body>
    @include('admin.headeradmin')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.adminslider')
      <!-- Sidebar Navigation end-->
      @include("admin.forms.formsbody")
        @include('admin.footeradmin')

      </body>
      </html>