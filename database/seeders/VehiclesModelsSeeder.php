<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carModels = [
            ['name' => 'Fusca', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Civic', 'manufacturer' => 'Honda'],
            ['name' => 'Corolla', 'manufacturer' => 'Toyota'],
            ['name' => 'Onix', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Gol', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Palio', 'manufacturer' => 'Fiat'],
            ['name' => 'HB20', 'manufacturer' => 'Hyundai'],
            ['name' => 'Tucson', 'manufacturer' => 'Hyundai'],
            ['name' => 'Kwid', 'manufacturer' => 'Renault'],
            ['name' => 'Tracker', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Compass', 'manufacturer' => 'Jeep'],
            ['name' => 'Renegade', 'manufacturer' => 'Jeep'],
            ['name' => 'Argo', 'manufacturer' => 'Fiat'],
            ['name' => 'Sandero', 'manufacturer' => 'Renault'],
            ['name' => 'Duster', 'manufacturer' => 'Renault'],
            ['name' => 'Nivus', 'manufacturer' => 'Volkswagen'],
            ['name' => 'C3', 'manufacturer' => 'Citroën'],
            ['name' => 'A3', 'manufacturer' => 'Audi'],
            ['name' => 'X1', 'manufacturer' => 'BMW'],
            ['name' => 'Jetta', 'manufacturer' => 'Volkswagen'],
            ['name' => 'C4 Lounge', 'manufacturer' => 'Citroën'],
            ['name' => 'Fusion', 'manufacturer' => 'Ford'],
            ['name' => 'EcoSport', 'manufacturer' => 'Ford'],
            ['name' => 'Tiguan', 'manufacturer' => 'Volkswagen'],
            ['name' => 'S10', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Hilux', 'manufacturer' => 'Toyota'],
            ['name' => 'Ranger', 'manufacturer' => 'Ford'],
            ['name' => 'Troller', 'manufacturer' => 'Troller'],
            ['name' => 'Civic Si', 'manufacturer' => 'Honda'],
            ['name' => 'City', 'manufacturer' => 'Honda'],
            ['name' => 'Mobi', 'manufacturer' => 'Fiat'],
            ['name' => 'Fiorino', 'manufacturer' => 'Fiat'],
            ['name' => 'Master', 'manufacturer' => 'Renault'],
            ['name' => 'Kangoo', 'manufacturer' => 'Renault'],
            ['name' => 'Doblò', 'manufacturer' => 'Fiat'],
            ['name' => 'Zafira', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Spin', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Caddy', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Tiggo 2', 'manufacturer' => 'Chery'],
            ['name' => 'Tiggo 5', 'manufacturer' => 'Chery'],
            ['name' => 'Celer', 'manufacturer' => 'Suzuki'],
            ['name' => 'Vitara', 'manufacturer' => 'Suzuki'],
            ['name' => 'S-Cross', 'manufacturer' => 'Suzuki'],
            ['name' => 'Kicks', 'manufacturer' => 'Nissan'],
            ['name' => 'Sentra', 'manufacturer' => 'Nissan'],
            ['name' => 'March', 'manufacturer' => 'Nissan'],
            ['name' => 'Qashqai', 'manufacturer' => 'Nissan'],
            ['name' => 'Tucson', 'manufacturer' => 'Hyundai'],
            ['name' => 'Creta', 'manufacturer' => 'Hyundai'],
            ['name' => 'C3 Aircross', 'manufacturer' => 'Citroën'],
            ['name' => 'C4 Cactus', 'manufacturer' => 'Citroën'],
            ['name' => 'Pajero', 'manufacturer' => 'Mitsubishi'],
            ['name' => 'Outlander', 'manufacturer' => 'Mitsubishi'],
            ['name' => 'Triton', 'manufacturer' => 'Mitsubishi'],
            ['name' => 'L200', 'manufacturer' => 'Mitsubishi'],
            ['name' => 'RAV4', 'manufacturer' => 'Toyota'],
            ['name' => 'Land Cruiser', 'manufacturer' => 'Toyota'],
            ['name' => 'Fortuner', 'manufacturer' => 'Toyota'],
            ['name' => 'Civic Type R', 'manufacturer' => 'Honda'],
            ['name' => 'HR-V', 'manufacturer' => 'Honda'],
            ['name' => 'Fit', 'manufacturer' => 'Honda'],
            ['name' => 'Astra', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Cobalt', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Prisma', 'manufacturer' => 'Chevrolet'],
            ['name' => 'Voyage', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Polo', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Virtus', 'manufacturer' => 'Volkswagen'],
            ['name' => 'Nissan Leaf', 'manufacturer' => 'Nissan'],
            ['name' => 'Juke', 'manufacturer' => 'Nissan'],
            ['name' => 'Duster Oroch', 'manufacturer' => 'Renault'],
            ['name' => 'Captur', 'manufacturer' => 'Renault'],
            ['name' => 'C3 Picasso', 'manufacturer' => 'Citroën'],
            ['name' => 'C4 Picasso', 'manufacturer' => 'Citroën'],
            ['name' => 'Chery QQ', 'manufacturer' => 'Chery'],
            ['name' => 'Chery Tiggo 7', 'manufacturer' => 'Chery'],
            ['name' => 'Fiat 500', 'manufacturer' => 'Fiat'],
            ['name' => 'Fiat Toro', 'manufacturer' => 'Fiat'],
            ['name' => 'Fiat Strada', 'manufacturer' => 'Fiat'],
            ['name' => 'Peugeot 208', 'manufacturer' => 'Peugeot'],
            ['name' => 'Peugeot 2008', 'manufacturer' => 'Peugeot'],
            ['name' => 'Peugeot 3008', 'manufacturer' => 'Peugeot'],
            ['name' => 'Peugeot 5008', 'manufacturer' => 'Peugeot'],
        ];

        foreach ($carModels as $carModel) {
            VehicleModel::create($carModel);
        }

    }
}
