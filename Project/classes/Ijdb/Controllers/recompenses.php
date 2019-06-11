<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class recompenses
{
private $recompensessTable;
public function __construct(\globalrh\DatabaseTable $recompensessTable,\globalrh\DatabaseTable $utilisateurTable, \globalrh\DatabaseTable $superviseurstable, \globalrh\DatabaseTable $demandestable,\globalrh\Authentication $Authentication)
{
$this->recompensesstable = $recompensessTable;
$this->utilisateurTable = $utilisateurTable;
$this->superviseurstable = $superviseurstable;
$this->demandestable = $demandestable;
$this->Authentication = $Authentication;

}
public function edit() {
if (isset($_GET['id'])) {
$recompenses = $this->recompensesstable->findById($_GET['id']);
}

	$user = $this->Authentication->getUser();
$title = 'Edit recompenses';
return ['template' => 'editrecompenses.html.php',
'title' => $title,
'variables' => [
'recompenses' => $recompenses?? null,

'user' => $user

]
];
}
public function saveEdit() {
$recompenses = $_POST['recompenses'];
$this->recompensesstable->save($recompenses);
header('location: /recompenses/list?id_emp='.$recompenses['id_emp']);
}
public function list() {
$recompensess = $this->recompensesstable->findAll();
$demandes = $this->demandestable->findAll();
$utilisateur = $this->utilisateurTable->findById($_GET['id_emp']);
$user = $this->Authentication->getUser();
$title = 'List recompenses';
return ['template' => 'listrecompenses.html.php',
'title' => $title,
'variables' => [
'recompensess' => $recompensess,
'utilisateur' => $utilisateur,
'demandes' => $demandes,
'user' => $user
]
];
}

public function delete() {
$this->recompensessTable->delete($_GET['id']);
header('location: /recompenses/list?id_emp='.$demande['id_emp']);
}

}