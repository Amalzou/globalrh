<?php
namespace Ijdb;

class IjdbRoutes implements \globalrh\Routes {
	private $utilisateursTable;
	private $groupesTable;
	private $temps_travailsTable;
    private $notesTable;
    private $tachesTable;
    private $recompensessTable;
    private $assiduitesTable;
    private $employesTable;
    private $superviseursTable;
    private $demandesTable;
			private $pdo;


	private $authentication;
	

	public function __construct() {
		include __DIR__ . '/../../includes/DatabaseConnection.php';
	$this->pdo = $pdo;
		
		
 		$this->utilisateursTable = new \globalrh\DatabaseTable($pdo, 'utilisateur', 'id');
 		$this->authentication = new \globalrh\Authentication($this->utilisateursTable, 'login', 'password');
		$this->groupesTable = new \globalrh\DatabaseTable($pdo, 'groupe', 'id');
		$this->temps_travailsTable = new \globalrh\DatabaseTable($pdo, 'temps_travail', 'id');
		$this->notesTable = new \globalrh\DatabaseTable($pdo, 'note', 'id');
		$this->tachesTable = new \globalrh\DatabaseTable($pdo, 'tache', 'id');
		$this->recompensessTable = new \globalrh\DatabaseTable($pdo, 'recompenses', 'id');
		$this->assiduitesTable = new \globalrh\DatabaseTable($pdo, 'assiduite', 'id');
		$this->employesTable = new \globalrh\DatabaseTable($pdo, 'employe', 'id');
		$this->superviseursTable = new \globalrh\DatabaseTable($pdo, 'superviseur', 'id');
		$this->demandesTable = new \globalrh\DatabaseTable($pdo, 'demande', 'id');
		
		
	}

	public function getRoutes(): array {
		
	
		$utilisateurController = new \Ijdb\Controllers\Register($this->utilisateursTable, $this->employesTable, $this->superviseursTable, $this->pdo,$this->authentication);
		$loginController = new \Ijdb\Controllers\Login($this->authentication);
		$groupeController = new \Ijdb\Controllers\groupe($this->groupesTable,$this->temps_travailsTable,$this->authentication);
		$temps_travailController = new \Ijdb\Controllers\temps_travail($this->temps_travailsTable);
		$noteController = new \Ijdb\Controllers\note($this->notesTable,$this->utilisateursTable,$this->authentication);
		$employeController = new \Ijdb\Controllers\employe($this->employesTable);
		$superviseurController = new \Ijdb\Controllers\superviseur($this->superviseursTable);
		$tacheController = new \Ijdb\Controllers\tache($this->tachesTable,$this->utilisateursTable,$this->authentication);
		$recompensesController = new \Ijdb\Controllers\recompenses($this->recompensessTable,$this->utilisateursTable,$this->superviseursTable,$this->demandesTable,$this->authentication);
		$assiduiteController = new \Ijdb\Controllers\assiduite($this->assiduitesTable,$this->utilisateursTable,$this->authentication);
		$demandeController = new \Ijdb\Controllers\demande($this->demandesTable,$this->utilisateursTable,$this->recompensessTable,$this->employesTable,$this->authentication);
		
	
		$routes = [
//version 0
			'utilisateur/register' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'registrationForm'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'registerUser'
				]
			],
			'utilisateur/success' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'success'
				]
			],
			'utilisateur/permissions' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'permissions'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'savePermissions'
				],
				'login' => true
			
			],
			'utilisateur/list' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'list'
				],
				'login' => true
				
			],
			'login/error' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'error'
				]
			],
			'login/permissionserror' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'permissionsError'
				]
			],
			'login/success' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'success'
				]
			],
			'register/success' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'success'
				]
			],
			'logout' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'logout'
				]
			],
			
			'login' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'loginForm'
				],
				'POST' => [
					'controller' => $loginController,
					'action' => 'processLogin'
				]
			],
			'register' => [
				'GET' => [
					'controller' => $utilisateurController,
					'action' => 'registrationForm'
				],
				'POST' => [
					'controller' => $utilisateurController,
					'action' => 'registerUser'
				]
			],
		
			'' => [
				'GET' => [
					'controller' => $loginController,
					'action' => 'home'
				]
			],
			/// version1
			'utilisateur/edit' => [
				'POST' => [
				'controller' => $utilisateurController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $utilisateurController,
				'action' => 'edit'
				],
				'login' => true
				
			],
			
			'utilisateur/delete' => [
				'GET' => [
				'controller' => $utilisateurController,
				'action' => 'delete'
				],
				'login' => true
			],
				'utilisateur/desactiver' => [
				'GET' => [
				'controller' => $utilisateurController,
				'action' => 'desactiver'
				],
				'login' => true
			],	'utilisateur/activer' => [
				'GET' => [
				'controller' => $utilisateurController,
				'action' => 'activer'
				],
				'login' => true
			],
			
	'groupe/list' => [
				'GET' => [
				'controller' => $groupeController,
				'action' => 'list'
				],
				'login' => true
			],

			'groupe/delete' => [
				'GET' => [
				'controller' => $groupeController,
				'action' => 'delete'
				],
				'login' => true
			],
			'groupe/edit' => [
				'POST' => [
				'controller' => $groupeController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $groupeController,
				'action' => 'edit'
				],
				'login' => true
				
			],
	'temps_travail/edit' => [
				'POST' => [
				'controller' => $temps_travailController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $temps_travailController,
				'action' => 'edit'
				],
				'login' => true
				
			],
			'temps_travail/list' => [
				'GET' => [
				'controller' => $temps_travailController,
				'action' => 'list'
				],
				'login' => true
				],
					'temps_travail/delete' => [
				'GET' => [
				'controller' => $temps_travailController,
				'action' => 'delete'
				],
				'login' => true
			],	
	           'note/edit' => [
				'POST' => [
				'controller' => $noteController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $noteController,
				'action' => 'edit'
				],
				'login' => true
				
			],
			'note/list' => [
				'GET' => [
				'controller' => $noteController,
				'action' => 'list'
				],
				'login' => true
				],
					'note/delete' => [
				'GET' => [
				'controller' => $noteController,
				'action' => 'delete'
				],
				'login' => true
			],	
     	'tache/edit' => [
				'POST' => [
				'controller' => $tacheController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $tacheController,
				'action' => 'edit'
				],
				'login' => true
				
			],
			'tache/list' => [
				'GET' => [
				'controller' => $tacheController,
				'action' => 'list'
				],
				'login' => true
				],
					'tache/delete' => [
				'GET' => [
				'controller' => $tacheController,
				'action' => 'delete'
				],
				'login' => true
			],	
			
			'tache/valider' => [
				'GET' => [
				'controller' => $tacheController,
				'action' => 'valider'
				],
				'login' => true
			],
					
			
