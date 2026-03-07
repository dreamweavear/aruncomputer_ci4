<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\ChapterModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Chapter extends BaseController
{
    public function exportPdf($slug)
    {
        $chapterModel = new ChapterModel();
        $chapter = $chapterModel->where('slug', $slug)->first();

        if (!$chapter) {
            return redirect()->back()->with('error', 'Chapter not found');
        }

        $data = ['chapter' => $chapter];
        $html = view('student/chapter_pdf', $data);

        $options = new Options();
        // $options->set('defaultFont', 'DejaVu Sans');
          $options->set('defaultFont', 'Nato Sans');
        // $options->set('defaultFont', 'NotoSansDevanagari');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html, 'UTF-8');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("chapter.pdf", ['Attachment' => false]);
        exit;



            // Font register

// $fontPath = FCPATH . 'fonts/NotoSansDevanagari-Regular.ttf';

// $dompdf->getOptions()->setChroot($fontDir);
// $dompdf->getFontMetrics()->getFont('NotoSansDevanagari', 'normal');

    }
}
