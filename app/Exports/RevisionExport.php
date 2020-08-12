<?php

namespace App\Exports;

use App\Revision;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class RevisionExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Revision::all();
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $cellRange = 'A1:AJ1'; //toda la cabecera
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
    public function headings(): array
    {
        // $data = DB::table('pagos')
        //     ->select('alum_dni','alum_ape','alum_nom','montoanual','descuento','inicial','marzo',
        //                 'abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre')
        //     ->get();
        //     return $data



        return   [
            'ID',
            'MARCA',
            'MODELO',
            'NUMERO DE SERIE',
            'NUMERO DE PALET',
            'El embalaje se encuentra en buen estado',
            'El Case esta en buen estado',
            'La Tablet enciende',
            'Cuenta con Cargador y Cable de alimentación original y en perfecto',
            'Cuenta con Baterías en buen estado',
            'Tiene Puerto USB o micro USB',
            'Tiene Ranura para memoria externa microSD',
            'Tiene Pantalla de 10.1" en buen estado',
            'La Resolución de pantalla es:',
            'Tiene CPU de cuatro núcleos o Quad Core',
            'Tiene Velocidad de CPU de 1.8 GHz.',
            'Memoria RAM instalada',
            'Memoria de almacenamiento',
            'La Cámara frontal funciona',
            'La Cámara trasera funciona',
            'El Flash de la Cámara trasera funciona',
            'La Conexión WI FI 802.1 1 b/g/n funciona',
            'La Conexión Bluetooth funciona',
            'El parlante y la conexión de auriculares funciona',
            'El microfono incorporado funciona',
            'Cuenta con FUNDA en buen estado',
            'Cuenta con Teclado en perfecto funcionamiento',
            'Indicar la VERSIÓN del Sistema operativo Android',
            'Se revisó la Configuración y arranque inicial',
            'Se realizo la Verificación de Aplicaciones Básicas instaladas',
            'Lista de Aplicaciones complementarias instaladas',
            'OBSERVACIONES O COMENTARIOS DE HARDWARE',
            'OBSERVACIONES O COMENTARIOS DE SOFTWARE',
            'DNI',
            'HORA',
            'Estado final de la Tablet'
        ];

    }
}
