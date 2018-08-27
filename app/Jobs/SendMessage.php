<?php

namespace App\Jobs;

use App\Notice;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $notice;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(\Notice $notice)
    {
        $this->notice = $notice;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //通知每个用户的系统消息
        $users = \App\User::all();
        foreach ($users as $user) {
            $user->addNotice($this->notice);
        }
    }
}
