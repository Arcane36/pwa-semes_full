<?php

use App\Message;
use App\Users;
use App\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'Jan Kozánek', 'email' => 'test@gmail.com', 'password' => Hash::make('secret')],
            ['name' => 'The Chosen One', 'email' => 'chris@scotch.io', 'password' => Hash::make('secret')],
            ['name' => 'Tereza Tyrpeklová', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
            ['name' => 'Adam Jensen', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
        );

        foreach ($users as $user) {
            Users::create($user);
        }

        DB::table('thread')->delete();

        $threads = array(
            ['name' => 'Favorite games', 'desc' => 'Discuss about your favorite games'],
            ['name' => 'Favorite food', 'desc' => 'Discuss about your favorite food'],
            ['name' => 'Favorite music', 'desc' => 'Discuss about your favorite music'],
            ['name' => 'Favorite girls', 'desc' => 'Discuss about your favorite girls'],
        );

        foreach ($threads as $thread) {
            Thread::create($thread);
        }

        DB::table('message')->delete();

        $messages = array(
            ['text' => 'Haha very funny1', 'id_user' => 13, 'id_thread' => 26],
            ['text' => 'Haha very funny2', 'id_user' => 14, 'id_thread' => 26],
            ['text' => 'Haha very funny3', 'id_user' => 13, 'id_thread' => 26],
            ['text' => 'Haha very funny4', 'id_user' => 13, 'id_thread' => 27],
            ['text' => 'Haha very funny5', 'id_user' => 14, 'id_thread' => 27],
            ['text' => 'Haha very funny6', 'id_user' => 13, 'id_thread' => 28],
            ['text' => 'Haha very funny7', 'id_user' => 13, 'id_thread' => 28],
        );

        foreach ($messages as $message) {
            Message::create($message);
        }


        Model::reguard();
    }
}
