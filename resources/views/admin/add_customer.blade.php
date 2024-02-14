<!DOCTYPE html>
<html>
@include('admin.cssadmin')

<body>
  @include('admin.headeradmin')
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.adminslider')
    <!-- Sidebar Navigation end-->

    <div class="page-content">
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Add Customer</li>
        </ul>
      </div>
      <div class="p-3">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session()->get('message')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
      </div>
      <div class="col-lg-8  p-5">
        <div class="admin-block">
          <div class="title text-center"><strong class="d-block ">Add New Customer</strong></div>
          <div class="block-body">
            <form action="{{url('add_customer')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label class="form-control-label">Customer Code</label>
                <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
              </div>
              <div class="form-group">
                <label class="form-control-label">Customer Name:</label>
                <input type="text" placeholder="enter name" class="form-control" name="customernamedev1"
                  autocomplete="off">
              </div>
              <div class="form-group">
                <label class="form-control-label">Customer E-mail:</label>
                <input type="email" placeholder="enter email" class="form-control" name="customeremaildev1"
                  autocomplete="off">
              </div>
              <div class="form-group text-center">
                <input type="submit" value="Add Customer" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-8 p-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Customer Code</th>
              <th scope="col">Customer Name</th>
              <th scope="col">Customer Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $i)
            <tr>
              <th scope="row">{{$i->id}}</th>
              <td>abc</td>
              <td>{{$i->cust_name}}</td>
              <td>{{$i->cust_email}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    @include('admin.footeradmin')

</body>

</html>