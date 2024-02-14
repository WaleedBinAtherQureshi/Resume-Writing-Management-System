<div class="page-content">
  <!-- Page Header-->
  {{-- <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Request Assignment</h2>
    </div>
  </div> --}}
  <!-- Breadcrumb-->
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active">Request Assignment </li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="block">
            <div class="title">
              <strong class="d-block">Request Assignment</strong>
              <span class="d-block">Insert New Request</span>
            </div>
            <div class="block-body">
              <form action="{{ url('requests') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="form-control-label pr-5">Request Type:</label>
                  <br>
                  <input type="text" name="req_type" list="types" autocomplete="off">
                  <datalist id="types">
                    <option value="Type 1">
                    <option value="Type 2">
                    <option value="Type 3">
                    <option value="Type 4">
                    <option value="Type 5">
                  </datalist>
                </div>

                <div class="form-group">
                  <label class="form-control-label pr-5">Request ID:</label>
                  <br>
                  <input type="text" disabled style="width: 200px;" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-control-label pr-5">Request Description:</label>
                  <textarea class="form-control" name="request_desc" rows="5"></textarea>
                </div>

                <div class="form-group">
                  <label class="form-control-label">Customer Code:</label>
                  <input type="number" placeholder="Enter code" class="form-control" name="codedev1">
                </div>

                <div class="form-group">
                  <label class="form-control-label">Customer Name:</label>
                  <input type="text" placeholder="Enter name" class="form-control" name="customernamedev1">
                </div>

                <div class="form-group">
                  <label class="form-control-label">Received Date:</label>
                  <input type="date" class="form-control" name="startdatedev1">
                </div>

                <div class="form-group">
                  <label class="form-control-label">Due Date:</label>
                  <input type="date" class="form-control" name="enddatedev1">
                </div>

                <div class="form-group">
                  <label class="form-control-label">Supporting Docs:</label>
                  <input type="file" class="form-control" name="s_doc1">
                  <input type="file" class="form-control" name="s_doc2">
                  <input type="file" class="form-control" name="s_doc3">
                </div>

                <div class="form-group">
                  <label class="form-control-label">Select Developer:</label>
                  <br>
                  <input autocomplete="off" type="text" name="developer" list="developer">
                  <datalist id="developer">
                    @foreach ($data as $developer)
                    <option value="{{ $developer->name }}">
                      @endforeach
                  </datalist>
                </div>

                <div class="form-group">
                  <label class="form-control-label">Select Level:</label>
                  <br>
                  <input autocomplete="off" type="text" name="level" list="levels">
                  <datalist id="levels">
                    <option value="top-level">
                    <option value="senior-level">
                    <option value="middle-level">
                    <option value="junior-level">
                  </datalist>
                </div>

                <div class="form-group">
                  <label class="form-control-label">Select Subject:</label>
                  <br>
                  <input autocomplete="off" type="text" name="subject" list="subject">
                  <datalist id="subject">
                    <option value="Accounting">
                    <option value="Finance">
                    <option value="IT">
                    <option value="Teaching">
                    <option value="Construction">
                    <option value="Oil and Refinery">
                    <option value="Healthcare">
                    <option value="Marketing">
                    <option value="Logistics">
                    <option value="Operations">
                  </datalist>
                </div>

                <div class="form-group">
                  <input type="submit" value="Insert" class="btn btn-primary">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="block margin-bottom-sm">
        <div class="title"><strong>Pending Requests (given to developers)</strong></div>
        @if($data2->isEmpty())
        <p>Nothing to display</p>
        @else
        <div class="table-responsive">
          <table class="table">
            <thead>
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
                <th scope="col">Status</th>
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
                  <a href="{{ url('/download', urlencode($data2->user_file1)) }}">Download</a><br>
                  <a href="{{ url('/download', urlencode($data2->user_file2)) }}">Download</a><br>
                  <a href="{{ url('/download', urlencode($data2->user_file3)) }}">Download</a><br>
                </td>
                <td>
                  <a href="{{url('/view',$data2->id)}}">View</a> -
                  <a href="{{'edit/'.$data2->id}}">Edit</a> -
                  <a href="{{url('/delete',$data2->id)}}">Delete</a>
                  <br>
                  <form action="{{ url('/mark-as-complete', $data2->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary btn-sm" type="submit">Mark as Complete</button>
                  </form>

                </td>
                <td>{{$data2->status}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
      </div>
    </div>
    <div class="col-lg-12">
      <div class="block margin-bottom-sm">
        <div class="title"><strong>Completed Requests</strong></div>
        @if($data3->isEmpty())
        <p>Nothing to display</p>
        @else
        <div class="table-responsive">
          <table class="table">
            <thead>
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
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data3 as $data3)
              <tr>
                <td scope="row">{{$data3->id}}</td>
                <td>{{$data3->request_id}}</td>
                <td>{{$data3->request_type}}</td>
                {{-- <td>{{$data3->request_desc}}</td> --}}
                <td>{{$data3->user_name}}</td>
                <td>{{$data3->customer_code}}</td>
                {{-- <td>{{$data3->customer_name}}</td> --}}
                {{-- <td>{{$data3->received_date}}</td> --}}
                {{-- <td> <a href="{{ url('/download', urlencode($data3->s_doc1)) }}">Download</a></td>
                <td><a href="{{ url('/download', urlencode($data3->s_doc2)) }}">Download</a></td>
                <td><a href="{{ url('/download', urlencode($data3->s_doc3)) }}">Download</a></td> --}}
                <!-- <td>{{$data3->s_doc1}}</td>
            <td>{{$data3->s_doc2}}</td>
            <td>{{$data3->s_doc3}}</td> -->
                <td>{{$data3->given_date}}</td>
                {{-- <td>{{$data3->due_date}}</td> --}}
                {{-- <td>{{$data3->days_left}}</td> --}}
                <td>
                  <a href="{{ url('/download', urlencode($data3->user_file1)) }}">Download</a><br>
                  <a href="{{ url('/download', urlencode($data3->user_file2)) }}">Download</a><br>
                  <a href="{{ url('/download', urlencode($data3->user_file3)) }}">Download</a><br>
                </td>
                <td>
                  <a href="{{url('/view',$data3->id)}}">View</a> -
                  <a href="{{'edit/'.$data3->id}}">Edit</a> -
                  <a href="{{url('/delete',$data3->id)}}">Delete</a>
                  <br>

                  <form action="{{ url('/mark-as-incomplete', $data3->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary btn-sm" type="submit">Mark as Incomplete</button>
                  </form>
                </td>
                <td>{{$data3->status}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
      </div>
    </div>
  </section>