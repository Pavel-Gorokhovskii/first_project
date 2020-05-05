<?php
class U extends PairTag
{
    public function html()
    {
        return "<u$this->id$this->class$this->style>$this->innerText</u>";
    }
}
