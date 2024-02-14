<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tables;
use App\Models\developer1;
use App\Models\User;
use App\Models\AddNewCustomer;
use App\Models\Requests;

class InsertController extends Controller
{
    // public function insert()
    // {
    //     return view("admin.forms.adminforms");
    // }
    // public function test($id)
    // {
    // $first = tables::where('id', $id)->first(); //this will select the row with the given id

    // //now save the data in the variables;
    // $sn = $first->customer_code;
    // $cust = $first->customer_name;
    // $lendon = $first->received_date;
    // $gucci = $first->due_date;
    // $levi = $first->days_left;
    // $first->delete();

    // $second = new developer1();
    // $second->customer_code = $sn;
    // $second->customer_name = $cust;
    // $second->received_date = $lendon;
    // $second->due_date = $gucci;
    // $second->days_left = $levi;
    // $second->save();

    // //then return to your view or whatever you want to do
    // return view('admin.tables.admintables');

    // }
    public function add_post(Request $request)
    {

        $validatedData = $request->validate([
            'code'         => 'required|int',
            'customername' => 'required|string',
            'startdate'    => 'required|date',
            'enddate'    => 'required|date',
        ]);

        $post = new tables;
        $post->customer_code = $request->code;
        $post->customer_name = $request->customername;
        $post->received_date = $validatedData['startdate'];
        $post->due_date = $validatedData['enddate'];
        $post->save();
        return redirect()->back();
    }
    public function add_post_dev1(Request $request)
    {

        $validatedData2 = $request->validate([
            'codedev1'         => 'required|int',
            'customernamedev1' => 'required|string',
            'startdatedev1'    => 'required|date',
            's_doc1' => 'max:3072',
            's_doc2' => 'max:3072',
            's_doc3' => 'max:3072',
            // 'filedev1' => 'required|max:10000|mimes:doc,docx,pdf',
            // 'givendate'   => 'required|date',
            'enddatedev1'    => 'required|date',
            'developer' => 'required|string',
            'level' => 'required|string',
            'subject' => 'required|string',
        ]);

        $post2 = new developer1;
        // $file=$request->filedev1;
        // $filename=time().'.'.$file->getClientOriginalExtension();
        // $request->filedev1->move('assets',$filename);
        // $post2->filedev1=$filename;
        // $post2->s_doc1 = $request->s_doc1->getClientOriginalName();
        // $post2->s_doc2 = $request->s_doc2->getClientOriginalName();
        // $post2->s_doc3 = $request->s_doc3->getClientOriginalName();

        // $doc1 = time() . '_' . $request->s_doc1->getClientOriginalName();
        // $doc2 = time() . '_' . $request->s_doc2->getClientOriginalName();
        // $doc3 = time() . '_' . $request->s_doc3->getClientOriginalName();

        // $request->s_doc1->move(public_path('sup_docs'),$doc1);
        // $request->s_doc2->move(public_path('sup_docs'),$doc2);
        // $request->s_doc3->move(public_path('sup_docs'),$doc3);

        $file1 = $request->s_doc1;
        $filename1 = time() . '-' . $file1->getClientOriginalName();
        $request->s_doc1->move('assets', $filename1);
        $post2->s_doc1 = $filename1;
        $file2 = $request->s_doc2;
        $filename2 = time() . '-' . $file2->getClientOriginalName();
        $request->s_doc2->move('assets', $filename2);
        $post2->s_doc2 = $filename2;
        $file3 = $request->s_doc3;
        $filename3 = time() . '-' . $file3->getClientOriginalName();
        $request->s_doc3->move('assets', $filename3);
        $post2->s_doc3 = $filename3;
        $post2->request_type = $request->req_type;
        $post2->request_desc = $request->request_desc;
        $post2->customer_code = $request->codedev1;
        $post2->customer_name = $request->customernamedev1;
        $post2->received_date = $validatedData2['startdatedev1'];
        // $post->given_date = $validatedData['givendate'];
        $post2->due_date = $validatedData2['enddatedev1'];
        $selectedDeveloper = $request->input('developer');
        $post2->user_name = $selectedDeveloper;
        $post2->user_id = User::where('name', $selectedDeveloper)->value('id');
        // $selectedUserId = User::where('name', $selectedDeveloper)->value('id');
        $post2->level = $request->level;
        $post2->subject = $request->subject;
        $post2->save();
        return redirect()->back();
    }
    public function add_post_user_dev1(Request $request, $id)
    {

        $validatedData2 = $request->validate([
            'user_file1' => 'max:3072',
            'user_file2' => 'max:3072',
            'user_file3' => 'max:3072',
        ]);

        $post2 = Developer1::find($id);

        $file1 = $request->user_file1;
        $filename1 = $filename1 = time() . '-' . $file1->getClientOriginalName();
        $request->user_file1->move('assets', $filename1);
        $post2->user_file1 = $filename1;
        $file2 = $request->user_file2;
        $filename2 = time() . '-' . $file2->getClientOriginalName();
        $request->user_file2->move('assets', $filename2);
        $post2->user_file2 = $filename2;
        $file3 = $request->user_file3;
        $filename3 = time() . '-' . $file3->getClientOriginalName();
        $request->user_file3->move('assets', $filename3);
        $post2->user_file3 = $filename3;
        $post2->save();
        return redirect()->back();
    }
    public function markAsComplete($id)
    {
        // Update the status of the record in the database
        developer1::where('id', $id)->update(['status' => 'complete']);

        // Redirect back or wherever you need
        return redirect()->back();
    }
    public function markAsInComplete($id)
    {
        // Update the status of the record in the database
        developer1::where('id', $id)->update(['status' => 'incomplete']);

        // Redirect back or wherever you need
        return redirect()->back();
    }
    public function formdropdown()
    {
        $data = User::where('role', 'user')->get();
        $data2 = Developer1::where('status', 'incomplete')->get();
        $data3 = Developer1::where('status', 'complete')->get();
        return view('admin.forms.adminforms', compact('data', 'data2', 'data3'));
    }

