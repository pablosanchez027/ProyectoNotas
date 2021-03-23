<?php

namespace Database\Seeders;

use App\Models\Notas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo' => '¿Para qué sirve Composer?',
            'contenido' => 'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imagenes y mucho más.',
        ]);

        Notas::create([
            'titulo' => 'Instalación de Laravel',
            'contenido' => File::get(__DIR__.'/notas/install.html'),
        ]);

        Notas::create([
            'titulo' => 'Rutas y JSON',
            'contenido' => File::get(__DIR__.'/notas/routes.html'),
        ]);

        Notas::create([
            'titulo' => 'Front Controller',
            'contenido' => 'Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.',
        ]);

        Notas::create([
            'titulo' => 'Cambia el formato de parámetros dinámicos',
            'contenido' => File::get(__DIR__.'/notas/changeFormat.html'),
        ]);
    }
}
