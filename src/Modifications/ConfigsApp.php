<?php

namespace Dacastro4\LaravelGmail\Modifications;

trait ConfigsApp
{
	public function getConfigsApp()
	{
		return [
			'use_application_default_credentials' => $this->_config['gmail.use_application_default_credentials'],
			'application_name' => $this->_config['gmail.application_name'],
			'subject' => $this->_config['gmail.subject'],
			'scopes' => $this->_config['gmail.scopes'],
		];
	}


}
