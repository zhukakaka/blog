<?php 
class UserTableSeeder extends Seeder {
    public function run()
    {
        User::create([
            'email'    => 'admin@shiyanlou.com',
            'password' => Hash::make('password'),
            'nickname' => 'admin',
            'is_admin' => 1,
        ]);
    }
}
?>