<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {

       $data = [
            ['nombre'=>'Ana','apellido'=>'Pérez','correo'=>'ana1@demo.com','salario'=>3500.00],
            ['nombre'=>'Luiía','apellido'=>'López','correo'=>'maria1@demo.com','salario'=>3800.75],
            ['nombre'=>'Carlos','apellido'=>'Mendoza','correo'=>'carlos@demo.com','salario'=>2900],
            ['nombre'=>'Sofs','apellido'=>'García','correo'=>'luis1@demo.com','salario'=>4200.50],
            ['nombre'=>'María','apellido'=>'Rojas','correo'=>'sofia@demo.com','salario'=>3100],
            ['nombre'=>'Jorge','apellido'=>'Vega','correo'=>'jorge@demo.com','salario'=>3300],
            ['nombre'=>'Lucía','apellido'=>'Torrez','correo'=>'lucia@demo.com','salario'=>3050],
            ['nombre'=>'Pedro','apellido'=>'Suárez','correo'=>'pedro@demo.com','salario'=>3600],
            ['nombre'=>'Daniela','apellido'=>'Flores','correo'=>'daniela@demo.com','salario'=>4000],
            ['nombre'=>'Miguel','apellido'=>'Nina','correo'=>'miguel@demo.com','salario'=>3700]
        ];

        foreach ($data as $e) { Empleado::create($e); }
    }
}
