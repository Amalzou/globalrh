<?php
namespace Ijdb\Controllers;
use \globalrh\DatabaseTable;
use \globalrh\Authentication;
class employe
{
private $employesTable;
public function __construct(\globalrh\DatabaseTable $employesTable)
{
$this->employesTable = $employesTable;
}
public function edit() {
if (isset($_GET['id'])) {
$employe = $this->employesTable->findById($_GET['id']);
}
$title = 'Edit employe';
return ['template' => 'editemploye.html.php',
'title' => $title,
'variables' => [
'employe' => $employe ?? null
]
];
}
public function saveEdit() {
$employe = $_POST['employe'];
$this->employesTable->save($employe);
header('location: /employe/list');
}
public function list() {
$employes = $this->employesTable->findAll();
$title = 'List employe';
return ['template' => 'listemploye.html.php',
'title' => $title,
'variables' => [
'employes' => $employes
]
];
}

public function delete() {
$this->employesTable->delete($_GET['id']);
header('location: /employe/list');
}

}