<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class temps_travail
{
private $temps_travailsTable;
public function __construct(\globalrh\DatabaseTable $temps_travailsTable)
{
$this->temps_travailsTable = $temps_travailsTable;
}
public function edit() {
if (isset($_GET['id'])) {
$temps_travail = $this->temps_travailsTable->findById($_GET['id']);
}
$title = 'Edit temps_travail';
return ['template' => 'edittemps_travail.html.php',
'title' => $title,
'variables' => [
'temps_travail' => $temps_travail?? null
]
];
}
public function saveEdit() {
$temps_travail = $_POST['temps_travail'];
$this->temps_travailsTable->save($temps_travail);
header('location: /temps_travail/list');
}
public function list() {
$temps_travails = $this->temps_travailsTable->findAll();
$title = 'List temps_travail';
return ['template' => 'listtemps_travail.html.php',
'title' => $title,
'variables' => [
'temps_travails' => $temps_travails
]
];
}

public function delete() {
$this->temps_travailsTable->delete($_GET['id']);
header('location: /temps_travail/list');
}

}