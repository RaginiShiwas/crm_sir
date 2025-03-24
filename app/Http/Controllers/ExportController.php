<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Models\PartyMaster; // Adjust the namespace if needed

class ExportController extends Controller
{
    public function exportPdf()
    {
        $parties = PartyMaster::all(); // Assuming your Party model is named PartyMaster

        // Load the view with the data
        $html = view('', compact('parties'))->render();

        // Initialize Dompdf
        $dompdf = new Dompdf();

        // Load HTML content
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF (inline or download)
        return $dompdf->stream("export.pdf");
    }
}
