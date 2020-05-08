<?php

abstract class File
{
    protected $fileName;

    public function __construct(string $fileName = '')
    {
        if (!empty($fileName)) {
            $this->setFileName($fileName);
        }
    }

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }
}
