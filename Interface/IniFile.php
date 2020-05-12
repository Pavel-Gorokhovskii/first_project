<?php

class IniFile extends File implements FileInterface
{
    /**
     * Сохраняет массив в файл ini
     */
    public function save(array $data): object
    {
        $ini = '';

        foreach ($data as $key => $value) {
            $ini .= "$key = $value\n";
        }

        file_put_contents($this->filename, $ini);

        return $this;
    }

    /**
     * вытягивает из файла массив
     */
    public function load(): array
    {
        return parse_ini_file($this->filename);
    }
}
