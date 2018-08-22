<?php

function getIconList()
{
    return IconsRepository::all();
}

class IconsRepository
{
    // Skip unwanted directories or file names
    private $skip = [
        '.',
        '..',
    ];

    public static function all()
    {
        return (new self)->get();
    }

    public function get()
    {
        return $this->extractIconsFromFolder(BASEDIR . '/icons');
    }

    private function getPath(array $components)
    {
        $components = array_filter($components, function ($component) {
            return !empty($component);
        });
        return implode('/', $components);
    }

    private function shouldSkip($filename)
    {
        return in_array($filename, $this->skip);
    }

    private function extractIconsFromFolder($folder)
    {
        $icons = [];
        $skip = ['.', '..'];
        $searchPath = $this->getPath([$folder]);

        foreach (scandir($searchPath) as $file) {
            //
            if ($this->shouldSkip($file)) {
                continue;
            }

            $path = $this->getPath([$searchPath, $file]);

            if (is_dir($path)) {
                $icons[$file] = $this->extractIconsFromFolder($folder . '/' . $file);
            } elseif (strpos($file, '.png') > 0) {
                $icons[] = $path;
            }
        }
        return $icons;
    }
}
