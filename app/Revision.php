<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $table = 'revision';
    protected $primaryKey = 'id_revision';
    public $timestamps = false;
    protected $fillable = [
        'marca',
        'modelo',
        'n_serie',
        'n_palet',
        'embalaje',
        'case_revision',
        'cargador_cable',
        'tablet_enciende',
        'bateria',
        'puerto_micro_usb',
        'microsd',
        'pantalla',
        'resolucion',
        'nucleos',
        'velocidad_cpu',
        'memoria_ram',
        'memoria_almace',
        'camara_frontal',
        'camara_trasera',
        'flash',
        'wifi',
        'bluetooth',
        'parlantes_auriculares',
        'microfono',
        'funda',
        'teclado',
        'version',
        'configuracion',
        'veri_apk',
        'lista_apk',
        'comyob_hardware',
        'comyob_software',
        'usuario',
        'hora',
        'estado'
    ];
    protected $guarded = [];
}
