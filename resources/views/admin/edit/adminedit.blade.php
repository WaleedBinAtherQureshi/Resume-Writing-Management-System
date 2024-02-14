<!DOCTYPE html>
<html>
    <base href="/public">
  @include('admin.cssadmin')
  <body>
    @include('admin.headeradmin')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.adminslider')
      <!-- Sidebar Navigation end-->
      @include("admin.edit.editbody")
        @include('admin.footeradmin')

      </body>
      </html>