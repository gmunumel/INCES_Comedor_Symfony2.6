<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace INCES\ComedorBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends BaseController
{
  public function loginAction()
  {
    $request = $this->container->get('request');
    /* @var $request \Symfony\Component\HttpFoundation\Request */
    $session = $request->getSession();
    /* @var $session \Symfony\Component\HttpFoundation\Session */

    // get the error if any (works with forward and redirect -- see below)
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
       //$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
       $error = "ERROR: Please, try again.";
    } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
       //$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
       $session->remove(SecurityContext::AUTHENTICATION_ERROR);
       $error = "ERROR: Please, try again.";
    } else {
       $error = '';
    }

    /*
    if (!$error instanceof AuthenticationException) {
      $error = null; // The value does not come from the security component.
    }
     */
    /*
    if ($error) {
        // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
        $error = $error->getMessage();
    }
     */
    // last username entered by the user
    $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

    $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

    $route = $request->getBaseUrl();
    return $this->container->get('templating')->renderResponse('INCESComedorBundle:Security:login.html.twig', array(
      'last_username' => $lastUsername,
      'error'         => $error,
      'csrf_token'    => $csrfToken,
      'route'         => $route,
    ));
  }

    public function checkAction()
    {
      $translated = 'You must configure the path to be handled by the firewall using form_login in your security firewall configuration.';
      throw new \RuntimeException($translated);
    }

    public function logoutAction()
    {
      $translated = 'You must activate the logout in your security firewall configuration.';
      throw new \RuntimeException($translated);
    }
}
