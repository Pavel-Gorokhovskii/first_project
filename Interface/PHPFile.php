<?php


class PHPFile extends File implements FileInterface
{
    /**
     * Сохраняет массив в файл php
     */
    public function save(array $data): object
    {
        file_put_contents($this->filename, "<?php return " . var_export($data, true) . ";");
        return $this;
    }

    /**
     * вытягивает из файла массив
     */
    public function load(): array
    {
        return include($this->filename);
    }
}
