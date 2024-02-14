<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\developer1;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ViewDownloadController extends Controller
{
    public function download($filename)
    {
        $originalFilename = pathinfo($filename, PATHINFO_FILENAME);
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
    
        // Create a new filename without the timestamp
        $newFilename = $originalFilename . '.' . $extension;
    
        $filePath = public_path('assets/' . $filename);
    
        if (file_exists($filePath)) {
            return response()->download($filePath, $newFilename);
        } else {
            abort(404, 'File not found');
        }
    }
    public function view($id)
    {
        $data2 = developer1::find($id);
        return view("admin.view.view",compact('data2'));
    }
    public function exportToPdf($id)
    {
    $data2 = developer1::find($id);

    $pdf = SnappyPdf::loadView('admin.view.pdfview', compact('data2'));

    return Response::make($pdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="exported-data.pdf"',
    ]);
    }
    public function viewuser($id)
    {
        $data2 = developer1::find($id);
        return view("home.view.viewuser",compact('data2'));
    }
    public function exportToPdfuser($id)
    {
    $data2 = developer1::find($id);

    $pdf = SnappyPdf::loadView('home.view.pdfviewuser', compact('data2'));

    return Response::make($pdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="exported-data.pdf"',
    ]);
    }
    
}
