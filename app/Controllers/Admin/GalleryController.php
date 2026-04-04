<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class GalleryController extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        // list all entries
        $data['items'] = $this->galleryModel->orderBy('year', 'DESC')->findAll();
        return view('admin/gallery/index', $data);
    }

    public function create()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        return view('admin/gallery/form');
    }

    public function store()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;


        helper(['form']);

        $validation = $this->validate([
            'year'       => 'required|max_length[20]',
            'batch_type' => 'required|max_length[50]',
            'images'     => 'uploaded[images]|max_size[images,4096]',
        ]);

        if (! $validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $files = $this->request->getFileMultiple('images');
        $year = $this->request->getPost('year');
        $batchType = $this->request->getPost('batch_type');
        $studentsCount = $this->request->getPost('students_count');
        $uploadedCount = 0;

        foreach ($files as $file) {
            if ($file->isValid() && ! $file->hasMoved()) {
                // validate each image
                if (!$file->isImage()) {
                    continue; // skip non-image files
                }
                
                $name = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads/gallery', $name);

                $this->galleryModel->save([
                    'year'          => $year,
                    'batch_type'    => $batchType,
                    'image'         => $name,
                    'students_count'=> $studentsCount,
                ]);
                
                $uploadedCount++;
            }
        }

        $message = $uploadedCount === 1 ? 'Gallery item added.' : "$uploadedCount gallery items added.";
        return redirect()->to('/admin/gallery')->with('success', $message);
    }

    public function edit($id = null)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $item = $this->galleryModel->find($id);
        if (! $item) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Gallery entry not found');
        }
        return view('admin/gallery/form', ['item' => $item]);
    }

    public function update($id = null)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        helper(['form']);

        $validationRules = [
            'year'       => 'required|max_length[20]',
            'batch_type' => 'required|max_length[50]',
        ];

        if ($this->request->getFile('image')->isValid()) {
            $validationRules['image'] = 'max_size[image,4096]|is_image[image]';
        }

        if (! $this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'year'       => $this->request->getPost('year'),
            'batch_type' => $this->request->getPost('batch_type'),
            'students_count' => $this->request->getPost('students_count'),
        ];

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved()) {
            $name = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads/gallery', $name);
            $data['image'] = $name;
        }

        $this->galleryModel->update($id, $data);
        return redirect()->to('/admin/gallery')->with('success', 'Gallery item updated.');
    }

    public function delete($id = null)
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $this->galleryModel->delete($id);
        return redirect()->to('/admin/gallery')->with('success', 'Gallery item removed.');
    }
}
