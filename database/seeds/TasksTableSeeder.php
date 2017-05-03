<?php

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
        factory(App\TodosBackend\User::class, 5)->create()->each(function ($user) {
            $user->tasks()->saveMany(
                factory(App\TodosBackend\Task::class, 10)->create(['user_id' => $user->id])
            );
        });
    }
}
