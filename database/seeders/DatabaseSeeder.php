<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Calling all database seeders.
     */
    public function run(): void
    {

        $this->call(BranchTableSeeder::class);
        $this->call(RoleTableSeeder::class);  
        $this->call(EmployeeTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(DeviceTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RepairDescriptionTableSeeder::class);
        $this->call(AppointmentTableSeeder::class);
        $this->call(EmployeeAppointmentTableSeeder::class);

    }
}
