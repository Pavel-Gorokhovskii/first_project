<?php

echo View\Html\Html::create('TableEdited')->data($table)->class('table')->html();

echo View\Html\Html::create('Form')
    ->setAction('?action=add')
    ->setClass('form')
    ->setContent(View\Html\Html::create('Textarea')->setName('text')->html())
    ->addContent(View\Html\Html::create('Input')->setName('name')->html())
    ->addContent(View\Html\Html::create('Input')->setType('submit')->setValue('OK')->html())
    ->html();

?>
<!-- <form method="POST" action="?action=add" class="form">
    <textarea name='text'></textarea>
    <input name='name' type="text" value='name'>
    <input type="submit" value='OK'>
</form> -->