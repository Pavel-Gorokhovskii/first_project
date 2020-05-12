<?php

class JsonFile extends File implements FileInterface
{
    /**
     * Сохраняет массив в файл json
     */
    public function save(array $data): object
    {
        file_put_contents($this->filename, json_encode($data));
        return $this;
    }

    /**
     * вытягивает из файла массив
     */
    public function load(): array
    {
        return (array) json_decode(file_get_contents($this->filename));
    }
}
