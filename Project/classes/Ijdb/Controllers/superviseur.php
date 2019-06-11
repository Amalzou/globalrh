<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class superviseur
{
private $superviseursTable;
public function __construct(\globalrh\DatabaseTable $superviseursTable)
{
$this->superviseursTable = $superviseursTable;
}
public function edit() {
if (isset($_GET['id'])) {
$superviseur = $this->superviseursTable->findById($_GET['id']);
}
$title = 'Edit superviseur';
return ['template' => 'editsuperviseur.html.php',
'title' => $title,
'variables' => [
'superviseur' => $superviseur ?? null
]
];
}
public function saveEdit() {
$superviseur = $_POST['superviseur'];
$this->superviseursTable->save($superviseur);
header('location: /superviseur/list');
}
public function list() {
$superviseurs = $this->superviseursTable->findAll();
$title = 'List superviseur';
return ['template' => 'listsuperviseur.html.php',
'title' => $title,
'variables' => [
'superviseurs' => $superviseurs
]
];
}

public function delete() {
$this->superviseursTable->delete($_GET['id']);
header('location: /superviseur/list');
}

}