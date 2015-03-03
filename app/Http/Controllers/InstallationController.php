<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterInstallationFormRequest;
use App\Installation;
use Illuminate\Http\Request;

class InstallationController extends Controller {

	/**
	 * @param Installation $installation
	 * @param RegisterInstallationFormRequest $request
     */
	public function register(Installation $installation, RegisterInstallationFormRequest $request)
	{
		$installation::create([
			'device_token'	=> $request->get('device_token')
		]);

		return \Response::json(['status' => 'ok']);
	}

}
