<div class="page-content">
  <!-- Page Header-->
  <div class="page-header no-margin-bottom">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Basic forms</h2>
    </div>
  </div>
  <!-- Breadcrumb-->
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active">Edit</li>
    </ul>
  </div>
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="block">
            <div class="title"><strong class="d-block">Update Data</strong><span class="d-block">Edit</span></div>
            <div class="block-body">
              <form action="{{url('edit',$edit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                                <input type="hidden" name="id" value="{{ $edit->id}}" autocomplete="off">
                  </div>
                <div class="form-group">
                                <label class="form-control-label pr-5">Request Type: </label>
                                <br>
                                <input type="text" name="req_type" list="types" value="{{ $edit->request_type }}" autocomplete="off">
                                <datalist id="types">
                                    <option value="Type 1">
                                    <option value="Type 2">
                                    <option value="Type 3">
                                    <option value="Type 4">
                                    <option value="Type 5">
                                </datalist>
                  </div>
                  <div class="form-group">
                                <label class="form-control-label pr-5">Request ID: </label>
                                <br>
                                <input  type="text" disabled="" style="width: 200px;" class="form-control" value="{{ $edit->request_id }}">
                            </div>

                            <div class="form-group ">
                                <label class="form-control-label pr-5">Request Description: </label>
                                <textarea class="form-control" name="request_desc" rows="5" >{{ $edit->request_desc }}</textarea>
                            </div>
                <div class="form-group">
                  <label class="form-control-label">Customer Code</label>
                  <input type="number" placeholder="enter code" class="form-control" name="codedev1" value="{{ $edit->customer_code }}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Customer Name</label>
                  <input type="text" placeholder="enter name" class="form-control" name="customernamedev1" value="{{ $edit->customer_name }}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Received Date</label>
                  <input type="date" class="form-control" name="startdatedev1" value="{{ $edit->received_date }}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Due Date</label>
                  <input type="date" class="form-control" name="enddatedev1" value="{{ $edit->due_date }}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Supporting Docs: </label>
                  <input type="file" class="form-control" name="s_doc1" value="{{ $edit->s_doc1 }}">
                  <input type="file" class="form-control" name="s_doc2" value="{{ $edit->s_doc2 }}">
                  <input type="file" class="form-control" name="s_doc3" value="{{ $edit->s_doc3 }}">
                </div>
                <div class="form-group">
                  <label class="form-control-label">Select Developer</label>
                  <br>
                  <input autocomplete="off" type="text" name="developer" list="developer" value="{{ $edit->user_name}}">
                  <datalist id="developer">
                    @foreach ($data as $developer)
                    <option value="{{ $developer->name }}">
                      @endforeach
                  </datalist>
                </div>
                <div class="form-group">
                  <label class="form-control-label">Select Level</label>
                  <br>
                  <input autocomplete="off" type="text" name="level" list="levels" value="{{ $edit->level }}">
                  <datalist id="levels">
                    <option value="top-level">
                    <option value="senior-level">
                    <option value="middle-level">
                    <option value="junior-level">
                  </datalist>
                </div>
                <div class="form-group">
                  <label class="form-control-label">Select Subject</label>
                  <br>
                  <input autocomplete="off" type="text" name="subject" list="subject" value="{{ $edit->subject }}">
                  <datalist id="subject">
                    <option value="Accounting">
                    <option value="Finance">
                    <option value="IT">
                    <option value="Teaching">
                    <option value="Construction">
                    <option value="Oil and Refinary">
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
  </section>