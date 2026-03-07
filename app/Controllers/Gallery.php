<?php 

namespace App\Controllers;


class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => '??? ??? - ??? ??????',
            'meta_description' => '??? ?????? ? ??? ??? ? ??? ???? ?? ???? ??',
            'gallery' => $this->getGalleryData(),
            'show_welcome_modal' => false
        ];

        return view('templates/headerdash1', $data)
              . view('gallery/index')
              . view('templates/footerdash');
    }

    protected function getGalleryData()
    {
        $model = new \App\Models\GalleryModel();
        return $model->orderBy('year', 'DESC')->findAll();
    }
}
