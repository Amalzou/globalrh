<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class tache
{
private $tachesTable;
public function __construct(\globalrh\DatabaseTable $tachesTable,\globalrh\DatabaseTable $utilisateurstable,\globalrh\Authentication $Authentication)
{
$this->tachesTable = $tachesTable;
$this->utilisateurstable = $utilisateurstable;
$this->authentication = $Authentication;
}
public function edit() {
if (isset($_GET['id'])) {
$tache = $this->tachesTable->findById($_GET['id']);
}
$utilisateurs = $this->utilisateurstable->findAll();
	$user = $this->authentication->getUser();


$title = 'Edit tache';
return ['template' => 'edittache.html.php',
'title' => $title,
'variables' => [
'tache' => $tache ?? null,
'utilisateurs' => $utilisateurs,
'user' => $user
]
];
}
public function saveEdit() {
$tache = $_POST['tache'];
$this->tachesTable->save($tache);
header('location: /tache/list');

}
public function list() {
$taches = $this->tachesTable->findAll();
$utilisateurs = $this->utilisateurstable->findAll();
$user = $this->authentication->getUser();
$title = 'List tache';
return ['template' => 'listtache.html.php',
'title' => $title,
'variables' => [
'taches' => $taches,
'utilisateurs' => $utilisateurs,
'user' => $user
]
];
}
public function valider() {
$tache['id'] = $_GET['id'];
$tache['etat'] = '1';
$this->tachesTable->save($tache);
header('location: /tache/list');
}
public function delete() {
$this->tachesTable->delete($_GET['id']);
header('location: /tache/list');
}

}