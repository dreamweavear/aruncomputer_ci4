<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\ChapterModel;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

class Chapter extends BaseController
{
    public function exportpdf($slug)
    {
        // ✅ Increase limits for PDF generation
        set_time_limit(120);
        ini_set('memory_limit', '128M');
        
        $chapterModel = new ChapterModel();
        $chapter = $chapterModel->where('slug', $slug)->first();

        if (!$chapter) {
            return redirect()->back()->with('error', 'Chapter not found');
        }

        // ✅ PDF Cache Directory
        $cacheDir = WRITEPATH . 'pdf_cache/';
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0777, true);
        }
        
        // ✅ Cache file name (slug based)
        $cacheFile = $cacheDir . $slug . '.pdf';
        
        // ✅ Check if cached PDF exists and is fresh (less than 24 hours old)


        $cacheTime = 72 * 3600; // 72 hours in seconds
         if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime)
         {
            // ✅ Serve from cache
            return $this->serveCachedPdf($cacheFile, $chapter['name']);
        }
        
        // ✅ Generate new PDF and cache it
        $pdfContent = $this->generatePdf($chapter);
        
        // ✅ Save to cache
        file_put_contents($cacheFile, $pdfContent);
        
        // ✅ Serve the generated PDF
        return $this->servePdfContent($pdfContent, $chapter['name']);
    }
    
    /**
     * Generate PDF content
     */
    private function generatePdf($chapter)
    {
        // Ensure temporary directory exists
        $tempDir = WRITEPATH . 'mpdf_temp';
        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        // Configure mPDF
        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        
        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        
        $config = [
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P',
            'default_font_size' => 14,
            'default_font' => 'mangal', 
            'margin_left' => 15,
            'margin_right' => 15,
            'margin_top' => 25,
            'margin_bottom' => 20,
            'margin_header' => 5,
            'margin_footer' => 10,
            'fontDir' => array_merge($fontDirs, [
                FCPATH . 'fonts/'
            ]),
            'fontdata' => $fontData + [
                'mangal' => [ 
                    'R' => 'Mangal Regular.ttf',
                    'B' => 'Mangal Bold.ttf',
                    'useOTL' => 0x00,
                    'useKashida' => 0,
                ]
            ],
            'tempDir' => $tempDir,
            'autoScriptToLang' => true,
            'autoLangToFont' => true,
            'useSubstitutions' => true,
        ];

        // Create mPDF instance
        $mpdf = new Mpdf($config);
        
        // Text watermark
        $mpdf->SetWatermarkText('ARUN COMPUTER', 0.08);
        $mpdf->showWatermarkText = true;
        
        // Header
        $mpdf->SetHTMLHeader('
        <div style="text-align: center; border-bottom: 2px solid #000; padding-bottom: 5px; margin-bottom: 10px;">
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="15%" style="text-align: left; vertical-align: middle;">
                        <img src="' . base_url('assets/images/apple-touch-icon.png') . '" style="height: 60px; width: auto;">
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <h1 style="font-family: mangal; font-size: 20px; margin: 0; color: #000080;">
                            <strong>अरुण कंप्यूटर कॉलेज</strong>
                        </h1>
                        <p style="font-family: mangal; font-size: 14px; margin: 2px 0; color: #333;">
                            शिक्षा का उज्ज्वल भविष्य
                        </p>
                    </td>
                    <td width="15%" style="text-align: right; vertical-align: middle;">
                        <div style="font-family: mangal; font-size: 12px; color: #666;">
                            ' . date('d/m/Y') . '
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        ');
        
        // Footer
        $mpdf->SetHTMLFooter('
        <div style="text-align: center; font-family: mangal; font-size: 10px; color: #666; border-top: 1px solid #ccc; padding-top: 5px;">
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="33%" style="text-align: left;">
                        पेज {PAGENO} / {nbpg}
                    </td>
                    <td width="34%" style="text-align: center;">
                        अरुण कंप्यूटर कॉलेज © ' . date('Y') . '
                    </td>
                    <td width="33%" style="text-align: right;">
                        www.aruncomputer.com
                    </td>
                </tr>
            </table>
        </div>
        ');

        // Set metadata
        $mpdf->SetTitle($chapter['name'] . ' - Arun Computer College');
        $mpdf->SetAuthor('Arun Computer College');
        
        // Add page
        $mpdf->AddPage();

        // Content
        $chapterTitle = '
        <div style="text-align: center; margin-bottom: 20px;">
            <h2 style="font-family: mangal; font-size: 22px; color: #000080; margin-bottom: 5px; padding-bottom: 5px; border-bottom: 2px solid #000080;">
                ' . htmlspecialchars($chapter['name']) . '
            </h2>
            <div style="font-family: mangal; font-size: 12px; color: #666; margin-top: 5px;">
                अध्याय सामग्री
            </div>
        </div>
        ';

        $content = '
        <style>
            .chapter-content {
                font-family: mangal;
                font-size: 14px;
                line-height: 1.4;
                text-align: justify;
                text-justify: inter-word;
                margin: 0;
                padding: 0;
            }
            .chapter-content p {
                margin-top: 8px;
                margin-bottom: 8px;
                text-indent: 20px;
            }
        </style>
        
        <div class="chapter-content">';
        
        $filteredContent = $this->removeImagesFromContent($chapter['content']);
        $htmlContent = $chapterTitle . $content . $filteredContent . '</div>';
        
        $mpdf->WriteHTML($htmlContent);
        
        // Return as string for caching
        return $mpdf->Output('', 'S');
    }
    
    /**
     * Serve cached PDF file
     */
    private function serveCachedPdf($cacheFile, $chapterName)
    {
        // Set headers
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $chapterName . '.pdf"');
        header('Content-Length: ' . filesize($cacheFile));
        header('X-Cache-Status: HIT');
        
        // Serve from cache
        readfile($cacheFile);
        exit;
    }
    
    /**
     * Serve PDF content directly
     */
    private function servePdfContent($pdfContent, $chapterName)
    {
        // Set headers
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $chapterName . '.pdf"');
        header('Content-Length: ' . strlen($pdfContent));
        header('X-Cache-Status: MISS');
        
        // Output PDF content
        echo $pdfContent;
        exit;
    }
    
    /**
     * Remove images from content
     */
    private function removeImagesFromContent($html)
    {
        $html = preg_replace('/<img[^>]+\>/i', '', $html);
        $html = preg_replace('/<div[^>]*class="[^"]*(image|img|photo|figure)[^"]*"[^>]*>\s*<\/div>/i', '', $html);
        $html = preg_replace('/<figure[^>]*>.*?<\/figure>/is', '', $html);
        $html = preg_replace('/<p>\s*<\/p>/i', '', $html);
        $html = preg_replace('/(<br\s*\/?>\s*){3,}/i', '<br><br>', $html);
        
        return $html;
    }
    
    /**
     * ✅ ADMIN: Clear PDF cache
     */
    public function clearCache()
    {
        // Admin check
        if (!session()->get('is_admin')) {
            return redirect()->to('/login');
        }
        
        $cacheDir = WRITEPATH . 'pdf_cache/';
        $deleted = 0;
        
        if (is_dir($cacheDir)) {
            $files = glob($cacheDir . '*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                    $deleted++;
                }
            }
        }
        
        return redirect()->to('/admin/cache-status')->with('success', $deleted . ' cached PDF files deleted successfully');
    }
    
    /**
     * ✅ ADMIN: View cache status
     */
    public function cacheStatus()
    {
        // Admin check
        if (!session()->get('is_admin')) {
            return redirect()->to('/login');
        }
        
        $cacheDir = WRITEPATH . 'pdf_cache/';
        $files = [];
        $totalSize = 0;
        
        if (is_dir($cacheDir)) {
            $fileList = glob($cacheDir . '*.pdf');
            
            foreach ($fileList as $file) {
                $fileSize = filesize($file);
                $totalSize += $fileSize;
                
                $files[] = [
                    'name' => basename($file),
                    'slug' => str_replace('.pdf', '', basename($file)),
                    'size' => round($fileSize / 1024, 2),
                    'created' => date('d/m/Y H:i:s', filemtime($file)),
                    'age' => $this->formatAge(time() - filemtime($file))
                ];
            }
        }
        
        // Sort by newest first
        usort($files, function($a, $b) {
            return strtotime($b['created']) - strtotime($a['created']);
        });
        
        return view('admin/cache_status', [
            'files' => $files,
            'totalFiles' => count($files),
            'totalSize' => round($totalSize / 1024 / 1024, 2)
        ]);
    }
    
    private function formatAge($seconds)
    {
        if ($seconds < 60) return $seconds . ' seconds ago';
        if ($seconds < 3600) return floor($seconds / 60) . ' minutes ago';
        if ($seconds < 86400) return floor($seconds / 3600) . ' hours ago';
        return floor($seconds / 86400) . ' days ago';
    }
}