<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class groupe
{
private $groupesTable;
public function __construct(\globalrh\DatabaseTable $groupesTable,\globalrh\DatabaseTable $temps_travailsTable,\globalrh\Authentication $Authentication)
{
$this->groupesTable = $groupesTable;
$this->temps_travailsTable = $temps_travailsTable;
$this->authentication = $Authentication;
}
public function edit() {
if (isset($_GET['id'])) {
$groupe = $this->groupesTable->findById($_GET['id']);
}
$temps_travails = $this->temps_travailsTable->findAll();
$title = 'Edit groupe';
return ['template' => 'editgroupe.html.php',
'title' => $title,
'variables' => [
'groupe' => $groupe ?? null,
'temps' => $temps_travails
]
];
}
public function saveEdit() {
$groupe = $_POST['groupe'];
$this->groupesTable->save($groupe);
header('location: /groupe/list');
}
public function list() {
$groupes = $this->groupesTable->findAll();
$temps_travails = $this->temps_travailsTable->findAll();
$user = $this->authentication->getUser();
$title = 'List groupe';
return ['template' => 'listgroupe.html.php',
'title' => $title,
'variables' => [
'groupes' => $groupes,
'temps_travails' => $temps_travails,
'user' => $user
]
];
}

public function delete() {
$this->groupesTable->delete($_GET['id']);
header('location: /groupe/list');
}

}