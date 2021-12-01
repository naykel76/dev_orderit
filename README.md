Create disk to store images


Add storage driver to `disks` in `config\filesystems.php`;

    'products' => [
        'driver' => 'local',
        'root' => storage_path('app/public/products'),
        'url' => '/storage/products',
        'visibility' => 'public',
    ],


Resources

https://www.youtube.com/watch?v=MPOOLrg0qRk&t
https://www.youtube.com/watch?v=PTlshlUBq2g
https://www.youtube.com/watch?v=1xwjeqGrJZc&t

