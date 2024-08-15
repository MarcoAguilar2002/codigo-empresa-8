<?php

namespace App\Listeners;

use App\Events\PersonaSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizePersonaImage implements ShouldQueue
{
    /**
     * Handle the event.
     */
    public function handle(PersonaSaved $event): void
    {
        $persona = $event->persona;

        // Verifica si la persona tiene una imagen
        if ($persona->image) {
           
            $imagePath = storage_path('app/public/' . $persona->image);
            $image = Image::make($imagePath);

           
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            
            $image->save($imagePath);
        }
    }
}
