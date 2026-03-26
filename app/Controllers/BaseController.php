<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
    }

    /**
     * Check if user is authenticated as admin
     * Redirects to login if not authenticated
     * 
     * @return bool|redirect
     */
    protected function checkAdminAuth()
    {
        $session  = session();
        $timeout  = 7200; // 2 hours in seconds

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Last activity check - 2 hours inactivity pe auto logout
        $lastActivity = $session->get('last_activity');
        if ($lastActivity && (time() - $lastActivity) > $timeout) {
            $session->destroy();
            return redirect()->to('/login')->with('error', 'Session expired. Please login again.');
        }

        // Har request pe last activity update karo
        $session->set('last_activity', time());

        return true;
    }
}
