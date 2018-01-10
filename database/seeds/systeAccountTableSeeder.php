<?php
class systemAccountTableSeeder extends Seeder {
    public function run()
    {
        DB::table('syste_account')->delete();
        syste_account::create([
            'name'       => 'admin',
            'account_id' => 'admin',
            'account_password'   => Hash::make('adminadmin'),
            'status'     => 'y',
        ]);
    }
}
