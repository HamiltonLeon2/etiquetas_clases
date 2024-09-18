<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Support\Facades\Storage;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        // Validar el archivo y los campos adicionales
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        // Procesar el archivo Excel
        $file = $request->file('file');
        $data = Excel::toCollection(null, $file);

        // Obtener el valor de las celdas I5 e I6
        $cellI5 = $data->first()->get(4)->get(8);
        $cellI6 = $data->first()->get(5)->get(8);

        // Procesar todas las filas a partir de la fila 10
        $processedData = $data->first()->slice(9)->map(function ($row) {
            return [
                'columna_2' => $row[1],
                'columna_3' => $row[2],
                'columna_4' => $row[3],
                'columna_5' => $row[4],
                'columna_6' => $row[5],
                'columna_7' => $row[6],
                'columna_8' => $row[7],
                'columna_9' => $row[8],
                'columna_10' => $row[9],
                'columna_11' => $row[10],
                'columna_12' => $row[11],
                'columna_13' => $row[12],
            ];
        });

        // Convertir los datos procesados a JSON
        $jsonData = json_encode($processedData);

        // Guardar el JSON en el sistema de archivos (opcional)
        Storage::put('data.json', $jsonData);

        // Generar PDF incluyendo los valores de I5 e I6
        $pdf = PDF::loadView('pdf_template', compact('jsonData', 'cellI5', 'cellI6'));

        return $pdf->download('archivo.pdf');
    }
}
