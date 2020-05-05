<?php
class I extends PairTag
{
    public function html()
    {
        return "<i$this->id$this->class$this->style>$this->innerText</i>";
    }
}
