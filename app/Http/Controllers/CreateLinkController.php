<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SheetDB\SheetDB;

class CreateLinkController extends Controller
{
    public function generate($api_key)
    {
        $sheetdb  = new SheetDB($api_key);
        $response = $sheetdb->get();
        $pilihan  = ['KS', 'S', 'SS'];
        $kelamins  = ['Pria', 'Wanita'];

        foreach ($response as $key => $i) {
            $nik  = $i->NIK;
            $nama = $i->Nama;
            $usia = $i->Usia;
            $l_usaha  = $i->l_usaha;
            $j_usaha  = $i->j_usaha;
            $t_usaha  = $i->t_usaha;
            $kelamin  = $kelamins[mt_rand(0, 1)];

            $A1 = $pilihan[mt_rand(0, 2)];
            $A2 = $pilihan[mt_rand(0, 2)];
            $A3 = $pilihan[mt_rand(0, 2)];
            $A4 = $pilihan[mt_rand(0, 2)];
            $A5 = $pilihan[mt_rand(0, 2)];
            $A6 = $pilihan[mt_rand(0, 2)];


            //* B. Inovasi Keuangan DIgital - Penyelesaian Transaksi
            $B1 = $pilihan[mt_rand(0, 2)];
            $B2 = $pilihan[mt_rand(0, 2)];
            $B3 = $pilihan[mt_rand(0, 2)];
            $B4 = $pilihan[mt_rand(0, 2)];
            $B5 = $pilihan[mt_rand(0, 2)];
            $B6 = $pilihan[mt_rand(0, 2)];


            //* C. Inovasi Keuangan DIgital - Literasi Keuangan
            $C1 = $pilihan[mt_rand(0, 2)];
            $C2 = $pilihan[mt_rand(0, 2)];
            $C3 = $pilihan[mt_rand(0, 2)];
            $C4 = $pilihan[mt_rand(0, 2)];

            //* d. Inovasi Keuangan DIgital - Financial Technology
            $D1 = $pilihan[mt_rand(0, 2)];
            $D2 = $pilihan[mt_rand(0, 2)];
            $D3 = $pilihan[mt_rand(0, 2)];
            $D4 = $pilihan[mt_rand(0, 2)];
            $D5 = $pilihan[mt_rand(0, 2)];

            $links[$key] = "https://docs.google.com/forms/d/e/1FAIpQLSfOgZRFxS7vR1k_sgpxRGpfSt3nkzdlcJX4eqeJl6vX_6PqEA/viewform?usp=pp_url&entry.668653239=" . $nik . "&entry.2116052852=" . $nama . "&entry.1209734726=" . $usia . "&entry.1088631575=" . $l_usaha . "&entry.1419417160=" . $j_usaha . "&entry.1488039728=" . $kelamin . "&entry.1065476184=" . $t_usaha . "&entry.1374418886=VI+:+SLTA/Sederajat&entry.287575942=" . $A1 . "&entry.1438821077=" . $A2 . "&entry.1248188350=" . $A3 . "&entry.273565261=" . $A4 . "&entry.2045092164=" . $A5 . "&entry.1086282732=" . $A6 . "&entry.1671453322=" . $B1 . "&entry.738303801=" . $B2 . "&entry.967173569=" . $B3 . "&entry.76452034=" . $B4 . "&entry.61782384=" . $B5 . "&entry.436524103=" . $B6 . "&entry.435304650=" . $C1 . "&entry.574698428=" . $C2 . "&entry.804774145=" . $C3 . "&entry.812341410=" . $C4 . "&entry.1060472253=" . $D1 . "&entry.708138760=" . $D2 . "&entry.698809201=" . $D3 . "&entry.605455295=" . $D4 . "&entry.224399124=" . $D5 . "";
        }

        $datas = $links;

        return view('index', compact('datas'));
    }
}
