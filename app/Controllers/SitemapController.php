<?php

namespace App\Controllers;

use App\Models\Academic\ChapterModel;

class SitemapController extends BaseController
{
    public function index()
    {
        $chapterModel = new ChapterModel();
        $chapters = $chapterModel->findAll();

        return response()
            ->setContentType('text/xml')
            ->setBody($this->generateSitemap($chapters));
    }

    private function generateSitemap($chapters)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static pages
        $staticPages = [
            base_url('/'),
            base_url('about'),
            base_url('academics'),
            base_url('admissionpage'),
            base_url('contact'),
            base_url('student-content'),
            base_url('privacy-policy')
        ];

        foreach ($staticPages as $url) {
            $xml .= "<url>
                        <loc>{$url}</loc>
                        <changefreq>weekly</changefreq>
                        <priority>0.8</priority>
                     </url>";
        }

        // Dynamic chapter pages
        foreach ($chapters as $chapter) {
            $xml .= "<url>
                        <loc>" . base_url('student-content/' . $chapter['slug']) . "</loc>
                        <changefreq>monthly</changefreq>
                        <priority>0.7</priority>
                     </url>";
        }

        $xml .= '</urlset>';

        return $xml;
    }
}