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
<<<<<<< HEAD
        factory(App\TodosBackend\User::class, 5)->create()->each(function ($user) {
            $user->tasks()->saveMany(
                factory(App\TodosBackend\Task::class, 10)->create(['user_id' => $user->id])
=======
        factory(PaoloDavila\TodosBackend\User::class, 5)->create()->each(function ($user) {
            $user->tasks()->saveMany(
                factory(PaoloDavila\TodosBackend\Task::class, 10)->create(['user_id' => $user->id])
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
            );
        });
    }
}
