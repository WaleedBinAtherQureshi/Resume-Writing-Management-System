<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Tables</h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active">Tables            </li>
      </ul>
    </div>
    <section class="no-padding-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="block margin-bottom-sm">
              <div class="title"><strong>New Resume for Development</strong></div>
              <div class="table-responsive"> 
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Customer Code</th>
                      <th>Customer Name</th>
                      <th>Received Date</th>
                      <th>Due Date</th>
                      <th>Days Left</th>
                      <!-- <th>Allocate</th>
                      <th>Flag</th>
                      <th>View Resume</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data)   
                    <tr>
                      <th scope="row">{{$data->id}}</th>
                      <td>{{$data->customer_code}}</td>
                      <td>{{$data->customer_name}}</td>
                      <td>{{$data->received_date}}</td>
                      <td>{{$data->due_date}}</td>
                      <td>{{$data->days_left}}</td>
                      <td>
                        {{-- <a href="{{ route('test',$id) }}">Button</a>; --}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="block">
              <div class="title"><strong>Developer 1</strong></div>
              <div class="table-responsive"> 
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Customer Code</th>
                      <th>Customer Name</th>
                      <th>Received Date</th>
                      <th>Given Date</th>
                      <th>Due Date</th>
                      <th>Days Left</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data2 as $data2)   
                    <tr>
                      <th scope="row">{{$data2->id}}</th>
                      <td>{{$data2->customer_code}}</td>
                      <td>{{$data2->customer_name}}</td>
                      <td>{{$data2->received_date}}</td>
                      <td>{{$data2->given_date}}</td>
                      <td>{{$data2->due_date}}</td>
                      <td>{{$data2->days_left}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="block">
              <div class="title"><strong>Developer 2</strong></div>
              <div class="table-responsive"> 
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter       </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  