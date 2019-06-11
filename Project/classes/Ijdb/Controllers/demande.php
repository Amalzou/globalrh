<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class demande
{
private $demandesTable;
public function __construct(\globalrh\DatabaseTable $demandesTable,\globalrh\DatabaseTable $utilisateurTable,\globalrh\DatabaseTable $recompensessTable,\globalrh\DatabaseTable $employesTable,\globalrh\Authentication $Authentication)
{
$this->demandesTable = $demandesTable;
$this->utilisateurTable = $utilisateurTable;
$this->employesTable = $employesTable;
$this->recompensessTable = $recompensessTable;
$this->Authentication = $Authentication;
}
public function list() {
$recompensess = $this->recompensessTable->findAll();
$demandes = $this->demandesTable->findAll();
$utilisateurs = $this->utilisateurTable->findAll();
$user = $this->Authentication->getUser();
$title = 'List recompenses';
return ['template' => 'listdemande.html.php',
'title' => $title,
'variables' => [
'recompensess' => $recompensess,
'utilisateurs' => $utilisateurs,
'demandes' => $demandes,
'user' => $user
]
];
}
public function edit() {
if (isset($_GET['id'])) {
$demande = $this->demandesTable->findById($_GET['id']);
}
$recompensess = $this->recompensessTable->findAll();
$employes = $this->employesTable->findAll();
$title = 'Edit demande';
return ['template' => 'editdemande.html.php',
'title' => $title,
'variables' => [
'demande' => $demande ?? null,
'recompenses' => $recompensess,
'employe' => $employes
]
];
}
public function accepter() {
$demande['id'] = $_GET['id'];
$demande['etat'] = '1';
$this->demandesTable->save($demande);
header('location: /demande/list');
}
	public function refuser() {
$demande['id'] = $_GET['id'];
$demande['etat'] = '0';
$this->demandesTable->save($demande);
header('location: /demande/list');
	}
public function saveEdit() {
$demande = $_POST['demande'];
$this->demandesTable->save($demande);
header('location: /recompenses/list?id_emp='.$demande['id_emp']);

}
public function delete() {
$this->demandesTable->delete($_GET['id']);
header('location: /recompenses/list?id_emp='.$_GET['id_emp']);
}
}

