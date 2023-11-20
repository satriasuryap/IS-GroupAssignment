<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class EmailJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

     private $email;
     private $name;
     private $file;
     private $image;
     private $video;
    public function __construct($email,$name,$file,$image,$video)
    {
        //

        $this->email = $email;
        $this->name = $name;
        $this->file = $file;
        $this->image = $image;
        $this->video = $video;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //

        Mail::to($this->email)->send(new Email($this->name, $this->email,$this->file,$this->image,$this->video));
    }
}
