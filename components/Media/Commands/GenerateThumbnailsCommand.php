<?php

namespace Italofantone\Media\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Italofantone\Media\Actions\GenerateThumbnail;
use Italofantone\Media\Models\Media;

#[Signature('media:generate-thumbnails')]
#[Description('Generate thumbnails for all media items')]
class GenerateThumbnailsCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(GenerateThumbnail $action)
    {
        $start = microtime(true);
        
        $media = Media::all();

        foreach ($media as $item) {
            $action->execute($item);
        }

        $duration = microtime(true) - $start;

        $this->info(
            sprintf('Thumbnails generated in %.2f seconds.', $duration)
        );

        return self::SUCCESS;
    }
}
