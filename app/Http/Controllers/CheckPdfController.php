<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckPdfController extends Controller
{
    public function getPdf()
    {
        $data = [
            'id' => 23,
            'ref' => '6444-48748v-uyvh9843-rv8983y98',
            'date' => '02-10-2020',
            'time' => '10am',
            'phone' => '081274748748',
            'message' => 'this is a new message',
            'name' => 'ngozi nzeonu',   
            'services' => [
                [
                'name' => 'Kids Hair',
                'price' => 102.00
                ],
                [
                    'name' => 'Hair Treatment',
                    'price' => 400.00
                ]

            ],

        ];
        $text = "this is the message that should be there";
        //$booking = (object) $data;
        //$pdf_name = Str::slug($data['name'], '-').time().'.pdf';    
        $pdf_name = Str::slug($data['name'], '-').'-'.$data['id'].time().'.pdf';    
        //  return dd($data);   
        $pdf =  Pdf::loadView('pdf.bookingpdf',['booking' => $data, 'referer' => 'kefcuts', 'text' => $text])->save(storage_path("app/public/pdf/$pdf_name"));        

        return $pdf->stream();
    }
}
