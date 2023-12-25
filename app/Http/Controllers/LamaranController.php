<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\KategoriLowongan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $datalowongan = Lowongan::all();
        return view('admin.page.lamaran.view',compact('datalowongan'), ["title" => "Data Pelatihan"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = KategoriLowongan::all();
        $lowongan = Lowongan::findOrFail($id);

        return view('admin.page.lamaran.show', [
            'lowongan' => $lowongan,
            'kategori' => $kategori
        ]);
       
    }

    public function downloadDocuments($id)
    {
        // Find the Lowongan item by its ID
        $item = Lowongan::findOrFail($id);
    
        // Create a new ZipArchive instance
        $zip = new ZipArchive();
    
        // Define the name and path of the ZIP file
        $zipFileName = "documents_{$item->id}.zip";
        $zipFilePath = public_path("uploads/{$zipFileName}");
    
        // Open the ZIP file for writing
        $zip->open($zipFilePath, ZipArchive::CREATE);
    
        // Add each document to the zip archive
        foreach (['dokumen_riwayat', 'dokumen_lamaran', 'dokumen_transkrip', 'dokumen_tambahan'] as $document) {
            // Get the file path of each document
            $filePath = public_path("uploads/{$document}/{$item->{$document}}");
    
            // Check if the file exists before adding it to the zip archive
            if (file_exists($filePath)) {
                // Add the file to the ZIP archive with a new name
                $zip->addFile($filePath, "{$document}.pdf");
            } else {
                // Handle the case where the file does not exist
                // You can log a message, redirect the user, etc.
            }
        }
    
        // Close the ZIP file
        $zip->close();
    
        // Ensure the ZIP file was created successfully before attempting to download it
        if (file_exists($zipFilePath)) {
            // Download the ZIP file and delete it after sending
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            // Handle the case where the ZIP file was not created successfully
            // You can log a message, redirect the user, etc.
            return redirect()->back()->with('error', 'Failed to create ZIP file.');
        }
    }
    

}
