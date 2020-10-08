<?php

namespace App\Exports;


use App\Revision;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

use DB;

class RevisionExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Revision::select('id_revision','hora','usuario','trab_ape','trab_nom','marca','modelo','n_serie','n_palet','embalaje','case_revision','tablet_enciende',
            'cargador_cable','bateria','puerto_micro_usb','microsd','pantalla','resolucion','nucleos','velocidad_cpu','memoria_ram','memoria_almace',
            'camara_frontal','camara_trasera','flash','wifi','bluetooth','parlantes_auriculares','microfono','funda','teclado','version','configuracion',
            'veri_apk','lista_apk','estado','comyob_hardware','comyob_software')
            ->get();
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
            'HORA',
            'DNI',
            'Apellidos',
            'Nombres',
            'MARCA',
            'MODELO',
            'NUMERO DE SERIE',
            'NUMERO DE PALET',
            'El embalaje se encuentra en buen estado',
            'El Case esta en buen estado',
            'La Tablet enciende',
            'Cuenta con Cargador y Cable de alimentacion original y en perfecto',
            'Cuenta con Baterías en buen estado',
            'Tiene Puerto USB o micro USB',
            'Tiene Ranura para memoria externa microSD',
            'Tiene Pantalla de 10.1" en buen estado',
            'La Resolucion de pantalla es:',
            'Tiene CPU de cuatro nucleos o Quad Core',
            'Tiene Velocidad de CPU de 1.8 GHz.',
            'Memoria RAM instalada',
            'Memoria de almacenamiento',
            'La Camara frontal funciona',
            'La Camara trasera funciona',
            'El Flash de la Camara trasera funciona',
            'La Conexion WI FI 802.1 1 b/g/n funciona',
            'La Conexion Bluetooth funciona',
            'El parlante y la conexion de auriculares funciona',
            'El microfono incorporado funciona',
            'Cuenta con FUNDA en buen estado',
            'Cuenta con Teclado en perfecto funcionamiento',
            'Indicar la VERSION del Sistema operativo Android',
            'Se reviso la Configuracion y arranque inicial',
            'Se realizo la Verificacion de Aplicaciones Basicas instaladas',
            'Lista de Aplicaciones complementarias instaladas',
            'Estado final de la Tablet',
            'OBSERVACIONES O COMENTARIOS DE HARDWARE',
            'OBSERVACIONES O COMENTARIOS DE SOFTWARE'
        ];

    }
}
