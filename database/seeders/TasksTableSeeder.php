<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'title' . 1,
            'content' => 'content' . 1,
            'person_in_charge' => 'person_in_charge' . 1,
        ]);
    }
}
