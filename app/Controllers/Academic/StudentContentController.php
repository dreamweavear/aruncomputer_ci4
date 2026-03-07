<?php namespace App\Controllers\Academic;

use App\Controllers\BaseController;
use App\Models\Academic\CourseModel;
use App\Models\Academic\PaperModel;
use App\Models\Academic\UnitModel;
use App\Models\Academic\ChapterModel;

class StudentContentController extends BaseController
{
    public function index()
{
    $courseModel = new \App\Models\Academic\CourseModel();
    $paperModel = new \App\Models\Academic\PaperModel();
    $unitModel = new \App\Models\Academic\UnitModel();
    $chapterModel = new \App\Models\Academic\ChapterModel();

    $data = [
        'courses' => $courseModel->findAll(),
        'papers' => $paperModel->findAll(),
        'units' => $unitModel->findAll(),
        'chapters' => $chapterModel->findAll(),
                // ✅ SEO DATA
        'meta_title' => 'Study Material (LMS) - Arun Computer College Rewa',
        'meta_description' => 'PGDCA, DCA, Tally and Programming study material for students of Arun Computer College Rewa.',
        'meta_url' => base_url('student-content')
    ];

    //echo view('templates/headerdash1');
    echo view('student/sidebar_content', $data); // Sidebar left
    echo view('student/chapter_view');        // Right side default message
    echo view('templates/footerdash');
}
 
 
    //chapter content view page me back next button add karne ke liye change data 30-1-26

    public function viewChapter($slug)
{
    $chapterModel = new ChapterModel();
    $chapter = $chapterModel->where('slug', $slug)->first();

    if (!$chapter) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Chapter not found");
    }

    $unitId = $chapter['unit_id'];
    $currentId = $chapter['id'];

    // Previous Chapter (same unit)
    $previous = $chapterModel
        ->where('unit_id', $unitId)
        ->where('id <', $currentId)
        ->orderBy('id', 'DESC')
        ->first();

    // Next Chapter (same unit)
    $next = $chapterModel
        ->where('unit_id', $unitId)
        ->where('id >', $currentId)
        ->orderBy('id', 'ASC')
        ->first();

    $courseModel = new CourseModel();
    $paperModel = new PaperModel();
    $unitModel = new UnitModel();

    $data = [
        'chapter' => $chapter,
        'previous' => $previous,
        'next' => $next,
        'courses' => $courseModel->findAll(),
        'papers' => $paperModel->findAll(),
        'units' => $unitModel->findAll(),
        'chapters' => $chapterModel->findAll(),
         // ✅ Dynamic SEO
        'meta_title' => $chapter['name'] . ' | Arun Computer College Rewa',
        'meta_description' => substr(strip_tags($chapter['content']), 0, 150),
        'meta_url' => current_url()

    ];

    echo view('student/sidebar_content', $data);
    echo view('student/chapter_view', $data);
    echo view('templates/footerdash');
}


}