<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class administarateur
{
private $adminstrateursTable;
public function __construct(\globalrh\DatabaseTable $administrateursTable)
{
$this->administrateursTable = $administrateursTable;
}
public function edit() {
if (isset($_GET['id'])) {
$administrateur = $this->administrateursTable->findById($_GET['id']);
}
$title = 'Edit administrateur';
return ['template' => 'editadministrateur.html.php',
'title' => $title,
'variables' => [
'administrateurs' => $administrateur?? null
]
];
}
public function saveEdit() {
$administrateur = $_POST['administrateur'];
$this->administrateursTable->save($administrateur);
header('location: /administrateur/list');
}
public function list() {
$administrateurs = $this->administrateursTable->findAll();
$title = 'List administrateur';
return ['template' => 'listadministrateur.html.php',
'title' => $title,
'variables' => [
'administrateurs' => $administrateurs
]
];
}

public function delete() {
$this->administrateursTable->delete($_GET['id']);
header('location: /administrateur/list');
}

}