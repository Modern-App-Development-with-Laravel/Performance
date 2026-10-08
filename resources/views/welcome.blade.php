<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thumbnails</title>
    </head>
    <body>
        <div style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 0.5rem;">
        @foreach ($media as $item)
            <div>
                <img 
                    src="{{ $item->url }}" 
                    alt="{{ $item->filename }}"
                    style="width: 100%; height: auto;"
                >
            </div>
        @endforeach
        </div>
    </body>
</html>
