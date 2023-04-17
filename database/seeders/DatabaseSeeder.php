<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(BranchTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(RoleTableSeeder::class);  
        $this->call(EmployeeTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(DeviceTableSeeder::class);
        $this->call(RepairDescriptionTableSeeder::class);
        $this->call(AppointmentTableSeeder::class);
        $this->call(EmployeeAppointmentTableSeeder::class);
    }
}
