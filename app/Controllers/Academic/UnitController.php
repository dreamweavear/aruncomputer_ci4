<?php namespace App\Controllers\Academic;

use App\Models\Academic\UnitModel;
use App\Models\Academic\PaperModel;
use App\Controllers\BaseController;

class UnitController extends BaseController
{
    public function index()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new UnitModel();
        $data['units'] = $model->select('units.*, papers.name as paper_name')
                               ->join('papers', 'papers.id = units.paper_id')
                               ->findAll();
        return view('units/index', $data);
    }

public function create()
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    $unitModel  = new \App\Models\Academic\UnitModel();
    $paperModel = new \App\Models\Academic\PaperModel();

    $data = [
        'papers' => $paperModel->findAll(),
        'units'  => $unitModel->findAll() // ✅ required for list display
    ];

    //echo view('templates/headeradmin');
    echo view('units/create', $data);
    //echo view('templates/footerdash');
}





    public function store()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new UnitModel();
        $model->save([
            'paper_id' => $this->request->getPost('paper_id'),
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/admin/units');
    }

    public function edit($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new UnitModel();
        $paperModel = new PaperModel();
        $data['unit'] = $model->find($id);
        $data['papers'] = $paperModel->findAll();
        return view('units/edit', $data);
    }

    public function update($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new UnitModel();
        $model->update($id, [
            'paper_id' => $this->request->getPost('paper_id'),
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/admin/units');
    }

    public function delete($id)
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $model = new UnitModel();
        $model->delete($id);
        return redirect()->to('/admin/units');
    }
}
