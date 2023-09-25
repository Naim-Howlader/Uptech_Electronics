<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\OrderConfirmEmail;
use Illuminate\Support\Facades\Mail;

class OrderConfirmJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $input;
    public function __construct($data)
    {
        $this->input = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //$email = new OrderConfirmEmail();
        Mail::to($this->input->email)->send(new OrderConfirmEmail($this->input));
    }
}
