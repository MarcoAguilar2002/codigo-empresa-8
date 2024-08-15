<?php

namespace App\Events;

use App\Models\Persona;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PersonaSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $persona;

    /**
     * Create a new event instance.
     */
    public function __construct(Persona $persona)
    {
        $this->persona = $persona;
    }
}
