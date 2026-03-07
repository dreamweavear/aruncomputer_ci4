<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    // (optional) Per-page custom meta/title overrides
    private array $meta = [
        // 'home' => ['title' => 'Arun Computer — Home', 'description' => 'Welcome...', 'keywords' => 'Arun, Home, Rewa'],
        // 'about-us' => ['title' => 'About Arun Computer', 'description' => 'About page...', 'keywords' => 'About, Arun Computer'],
    ];

    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        // Human title: about-us -> About Us
        $humanTitle = ucwords(str_replace(['-', '_'], ' ', $page));

        // Base values
        $data = [
            'title'       => $humanTitle,
            'description' => 'Description for ' . $humanTitle . ' page | Arun Computer College, Rewa.',
            'keywords'    => 'Arun Computer, ' . $humanTitle . ', PGDCA, DCA, Computer College, Rewa',
        ];

        // Per-page overrides (if any)
        if (isset($this->meta[$page])) {
            $data = array_merge($data, $this->meta[$page]);
        }

        return view('templates/headerdash1', $data)
             . view('pages/' . $page)
             . view('templates/footerdash');
    }
}




