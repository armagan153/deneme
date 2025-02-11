<?php

namespace App\SuperAdmin\Http\Requests\Api\Settings;

use App\SuperAdmin\Http\Requests\Api\SuperAdminBaseRequest;

class StorageUpdateRequest extends SuperAdminBaseRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */

	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'filesystem'    => 'required',
		];


		if ($this->filesystem == 'aws') {
			$rules = [
				'filesystem'    => 'required',
				'key'    => 'required',
				'secret'    => 'required',
				'region'    => 'required',
				'bucket'    => 'required',
			];
		}

		return $rules;
	}
}
