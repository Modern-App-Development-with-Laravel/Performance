<?php

namespace Italofantone\Media\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Italofantone\Media\Actions\GenerateThumbnail;
use Italofantone\Media\Models\Media;

class GenerateThumbnailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Media $media,
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(GenerateThumbnail $action): void
    {
        $action->execute($this->media);
    }
}
