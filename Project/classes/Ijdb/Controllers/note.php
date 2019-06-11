<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class note
{
private $notesTable;
public function __construct(\globalrh\DatabaseTable $notesTable,\globalrh\DatabaseTable $utilisateurstable,\globalrh\Authentication $Authentication)
{
$this->notesTable = $notesTable;
$this->utilisateurstable = $utilisateurstable;
$this->authentication = $Authentication;
}
public function edit() {
if (isset($_GET['id'])) {
$note = $this->notesTable->findById($_GET['id']);
}
$utilisateurs = $this->utilisateurstable->findAll();
	$user = $this->authentication->getUser();


$title = 'Edit note';
return ['template' => 'editnote.html.php',
'title' => $title,
'variables' => [
'note' => $note ?? null,
'utilisateurs' => $utilisateurs,
'user' => $user
]
];
}
public function saveEdit() {
$note = $_POST['note'];
$this->notesTable->save($note);
header('location: /note/list?iduser='.$note['id_emp']);

}
public function list() {
$notes = $this->notesTable->findAll();
$utilisateur = $this->utilisateurstable->findById($_GET['iduser']);
$user = $this->authentication->getUser();
$title = 'List note';
return ['template' => 'listnote.html.php',
'title' => $title,
'variables' => [
'notes' => $notes,
'utilisateur' => $utilisateur,
'user' => $user
]
];
}

public function delete() {
$this->notesTable->delete($_GET['id']);
header('location: /note/list');
}

}