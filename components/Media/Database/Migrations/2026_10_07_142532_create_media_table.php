<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string('filename');
            $table->string('original_path');
            $table->string('thumbnail_path')->nullable();

            $table->timestamps();
        });

        $media = [
            'example-1.jpg',
            'example-2.jpg',
            'example-3.jpg',
            'example-4.jpg',
            'example-5.jpg',
            'example-6.jpg',
            'example-7.jpg',
            'example-8.jpg',
            'example-9.jpg',
            'example-10.jpg',
            'example-11.jpg',
            'example-12.jpg',
            'example-13.jpg',
            'example-14.jpg',
            'example-15.jpg',
            'example-16.jpg',
            'example-17.jpg',
            'example-18.jpg',
            'example-19.jpg',
            'example-20.jpg',
            'example-21.jpg',
            'example-22.jpg',
            'example-23.jpg',
            'example-24.jpg',
        ];

        $now = now();

        DB::table('media')->insert(
            array_map(
                fn (string $filename) => [
                    'filename' => $filename,
                    'original_path' => "media/originals/{$filename}",
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                $media
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
