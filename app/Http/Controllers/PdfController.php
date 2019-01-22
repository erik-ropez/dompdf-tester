<?php

namespace App\Http\Controllers;

class PdfController extends Controller
{
    public function __invoke()
    {
        $htmlPath = env('HTML_PATH', 'test.html');

        $html = file_get_contents($htmlPath);

        $pdf = app('dompdf.wrapper');

        $pdf->loadHTML($html);

        return $pdf->stream();
    }
}
