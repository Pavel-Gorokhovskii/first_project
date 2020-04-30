<?php

class Select extends Name
{
    private $selectData;

    public function setInnerData(array $selectData)
    {
        $this->selectData = "";

        foreach ($selectData as $key => $value) {
            $this->selectData .= "\t<option value='$key'>$value</option>\n";
        }

        return $this;
    }

    public function html()
    {
        return "<select id='$this->id' name='$this->name'>\n$this->selectData</select>\n";
    }
}
