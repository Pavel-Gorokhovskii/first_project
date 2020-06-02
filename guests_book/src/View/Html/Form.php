<?php

namespace View\Html;

class Form
{
    protected $action = "";
    protected $method = "GET";
    protected $content = "";
    protected $class = "";


    public function setAction(string $action)
    {
        $this->action = $action;
        return $this;
    }


    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function setClass(string $class)
    {
        $this->class = " class='$class'";
        return $this;
    }

    public function addContent(string $content)
    {
        $this->content .= $content;
        return $this;
    }

    public function setMethod($method)
    {
        if (in_array($method, ["POST", "GET"])) {
            $this->method = $method;
        }
        return $this;
    }


    public function html()
    {
        return "<form action='$this->action' method='$this->method'$this->class>\n$this->content</form>";
    }
}
