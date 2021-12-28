<?php

declare(strict_types=1);

namespace Infrastructure\ValueObject;

class File
{
    private string $fileExtension;
    private string $filePath;

    /** @param array|mixed[] $file */
    public function __construct(array $file)
    {
        $filename = $file["name"];
        $this->fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        $this->filePath = $file["tmp_name"];
    }

    public function getFileExtension(): string
    {
        return $this->fileExtension;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }
}