<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Academic\ChapterModel;
use App\Models\Academic\UnitModel;
use App\Models\Academic\PaperModel;
use App\Models\Academic\CourseModel;
$courseModel = new CourseModel();
class ChapterController extends BaseController
{
    protected $chapterModel;

    public function __construct()
    {
        $this->chapterModel = new ChapterModel();
    }

    public function index()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $data['chapters'] = $this->chapterModel->getChaptersWithHierarchy();
        echo view('chapters/index', $data);
    }

    public function create()
    {
        // Check admin authentication
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) {
            return $authCheck;
        }

        $unitModel   = new UnitModel();
        $paperModel  = new PaperModel();
        $courseModel = new CourseModel();

        $data = [
            'units'   => $unitModel->getUnitsWithHierarchy(),
            'papers'  => $paperModel->findAll(),
            'courses' => $courseModel->findAll()
        ];

        echo view('templates/headeradmin');
        echo view('chapters/create', $data);
        echo view('templates/footerdash');
    }


public function store()
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    $unit_id = $this->request->getPost('unit_id');
    $unitModel = new UnitModel();
    $paperModel = new PaperModel();
    $courseModel = new CourseModel();

    $unit = $unitModel->find($unit_id);
    $paper = $paperModel->find($unit['paper_id']);
    $course = $courseModel->find($paper['course_id']);

    $data = [
        'unit_id'    => $unit_id,
        'name'       => $this->request->getPost('name'),
        'slug'       => strtolower(url_title($this->request->getPost('name'))),
        'content'    => $this->request->getPost('content'),
        'created_at' => date('Y-m-d H:i:s'),
    ];

    $this->chapterModel->insert($data);
    return redirect()->to('/admin/chapters')->with('success', 'Chapter added successfully.');
}

// yah function unit ko sahi sellect karne ke liye add kiya gaya jisase keval pgdca I me n dikhe

 public function getUnitsByPaper() {
        $paperId = $this->request->getGet('paper_id');
        $unitModel = new UnitModel();
        $units = $unitModel->where('paper_id', $paperId)->findAll();
        return $this->response->setJSON($units);
    }



public function edit($id)
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    $chapter     = $this->chapterModel->find($id);

    $unitModel   = new UnitModel();
    $paperModel  = new PaperModel();
    $courseModel = new CourseModel();

    $unit   = $unitModel->find($chapter['unit_id']);
    $paper  = $paperModel->find($unit['paper_id']);
    $course = $courseModel->find($paper['course_id']);

    $data = [
        'chapter' => $chapter,
        'courses' => $courseModel->findAll(),
        'papers'  => $paperModel->where('course_id', $paper['course_id'])->findAll(),
        'units'   => $unitModel->where('paper_id', $unit['paper_id'])->findAll(),
        'selected' => [
            'course_id' => $course['id'],
            'paper_id'  => $paper['id'],
            'unit_id'   => $unit['id'],
        ]
    ];

   // echo view('templates/headeradmin');
    echo view('chapters/edit', $data);
   // echo view('templates/footerdash');
}


    public function update($id)
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    $name = $this->request->getPost('name');  // <-- input field se "name" aayega

    $data = [
        'unit_id'    => $this->request->getPost('unit_id'),
        'name'       => $name,  // <-- database field bhi "name"
        'slug'       => strtolower(url_title($name)),  // <-- yahi use karna chahiye
        'content'    => $this->request->getPost('content'),
        'updated_at' => date('Y-m-d H:i:s'),
    ];

    $this->chapterModel->update($id, $data);
    return redirect()->to('/admin/chapters')->with('success', 'Chapter updated successfully.');
}


public function delete($id)
{
    // Check admin authentication
    $authCheck = $this->checkAdminAuth();
    if ($authCheck !== true) {
        return $authCheck;
    }

    try {
        $this->chapterModel->delete($id);
        return redirect()->to('/admin/chapters')->with('success', 'Chapter deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }
}



    public function show($slug)
    {
        $chapter = $this->chapterModel->where('slug', $slug)->first();

        if (!$chapter) {
            return redirect()->to('/');
        }

        $data['chapter'] = $chapter;

        echo view('templates/headeradmin');
        echo view('admin/chapters/view', $data);
        echo view('templates/footerdash');
    }

// tinyMCE image upload function
public function uploadImage()
{
    // Check if file exists
    if (!$this->request->getFile('file')) {
        return $this->response->setStatusCode(400)->setJSON(['error' => 'No file uploaded']);
    }

    $file = $this->request->getFile('file');

    // Validate file
    if (!$file->isValid()) {
        return $this->response->setStatusCode(400)->setJSON(['error' => $file->getErrorString()]);
    }

    try {
        // Create uploads directory if not exists
        $uploadPath = FCPATH . 'uploads/chapters/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $newName = $file->getRandomName();
        $file->move($uploadPath, $newName);
        
        return $this->response->setJSON([
            'location' => base_url('uploads/chapters/' . $newName)
        ]);
    } catch (\Exception $e) {
        return $this->response->setStatusCode(500)->setJSON([
            'error' => 'Upload failed: ' . $e->getMessage()
        ]);
    }
}





}
