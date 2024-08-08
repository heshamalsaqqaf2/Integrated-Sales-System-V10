<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\AdminPanelSetting;
use App\Http\Requests\AdminPanelSettingsRequest;
use App\Http\Controllers\Controller;


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

    public function update(AdminPanelSettingsRequest $request)
    {
        try {
            $adminPanelSettings = AdminPanelSetting::where('com_code', auth()->user()->com_code)->first();
            $adminPanelSettings->system_name = $request->system_name;
            $adminPanelSettings->address = $request->address;
            $adminPanelSettings->phone = $request->phone;
            $adminPanelSettings->general_alert = $request->general_alert;
            $adminPanelSettings->updated_by = auth()->user()->id;
            $adminPanelSettings->updated_at = date("Y-m-d H:i:s");
            $oldPhotoPath = $adminPanelSettings->photo;
            if ($request->has('photo')) {
                $request->validate(['photo' => 'required|mimes:png,jpg,jpeg|max:2000']);
                $theFilePath = uploadImages('assets/uploads', $request->photo);
                $adminPanelSettings->photo = $theFilePath;
                if (file_exists('assets/uploads/' . $oldPhotoPath)) {
                    unlink('assets/uploads/' . $oldPhotoPath);
                }
            }
            $adminPanelSettings->save();
            return redirect()->route('admin.adminPanelSetting.index')->with('success', ' تم تحديث البيانات بنجاح ');
        } catch (\Exception $ex) {
            return redirect()->route('admin.adminPanelSetting.index')->with('error', ' عفوا حدث خطا ما في العملية ' . $ex->getMessage());
        }
    }
}
