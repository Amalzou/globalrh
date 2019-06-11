<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class assiduite
{
private $assiduitestable;
public function __construct(\globalrh\DatabaseTable $assiduitestable,\globalrh\DatabaseTable $utilisateurstable,\globalrh\Authentication $Authentication)
{
$this->assiduitestable = $assiduitestable;

$this->utilisateurstable = $utilisateurstable;
$this->authentication = $Authentication;
}
public function edit() {
if (isset($_GET['id'])) {
$assiduite = $this->assiduitestable->findById($_GET['id']);
}

$utilisateurs = $this->utilisateurstable->findAll();
	$user = $this->authentication->getUser();
$title = 'Edit assiduite';
return ['template' => 'editassiduite.html.php',
'title' => $title,
'variables' => [
'assiduite' => $assiduite?? null,

'utilisateur' => $utilisateurs,
'user' => $user
]
];
}
public function saveEdit() {
$assiduite = $_POST['assiduite'];
$this->assiduitestable->save($assiduite);
header('location: /assiduite/list');
}
public function list() {
$assiduites = $this->assiduitestable->findAll();

$utilisateurs = $this->utilisateurstable->findAll();
$user = $this->authentication->getUser();
$title = 'List assiduite';
return ['template' => 'listassiduite.html.php',
'title' => $title,
'variables' => [
'assiduites' => $assiduites,
'utilisateurs' => $utilisateurs,
'user' => $user
]
];
}
public function detail() {
$assiduites = $this->assiduitestable->findAll();

$utilisateur = $this->utilisateurstable->findById($_GET['iduser']);
$user = $this->authentication->getUser();
$title = 'List assiduite';
return ['template' => 'detailassiduite.html.php',
'title' => $title,
'variables' => [
'assiduites' => $assiduites,
'utilisateur' => $utilisateur,
'user' => $user
]
];
}
public function delete() {
$this->assiduitestable->delete($_GET['id']);
header('location: /assiduite/list');
}

}