    // view: add customers page
    public function add_customer()
    {
        // return view('admin.add_customer');
        $data = AddNewCustomer::all();
        return view('admin.add_customer', compact('data'))->with('message', 'Customer Added Successfully');
    }

    // form submission: add customer page
    public function add_new_customer(Request $request)
    {
        $this->validate($request, [
            'customernamedev1' => 'required',
            'customeremaildev1' => 'required'
        ]);
        $cust = new AddNewCustomer;
        $cust->cust_name = $request->customernamedev1;
        $cust->cust_email = $request->customeremaildev1;
        $cust->save();
        return redirect()->back()->with('message', 'Customer Added Successfully');
    }


    // view: request page
    // public function request()
    // {
    //     $data = Requests::all();
    //     $data1 = AddNewCustomer::all();
    //     return view('admin.forms.formsbody', compact('data', 'data1'));
    // }

    // add request
    // public function add_request(Request $request){
    //     $req = new Requests;
    //     $req->req_type = $request->req_type;
    //     $req->customer = $request->customer;
    //     $req->request_description = $request->request_desc;
    //     $req->s_doc1 = $request->s_doc1;
    //     $req->s_doc2 = $request->s_doc2;
    //     $req->s_doc3 = $request->s_doc3;
    //     $req->save();
    //     return redirect()->back()->with('message','Request Added Successfully');
    // }
    //     public function getBlobData($documentId, $blobNumber)
    // {
    //     $document = Requests::find($documentId);

    //     $blobData = null;
    //     switch ($blobNumber) {
    //         case 1:
    //             $blobData = $document->s_doc1;
    //             break;
    //         case 2:
    //             $blobData = $document->s_doc2;
    //             break;
    //         case 3:
    //             $blobData = $document->s_doc3;
    //             break;
    //     }
    //     return response()->download($blobData);
    // }
}