'recompenses/list' => [
				'GET' => [
				'controller' => $recompensesController,
				'action' => 'list'
				],
				'login' => true
				],
				'recompenses/edit' => [
				'POST' => [
				'controller' => $recompensesController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $recompensesController,
				'action' => 'edit'
				],
				'login' => true
				
			],
					'recompenses/delete' => [
				'GET' => [
				'controller' => $recompensesController,
				'action' => 'delete'
				],
				'login' => true
			],			
			
			     	'assiduite/edit' => [
				'POST' => [
				'controller' => $assiduiteController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $assiduiteController,
				'action' => 'edit'
				],
				'login' => true
				
			],
			'assiduite/list' => [
				'GET' => [
				'controller' => $assiduiteController,
				'action' => 'list'
				],
				'login' => true
				],
				'assiduite/detail' => [
				'GET' => [
				'controller' => $assiduiteController,
				'action' => 'detail'
				],
				'login' => true
				],
					'assiduite/delete' => [
				'GET' => [
				'controller' => $assiduiteController,
				'action' => 'delete'
				],
				'login' => true
			],	
			'demande/edit' => [
				'POST' => [
				'controller' => $demandeController,
				'action' => 'saveEdit'
				],
				'GET' => [
				'controller' => $demandeController,
				'action' => 'edit'
				],
				'login' => true
				
			],
				'demande/delete' => [
				'GET' => [
				'controller' => $demandeController,
				'action' => 'delete'
				],
				'login' => true
			],
			'demande/list' => [
				'GET' => [
				'controller' => $demandeController,
				'action' => 'list'
				],
				'login' => true
				],
				'demande/accepter' => [
				'GET' => [
				'controller' => $demandeController,
				'action' => 'accepter'
				],
				'login' => true
			],
		'demande/refuser' => [
				'GET' => [
				'controller' => $demandeController,
				'action' => 'refuser'
				
				],
				'login' => true
			],
];
		return $routes;
	}

	public function getAuthentication(): \globalrh\Authentication {
		return $this->authentication;
	}

	public function checkPermission($permission): bool {
		$user = $this->authentication->getUser();

		if ($user && $user->hasPermission($permission)) {
			return true;
		} else {
			return false;
		}
	}

}