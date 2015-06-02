    <?php
				date_default_timezone_set ( "Europe/Paris" );
				error_reporting ( E_ALL );
				ini_set ( 'display_errors', 1 );
				
				define ( 'WEBROOT', str_replace ( "index.php", '', $_SERVER ['SCRIPT_NAME'] ) );
				define ( 'ROOT', str_replace ( "index.php", '', $_SERVER ['SCRIPT_FILENAME'] ) );
				
				if (WEBROOT != '/')
					$request = str_replace ( WEBROOT, '', $_SERVER ["REQUEST_URI"] );
				else
					$request = substr ( $_SERVER ["REQUEST_URI"], 1 );
				function __autoload($class) {
					require (ROOT . "models/" . $class . ".php");
				}
				
				require (ROOT . 'core/controller.php');
				
				$params = array ();
				$params = explode ( '/', $_GET ['p'] );
				
				session_start ();
				
				if (! empty ( $_COOKIE ['panier'] )) {
					$_SESSION ['panier'] = unserialize ( $_COOKIE ['panier'] );
				}
				
				// echo "<pre>";
				// print_r($_SERVER);
				// var_dump($_GET);
				// var_dump($params[0]);
				// var_dump($params);
				// print_r($params);
				// print_r(WEBROOT);
				// print_r(ROOT);
				// print_r($_SESSION);
				// print_r($_COOKIE);
				// print_r($_SESSION['panier']);
				// print_r($request);
				// echo "</pre>";
				
				$controller = ! empty ( $params [0] ) ? $params [0] : 'home';
				$action = ! empty ( $params [1] ) ? $params [1] : 'index';
				
				require ('controllers/' . $controller . '.php');
				$controller = new $controller ();
				
				if (method_exists ( $controller, $action )) {
					unset ( $params [0] );
					unset ( $params [1] );
					call_user_func_array ( array (
							$controller,
							$action 
					), $params );
				} else {
					echo 'erreur le controlleur nexiste pas';
				}
				

				
				?>
