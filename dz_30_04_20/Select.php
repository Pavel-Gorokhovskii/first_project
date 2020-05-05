<?php

class Select extends Name
{
    private $selectData;

    public function setInnerData(array $selectData)
    {
        $this->selectData = "";

        foreach ($selectData as $key => $value) {
            $this->selectData .= "<option value='$key'>$value</option>";
        }

        return $this;
    }

    public function html()
    {
        return "<select$this->id$this->name>$this->selectData</select>";
    }
}
