<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .download-link {
            text-decoration: none;
            color: #007bff; /* Adjust the color based on your design */
        }

        .download-link:hover {
            text-decoration: underline;
        }

        .multiline-content {
            white-space: pre-wrap;
            /* Adjust the width of the "Request Description" column */
            width: 100%; /* Change this value as needed */
        }

        .section-heading {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .left-section {
            width: 50%; /* Adjust the width based on your design */
            vertical-align: top;
        }

        .right-section {
            width: 50%; /* Adjust the width based on your design */
            vertical-align: top;
        }

        .center-align {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td class="left-section">
                    <div class="section-heading">S:No</div>
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
</body>
</html>
