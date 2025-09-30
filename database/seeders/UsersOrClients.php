<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersOrClients extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $users = [
            ['name' => 'Ana Silva', 'email' => 'ana.silva@example.com'],
            ['name' => 'Bruno Oliveira', 'email' => 'bruno.oliveira@example.com'],
            ['name' => 'Carlos Pereira', 'email' => 'carlos.pereira@example.com'],
            ['name' => 'Daniela Costa', 'email' => 'daniela.costa@example.com'],
            ['name' => 'Eduardo Santos', 'email' => 'eduardo.santos@example.com'],
            ['name' => 'Fernanda Lima', 'email' => 'fernanda.lima@example.com'],
            ['name' => 'Gabriel Almeida', 'email' => 'gabriel.almeida@example.com'],
            ['name' => 'Helena Rocha', 'email' => 'helena.rocha@example.com'],
            ['name' => 'Igor Martins', 'email' => 'igor.martins@example.com'],
            ['name' => 'Juliana Ferreira', 'email' => 'juliana.ferreira@example.com'],
            ['name' => 'Lucas Mendes', 'email' => 'lucas.mendes@example.com'],
            ['name' => 'Mariana Souza', 'email' => 'mariana.souza@example.com'],
            ['name' => 'Nicolas Gomes', 'email' => 'nicolas.gomes@example.com'],
            ['name' => 'Olivia Dias', 'email' => 'olivia.dias@example.com'],
            ['name' => 'Paulo Nascimento', 'email' => 'paulo.nascimento@example.com'],
            ['name' => 'Quiteria Martins', 'email' => 'quiteria.martins@example.com'],
            ['name' => 'Rafael Lima', 'email' => 'rafael.lima@example.com'],
            ['name' => 'Sofia Alves', 'email' => 'sofia.alves@example.com'],
            ['name' => 'Thiago Ribeiro', 'email' => 'thiago.ribeiro@example.com'],
            ['name' => 'Ursula Santos', 'email' => 'ursula.santos@example.com'],
            ['name' => 'Vinícius Cardoso', 'email' => 'vinicius.cardoso@example.com'],
            ['name' => 'Wesley Pires', 'email' => 'wesley.pires@example.com'],
            ['name' => 'Yasmin Teixeira', 'email' => 'yasmin.teixeira@example.com'],
            ['name' => 'Zé Carlos', 'email' => 'ze.carlos@example.com']
        ];

        foreach ($users as $user) {
            $ddd = rand(11, 99);
            $number = rand(1000, 9999) . '-' . rand(1000, 9999);

            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt('password'),
                'contact' => "($ddd) $number",
            ]);
        }
    }
}
