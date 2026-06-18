use Illuminate\Support\Facades\File;

public function boot(): void
{
    $source = __DIR__ . '/../resources/docs';
    $target = public_path('docs');

    File::ensureDirectoryExists($target);

    foreach (File::allFiles($source) as $file) {

        $relativePath = $file->getRelativePathname();
        $destination = $target . DIRECTORY_SEPARATOR . $relativePath;

        File::ensureDirectoryExists(dirname($destination));

        if (! File::exists($destination)) {
            File::copy($file->getPathname(), $destination);
        }
    }
}