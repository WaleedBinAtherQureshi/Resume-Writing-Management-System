<!DOCTYPE html>
<html>
  @include('admin.cssadmin')
  <body>
    @include('admin.headeradmin')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.adminslider')
      <!-- Sidebar Navigation end-->
      @include('admin.tables.tablebody')
        @include('admin.footeradmin')

      </body>

      </html>