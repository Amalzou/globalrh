<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class categ
{
private $categsTable;
public function __construct(\globalrh\DatabaseTable $categsTable)
{
$this->categsTable = $categsTable;
}
public function edit() {
if (isset($_GET['id'])) {
$categ = $this->categsTable->findById($_GET['id']);
}
$title = 'Edit categ';
return ['template' => 'editcateg.html.php',
'title' => $title,
'variables' => [
'categ' => $categ?? null
]
];
}
public function saveEdit() {
$categ = $_POST['categ'];
$this->categsTable->save($categ);
header('location: /categ/list');
}
public function list() {
$categs = $this->categsTable->findAll();
$title = 'List categ';
return ['template' => 'listcateg.html.php',
'title' => $title,
'variables' => [
'categs' => $categs
]
];
}

public function delete() {
$this->categsTable->delete($_GET['id']);
header('location: /categ/list');
}

}