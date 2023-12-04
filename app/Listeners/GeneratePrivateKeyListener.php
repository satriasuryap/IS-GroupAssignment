<?php

namespace App\Listeners;

use App\Events\GeneratePrivateKey;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\PrivateKeyGenerator; // Your private key generation logic

class GeneratePrivateKeyListener implements ShouldQueue
{
    public function handle(GeneratePrivateKey $event)
    {
        // Generate private key for the user
        $privateKey = PrivateKeyGenerator::generate(); // Replace with your logic

        // Save the private key to the user's record
        $event->user->update(['private_key' => $privateKey]);
    }
}
