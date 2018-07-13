<?php
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'John';
        $user->email = 'john@shoppe.com';
        $user->password = bcrypt('test');
        $user->save();

        $admin = new User();
        $admin->name = 'Alex';
        $admin->email = 'admin@shoppe.com';
        $admin->password = bcrypt('admin');
        $admin->isAdmin = 1;
        $admin->save();
    }
}
