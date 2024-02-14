<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\developer1;


class DeleteController extends Controller
{
    public function delete($id){
        $data = Developer1::find($id);

        // Check if the record exists
        if ($data) {
            // Delete the associated file
            if (!empty($data->file_path)) {
                File::delete('assets/' . $data->file_path);
            }
    
            // Delete the record
            $data->delete();
    
            return redirect()->back()->with('success', 'Record and associated file deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }
}
