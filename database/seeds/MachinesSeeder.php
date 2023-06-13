<?php


use Illuminate\Database\Seeder;
use App\Models\Machine;


class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        // Machine::create([
        //     'name' => 'Colheitadeira via seeder'
        // ]);

        factory(Machine::class, 50)->create();

    }
}
