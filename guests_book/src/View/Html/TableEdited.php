<?php

namespace View\Html;

class TableEdited extends Table
{
    public function data(array $data): self
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "\t<tr>\n";
            foreach ($row as $cell) {
                $str .= "\t\t<td>$cell</td>\n";
            }
            $str .= "\t\t<td><a href='?action=del&id=$row[id]'>❌</a></td>\n";
            $str .= "\t\t<td><a href='?action=showedit&id=$row[id]'>⛏</a></td>\n";
            $str .= "\t</tr>\n";
        }

        $this->data = $str;
        return $this;
    }
}
