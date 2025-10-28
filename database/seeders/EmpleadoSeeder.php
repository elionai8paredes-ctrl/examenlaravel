<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nombre'=>'ariel','apellido'=>'rojas','correo'=>'ariel.rojas@demo.com','salario'=>3500.00],
            ['nombre'=>'jose','apellido'=>'abran','correo'=>'jose.abran@demo.com','salario'=>4200.50],
            ['nombre'=>'kevin','apellido'=>'quispe','correo'=>'kevin.quispe@demo.com','salario'=>3800.75],
        ];
        foreach ($data as $e) { Empleado::create($e); }
    }
}