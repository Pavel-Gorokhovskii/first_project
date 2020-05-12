<?php


abstract class File
{
    protected $filename;

    public function __construct(string $filename = '')
    {
        if (!empty($filename)) {
            $this->setFileName($filename);
        }
    }

    /**
     * Устанавливает имя файла, в который записывается массив данных
     */
    public function setFileName(string $filename)
    {
        $this->filename = $filename;
    }
}
