<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class MessageLogs extends BaseController
{
    public function index()
    {
        $authCheck = $this->checkAdminAuth();
        if ($authCheck !== true) return $authCheck;

        $db             = \Config\Database::connect();
        $search         = $this->request->getGet('search')   ?? '';
        $filterStatus   = $this->request->getGet('status')   ?? '';
        $filterTemplate = $this->request->getGet('template') ?? '';
        $filterDate     = $this->request->getGet('date')     ?? '';
        $page           = (int) ($this->request->getGet('page') ?? 1);
        $perPage        = 50;

        $builder = $db->table('whatsapp_logs')->orderBy('sent_at', 'DESC');

        if (!empty($search)) {
            $builder->groupStart()
                ->like('recipient_name', $search)
                ->orLike('phone', $search)
                ->groupEnd();
        }
        if (!empty($filterStatus)) {
            $builder->where('status', $filterStatus);
        }
        if (!empty($filterTemplate)) {
            $builder->where('template_name', $filterTemplate);
        }
        if (!empty($filterDate)) {
            $builder->where('DATE(sent_at)', $filterDate);
        }

        $total   = $builder->countAllResults(false);
        $offset  = ($page - 1) * $perPage;
        $logs    = $builder->limit($perPage, $offset)->get()->getResultArray();

        // Summary counts
        $countSent   = $db->table('whatsapp_logs')->where('status', 'sent')->countAllResults();
        $countFailed = $db->table('whatsapp_logs')->where('status', 'failed')->countAllResults();

        // Distinct template names for filter
        $templateNames = $db->table('whatsapp_logs')
            ->distinct()
            ->select('template_name')
            ->orderBy('template_name')
            ->get()->getResultArray();
        $templateNames = array_column($templateNames, 'template_name');

        return view('admin/message_logs/index', [
            'logs'           => $logs,
            'total'          => $total,
            'countSent'      => $countSent,
            'countFailed'    => $countFailed,
            'currentPage'    => $page,
            'totalPages'     => (int) ceil($total / $perPage),
            'offset'         => $offset,
            'search'         => $search,
            'filterStatus'   => $filterStatus,
            'filterTemplate' => $filterTemplate,
            'filterDate'     => $filterDate,
            'templateNames'  => $templateNames,
        ]);
    }
}
