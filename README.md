## Performance

A simple Laravel project that demonstrates how to build an media component using Laravel's features.

![Example Media Component Screenshot](art/thumbnail.png)

The goal of this repository is not to build the best media application. Instead, it focuses on teaching how organize a Laravel application using a component architecture, where an entire feature lives in its own directory.

### Directory Structure

```
components
└── Media
    ├── Actions
    │   └── GenerateThumbnail.php
    ├── Commands
    │   └── GenerateThumbnailsCommand.php
    ├── Database
    │   └── Migrations
    │       └── 2026_10_07_142532_create_media_table.php
    ├── MediaServiceProvider.php
    └── Models
        └── Media.php
```

Everything related to the media feature lives inside the `components/Media` directory. This includes the actions, commands, model, service provider, and migrations. This makes the code easier to understand, maintain, and eventually extract another project if needed.

### License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).