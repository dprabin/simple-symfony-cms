<?php 

namespace Stm\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class SecurityController extends Controller
{
	/**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
	{
		/*** this code is for older versions of Symfony
		*  piror to Symfony2.6

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
		*/

		/**
		 * The security.authentication_utils service and the 
		 * AuthenticationUtils class were introduced in Symfony 2.6.
		 * cannot be used in previous version
		 */
		$authenticationUtils = $this->get('security.authentication_utils');

		//get the login error if any
		$error = $authenticationUtils->getLastAuthenticationError();
		//Last username entered by the user
		$lastUsername = $authenticationUtils->getLastUsername;

		//render the view
		return $this->render(
			'StmCMSBundle:Security:login.html.twig', 
			array('error' => $error,'last_username' => $lastUsername)
		);
	}

	/**
	  * @Route("/login_check", name="login_check")
	  */
	public function loginCheckAction()
	{

	}
}

?>