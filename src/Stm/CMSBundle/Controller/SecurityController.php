<?php 

namespace Stm\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class SecurityController extends Controller
{
	public function loginAction(Request $request)
	{
		$session = $request->getSession();

		//Get the login error if there is any
		if($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
		} elseif (null != $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
			$error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
			$session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
		} else {
			$error = '';
		}

		//Last username entered by the user
		$lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

		return $this->render(
			'StmCMSBundle:Security:login.html.twig', 
			array('error' => $error,)
		);
	}
}

?>