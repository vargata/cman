<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class
        ]);
        
        for($i = 0; $i < 50; $i++){
            $company = Company::factory()->create();
            
            Employee::factory(random_int(1, 5))->create([
                "company_id" => $company->id
            ]);
        }
    }
}
