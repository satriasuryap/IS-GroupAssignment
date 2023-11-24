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
    // Parameters for AES, DES, and RC4 data
    protected $aesData;
    protected $desData;
    protected $rc4Data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$aesData, $desData, $rc4Data)
    {
        // Set parameters for AES, DES, and RC4 data
        $this->aesData = $aesData;
        $this->email = $email;
        $this->desData = $desData;
        $this->rc4Data = $rc4Data;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //

        Mail::to($this->email)->send(new Email($this->email,$this->aesData, $this->desData,$this->rc4Data));
    }
}
