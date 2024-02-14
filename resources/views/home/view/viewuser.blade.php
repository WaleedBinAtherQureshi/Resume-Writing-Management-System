<!DOCTYPE html>
<html>
<base href="/public">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User View </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admincss/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admincss/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admincss/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admincss/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admincss/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admincss/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <div class="page-content-alter">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">View Details</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ul>
            </div>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-bottom: 20px;
                }

                th,
                td {
                    padding: 8px;
                    text-align: left;
                }

                th {
                    background-color: #f2f2f2;
                }

                .download-link {
                    text-decoration: none;
                    color: #007bff;
                    /* Adjust the color based on your design */
                }

                .download-link:hover {
                    text-decoration: underline;
                }

                .multiline-content {
                    white-space: pre-wrap;
                    /* Adjust the width of the "Request Description" column */
                    width: 100%;
                    /* Change this value as needed */
                }

                .section-heading {
                    font-weight: bold;
                    margin-bottom: 5px;
                }

                .left-section {
                    width: 50%;
                    /* Adjust the width based on your design */
                    vertical-align: top;
                }

                .right-section {
                    width: 50%;
                    /* Adjust the width based on your design */
                    vertical-align: top;
                }

                .center-align {
                    text-align: center;
                }
            </style>
            </head>

            <body>
                <div class="container">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">S. No</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->id}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Request ID</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->request_id}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Request Type</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->request_type}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Request Description</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->request_desc}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Content Writer Name</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->user_name}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Customer Code</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->customer_code}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Customer Name</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->customer_name}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Received Date</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->received_date}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">File1</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content"><a href="{{ url('/download', urlencode($data2->s_doc1)) }}">Download</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">File2</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content"><a href="{{ url('/download', urlencode($data2->s_doc2)) }}">Download</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">File3</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content"><a href="{{ url('/download', urlencode($data2->s_doc3)) }}">Download</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Given Date</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->given_date}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Due Date</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->due_date}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="left-section">
                                    <div class="section-heading">Days Left</div>
                                </td>
                                <td class="right-section">
                                    <div class="multiline-content">{{$data2->days_left}}</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center-align" style="margin-top: 20px;">
                        <a href="{{ url('/export-pdf-user', $data2->id) }}">Export to PDF</a>
                    </div>
                    <div class="center-align" style="margin-top: 20px;">
                        <h2>Upload Work</h2>
                        <form action="{{ url('viewuser',$data2->id) }}" method="post" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <!-- <label class="form-control-label">Supporting Docs: </label> -->
                                <input type="file" class="form-control" name="user_file1">
                                <input type="file" class="form-control" name="user_file2">
                                <input type="file" class="form-control" name="user_file3">
                            </div>
                            <!-- Add your other form fields here -->
                            @csrf
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </body>

</html>


