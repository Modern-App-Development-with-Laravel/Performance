<?php

namespace Italofantone\Media\Actions;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Format;
use Intervention\Image\ImageManager;
use Italofantone\Media\Models\Media;

class GenerateThumbnail
{
    public function execute(Media $media): void
    {
        $manager = ImageManager::usingDriver(GdDriver::class);        

        $image = $manager->decodePath(
            Storage::disk('public')->path($media->original_path)
        );

        $image->cover(400, 400);        

        $thumbnailPath = "media/thumbnails/$media->filename";

        $encoded = $image->encodeUsingFormat(Format::JPEG, quality: 80);

        Storage::disk('public')->put(
            $thumbnailPath, 
            $encoded->toString(),
        );

        $media->update([
            'thumbnail_path' => $thumbnailPath,
        ]);
    }
}