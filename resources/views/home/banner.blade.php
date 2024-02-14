<div class="banner_section layout_padding">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <h1 class="banner_taital">Developer Section</h1>
          <!-- <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p> -->
          <!-- <div class="read_bt"><a href="#">Get your Resume</a></div> -->
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <h1 class="banner_taital">Developer Section</h1>
          <!-- <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p> -->
          <!-- <div class="read_bt"><a href="#">Get your Resume</a></div> -->
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <h1 class="banner_taital">Developer Section</h1>
          <!-- <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p> -->
          <!-- <div class="read_bt"><a href="#">Get your Resume</a></div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-10 offset-lg-1">
    <div class="block">
      <!-- <div class="title"><strong>Developer 1</strong></div> -->
      <div>
        <div class="table-responsive">
          <table class="table table-fixed resumetable table-bordered table-dark table-hover">
            <thead class="thead-dark">
              <tr>
                <th colspan="12" class="" style="font-size: 24px;">Pending Tasks</th>
              </tr>
              @if($data2->isEmpty())
              <tr>
                <th colspan="12">
                  <p class="text-light text-center" style="font-size: 16px;">Nothing to display</p>
                </th>
              </tr>
              @else
              <tr>
                <th scope="col">S.No.</th>
                <th scope="col">Request ID</th>
                <th scope="col">Request Type</th>
                {{-- <th scope="col">Request Description</th> --}}
                <th scope="col">Writer Name</th>
                <th scope="col">Customer Code</th>
                {{-- <th scope="col">Customer Name</th> --}}
                {{-- <th scope="col">Received Date</th> --}}
                {{-- <th scope="col">Attachment 1</th>
                <th scope="col">Attachment 2</th>
                <th scope="col">Attachment 3</th> --}}
                <th scope="col">Submission Date</th>
                {{-- <th scope="col">Due Date</th> --}}
                {{-- <th scope="col">Days Remaining</th> --}}
                <th scope="col">Uploaded Work</th>
                <th scope="col">Actions</th>
                {{-- <th scope="col">Status</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($data2 as $data2)
              <tr>
                <td scope="row">{{$data2->id}}</td>
                <td>{{$data2->request_id}}</td>
                <td>{{$data2->request_type}}</td>
                {{-- <td>{{$data2->request_desc}}</td> --}}
                <td>{{$data2->user_name}}</td>
                <td>{{$data2->customer_code}}</td>
                {{-- <td>{{$data2->customer_name}}</td> --}}
                {{-- <td>{{$data2->received_date}}</td> --}}
                {{-- <td> <a href="{{ url('/download', urlencode($data2->s_doc1)) }}">Download</a></td>
                <td><a href="{{ url('/download', urlencode($data2->s_doc2)) }}">Download</a></td>
                <td><a href="{{ url('/download', urlencode($data2->s_doc3)) }}">Download</a></td> --}}
                <!-- <td>{{$data2->s_doc1}}</td>
            <td>{{$data2->s_doc2}}</td>
            <td>{{$data2->s_doc3}}</td> -->
                <td>{{$data2->given_date}}</td>
                {{-- <td>{{$data2->due_date}}</td> --}}
                {{-- <td>{{$data2->days_left}}</td> --}}
                <td>
                  <a href="{{ url('/download', urlencode($data2->s_doc1)) }}">Download</a> <br>
                  <a href="{{ url('/download', urlencode($data2->s_doc2)) }}">Download</a> <br>
                  <a href="{{ url('/download', urlencode($data2->s_doc3)) }}">Download</a>
                </td>

                <td class="text-center">
                  <button class="btn btn-dark">
                    <a href="{{url('/viewuser',$data2->id)}}">View</a>

                  </button>
                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>




        <div class="table-responsive">
          <table class="table resumetable table-bordered table-dark table-hover mt-5">
            <thead class="thead-dark">
              <tr>
                <th colspan="12" class="" style="font-size: 24px;">Completed Tasks</th>
              </tr>
              @if($record->isEmpty())
              <tr>
                <th colspan="12">
                  <p class="text-light text-center" style="font-size: 16px;">Nothing to display</p>
                </th>
              </tr>
              @else
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Request ID</th>
                <th scope="col">Request Type</th>
                <th scope="col">Request Description</th>
                <th scope="col">Customer Code</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Received Date</th>
                <th scope="col">Given Date</th>
                <th scope="col">Due Date</th>
                <th scope="col">Days Left</th>
                <th scope="col">Supporting Documents</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($record as $data)
              <tr>
                <td scope="row">{{$data->id}}</td>
                <td>{{$data->request_id}}</td>
                <td>{{$data->request_type}}</td>
                <td>{{$data->request_desc}}</td>
                <td>{{$data->customer_code}}</td>
                <td>{{$data->customer_name}}</td>
                <td>{{$data->received_date}}</td>
                <td>{{$data->given_date}}</td>
                <td>{{$data->due_date}}</td>
                <td>{{$data->days_left}}</td>
                <td>
                  <a href="{{ url('/download', urlencode($data->s_doc1)) }}">Download</a> <br>
                  <a href="{{ url('/download', urlencode($data->s_doc2)) }}">Download</a> <br>
                  <a href="{{ url('/download', urlencode($data->s_doc3)) }}">Download</a>
                </td>

                <td class="text-center">
                  <a href="{{url('/viewuser',$data->id)}}">View</a>
                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
</div>