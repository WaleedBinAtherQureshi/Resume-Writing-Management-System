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
                    <div class="title text-center"><strong class="d-block ">Add New Request</strong></div>
                    <div class="block-body">
                        <form action="{{url('request')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label pr-5">Request Type: </label>
                                <input type="text" name="req_type" list="developer" autocomplete="off">
                                <datalist id="developer">
                                    <option value="Type 1">
                                    <option value="Type 2">
                                    <option value="Type 3">
                                    <option value="Type 4">
                                    <option value="Type 5">
                                </datalist>
                            </div>
                            <div class="form-group d-flex">
                                <label class="form-control-label pr-5">Request ID: </label>
                                <input type="text" disabled="" style="width: 200px;" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label pr-5">for Customer: </label>
                                <input type="text" name="customer" list="customer" autocomplete="off">
                                <datalist id="customer">
                                    @foreach($data1 as $i)
                                    <option value="{{ $i->cust_name }}">
                                        @endforeach
                                </datalist>
                            </div>
                            <div class="form-group ">
                                <label class="form-control-label pr-5">Request Description: </label>
                                <textarea class="form-control" name="request_desc" rows="5"></textarea>
                            </div>
                            <div class="form-group ">
                                <label class="form-control-label pr-5">Supporting Docs: </label>
                                <div class="text-center">
                                    <label for="file1">File 1:</label>
                                    <input type="file" name="s_doc1" id="file1" accept=".pdf, .doc, .docx" required>
                                    <br>

                                    <label for="file2">File 2:</label>
                                    <input type="file" name="s_doc2" id="file2" accept=".pdf, .doc, .docx" required>
                                    <br>

                                    <label for="file3">File 3:</label>
                                    <input type="file" name="s_doc3" id="file3" accept=".pdf, .doc, .docx" required>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Submit Request" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 p-3">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Request Type</th>
                            <th scope="col">Request ID</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Description</th>
                            <th scope="col">Supporting Docs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $i)
                        <tr>
                            <th scope="row">{{$i->id}}</th>
                            <td>{{$i->req_type}}</td>
                            <td></td>
                            <td>{{$i->customer}}</td>
                            <td style="word-wrap: break-word; max-width: 300px;">{{$i->request_description}}</td>
                            <td>
                            <a href="{{ route('request.blob', ['documentId' => $i->id, 'blobNumber' => 1]) }}">Document 1</a>
    <a href="{{ route('request.blob', ['documentId' => $i->id, 'blobNumber' => 2]) }}">Document 2</a>
    <a href="{{ route('request.blob', ['documentId' => $i->id, 'blobNumber' => 3]) }}">Document 3</a>
                                <!-- {{$i->s_doc1}}
                                {{$i->s_doc2}}
                                {{$i->s_doc3}} -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.footeradmin')

</body>

</html>