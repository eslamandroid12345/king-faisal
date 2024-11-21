<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MemberShipExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'membership:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membership of user check date and expire him';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle(): void
    {
        $users = DB::table('users')
            ->where('user_type','=','member')
            ->whereDate('membership_to_date','=',Carbon::now()->format('Y-m-d'))
            ->get();

        foreach ($users as $user){
            $user->update([
                'membership_status' => 'not_active',
                'membership_from_date' => null,
                'membership_to_date' => null,
                'membership_number' => null,
                'user_type' => 'user',
            ]);

        }
    }
}
