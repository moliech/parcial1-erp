<?php

 namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['document_number' => '1001', 'first_name' => 'Esteban', 'last_name' => 'Molina', 'phone' => '3101234567'],
            ['document_number' => '1002', 'first_name' => 'Heiber', 'last_name' => 'López', 'phone' => '3119876543'],
            ['document_number' => '1003', 'first_name' => 'Carlos', 'last_name' => 'Pérez', 'phone' => '3124567890'],
            ['document_number' => '1004', 'first_name' => 'Ana', 'last_name' => 'Gómez', 'phone' => '3157654321'],
            ['document_number' => '1005', 'first_name' => 'María', 'last_name' => 'Rodríguez', 'phone' => '3180001122'],
        ];

        foreach ($clients as $data) {
            Client::create($data);
        }
    }
}
