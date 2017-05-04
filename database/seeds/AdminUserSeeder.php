<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

/**
 * Class AdminUserSeeder
 */
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
<<<<<<< HEAD
            $user = factory(App\TodosBackend\User::class)->create([
=======
            $user = factory(PaoloDavila\TodosBackend\User::class)->create([
>>>>>>> 5f032173417b209584ba0481b77168133212ef43
                    "name" => "Paolo Davila",
                    "email" => "pdavila@iesebre.com",
                    "password" => bcrypt(env('ADMIN_PWD', '123456'))]
            );

            Role::create(['name' => 'admin']);
            $user->assignRole('admin');

        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}