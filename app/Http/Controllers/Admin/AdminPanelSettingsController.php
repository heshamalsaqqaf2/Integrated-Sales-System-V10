<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminPanelSetting;
use App\Models\Admin;

class AdminPanelSettingsController extends Controller
{
    public function index()
    {
        $data = AdminPanelSetting::where('com_code', auth()->user()->com_code)->first();
        if (!empty($data)) {
            if ($data['updated_by'] > 0 and $data['updated_by'] != null) {
                $data['updated_by_admin'] = Admin::where('id', $data['updated_by'])->value('name');
            }
        }
        return view('admin.admin_panel_settings.index', ['data' => $data]);
    }

    public function edit()
    {
        $data = AdminPanelSetting::where('com_code', auth()->user()->com_code)->first();
        return view('admin.admin_panel_settings.edit', ['data' => $data]);
    }
}
