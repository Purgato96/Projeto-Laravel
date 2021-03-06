<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertUserAdmin extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $email = env('ADMIN_EMAIL', 'admin@admin.com');
        $password = bcrypt(env('ADMIN_PASSWORD', 'admin'));

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => $email,
            'password' => $password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $email = env('ADMIN_EMAIL', 'admin@admin.com');
        DB::delete('DELETE FROM users WHERE email =?', [$email]);
    }
}
