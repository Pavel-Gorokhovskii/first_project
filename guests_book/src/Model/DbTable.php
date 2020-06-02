<?php

namespace Model;

use mysqli;

class DbTable implements CRUDInterface
{
    private $mysqli;
    private $tableName;

    public function __construct(mysqli $mysqli, $tableName)
    {
        $this->mysqli = $mysqli;
        $this->tableName = $tableName;
    }

    public function get(int $id = null): array
    {
        if ($id === null) {
            $result = $this->mysqli->query("SELECT * FROM $this->tableName;");
        } else {
            $result = $this->mysqli->query("SELECT * FROM $this->tableName WHERE `id`=$id;");
        }

        $array = [];
        while ($row = $result->fetch_assoc()) {
            $array[] = $row;
        }
        return $array;
    }

    public function add(array $data): int
    {
        //INSERT INTO `table124` (`text`, `name`) VALUES ("ЗДарова", "Петрович")
        $fildNames = [];

        foreach (array_keys($data) as $value) {
            $fildNames[] = $value;
        }

        $sql = "INSERT INTO `$this->tableName` (`" . implode("`, `", $fildNames) . "`) VALUES ('" . implode("', '", $data) . "');";

        $this->mysqli->query($sql);

        return $this->mysqli->insert_id;
    }

    public function edit(int $id, array $data)
    {
        $editData = [];
        foreach ($data as $key => $value) {
            $editData[] = " `$key` = '$value' ";
        }

        $sql = "UPDATE `$this->tableName` SET " . implode(", ", $editData) . " WHERE id = $id;";
        $this->mysqli->query($sql);
        return $this;
        //UPDATE table124 SET `name`= 'Василий', `text`= 'Просто здарвствуй' WHERE id = 4;
    }

    public function del(int $id)
    {
        $sql = "DELETE FROM `$this->tableName` WHERE id=$id;";
        $this->mysqli->query($sql);
        return $this;
    }
}
