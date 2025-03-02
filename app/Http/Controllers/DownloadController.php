<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadController extends Controller
{
    /**
     * Download the catalogue PDF file with streaming for large files
     *
     * @return StreamedResponse
     */
    public function downloadCatalogue()
    {
        // Check if the file exists in public/downloads
        $path = public_path('downloads/catalogue.pdf');

        if (file_exists($path)) {
            return response()->download($path, 'CatalogueArmacadabra.pdf', [
                'Content-Type' => 'application/pdf'
            ]);
        }

        $storagePath = storage_path('app/public/downloads/CatalogueArmacadabra.pdf');

        if (file_exists($storagePath)) {
            return response()->download($storagePath, 'CatalogueArmacadabra.pdf', [
                'Content-Type' => 'application/pdf'
            ]);
        }

        return "File not found. Please check that the file exists at " . $path . " or " . $storagePath;
    }
}
