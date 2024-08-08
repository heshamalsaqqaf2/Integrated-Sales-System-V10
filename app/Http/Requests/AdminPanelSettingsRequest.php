<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $address
 * @property mixed $system_name
 * @property mixed $general_alert
 * @property mixed $phone
 * @property mixed $photo
 */
class AdminPanelSettingsRequest extends FormRequest
{

	public function authorize(): bool
	{
		return true;
	}

	public function rules(): array
	{
		return [
			'system_name' => 'required',
			'phone' => 'required',
			'address' => 'required',
		];
	}

	public function messages(): array
	{
		return [
			'system_name.required' => 'اسم الشركة مطلوب',
			'phone.required' => 'هاتف الشركة مطلوبة',
			'address.required' => 'موقع الشركة مطلوبة',
		];
	}
}
