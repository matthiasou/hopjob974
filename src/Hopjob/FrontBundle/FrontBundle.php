<?php

namespace Hopjob\FrontBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrontBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
