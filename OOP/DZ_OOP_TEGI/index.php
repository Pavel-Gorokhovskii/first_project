<?php
include 'autoload.php';

$b = new B("<b>");
echo htmlentities($b->teg());
echo $b->Description();
echo "<br>";
echo "<br>";

$i = new I("<i>");
echo htmlentities($i->teg());
echo $i->Description();
echo "<br>";
echo "<br>";

$u = new U("<u>");
echo htmlentities($u->teg());
echo $u->Description();
echo "<br>";
echo "<br>";

$ol = new OL("<ol>");
echo htmlentities($ol->teg());
echo $ol->Description();
echo $ol->atributTupe();
echo "<br>";
echo "<br>";

$ul = new UL("<ul>");
echo htmlentities($ul->teg());
echo $ul->Description();
echo $ul->atributTupe();
echo $ul->D();
echo "<br>";
echo "<br>";

$select = new SELECT("<select>");
echo htmlentities($select->teg());
echo $select->Description();
echo $select->D();
echo "<br>";
echo "<br>";

$input = new INPUT("<input>");
echo htmlentities($input->teg());
echo $input->Description();
echo $input->AtrName();
echo $input->D();
echo "<br>";
echo "<br>";

$form = new FORM("<form>");
echo htmlentities($form->teg());
echo $form->Description();
echo $form->AtrName();


echo "<br>";
echo "<br>";