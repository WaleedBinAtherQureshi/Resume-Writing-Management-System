<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\developer1;
use App\Models\User;
use Illuminate\Support\Facades\File;

class EditController extends Controller
{
    public function update(Request $request, $id)
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
        $post2 = developer1::find($request->id);

        // Delete previous files
        if ($request->hasFile('s_doc1') && !empty($post2->s_doc1)) {
            File::delete('assets/' . $post2->s_doc1);
        }

        if ($request->hasFile('s_doc2') && !empty($post2->s_doc2)) {
            File::delete('assets/' . $post2->s_doc2);
        }

        if ($request->hasFile('s_doc3') && !empty($post2->s_doc3)) {
            File::delete('assets/' . $post2->s_doc3);
        }

        // Update file names
        if ($request->hasFile('s_doc1')) {
            $file1 = $request->file('s_doc1');
            $filename1 = $filename1 = time() . '-' . $file1->getClientOriginalName();
            $file1->move('assets', $filename1);
            $post2->s_doc1 = $filename1;
        }

        if ($request->hasFile('s_doc2')) {
            $file2 = $request->file('s_doc2');
            $filename2 = time() . '-' . $file2->getClientOriginalName();
            $file2->move('assets', $filename2);
            $post2->s_doc2 = $filename2;
        }

        if ($request->hasFile('s_doc3')) {
            $file3 = $request->file('s_doc3');
            $filename3 = time() . '-' . $file3->getClientOriginalName();
            $file3->move('assets', $filename3);
            $post2->s_doc3 = $filename3;
        }
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
    public function edit($id)
    {
        $data = User::where('role', 'user')->get();
        $edit = developer1::find($id);
        return view('admin.edit.adminedit', compact('edit', 'data'));
    }
}
