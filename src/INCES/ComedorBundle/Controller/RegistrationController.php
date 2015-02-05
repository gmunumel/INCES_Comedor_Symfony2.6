<?php

namespace INCES\ComedorBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class RegistrationController extends Controller
{
  public function registerAction(Request $request)
  {
    // @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface
    $formFactory = $this->get('fos_user.registration.form.Factory');
    // @var $userManager \FOS\UserBundle\Model\UserManagerInterface
    $userManager = $this->get('fos_user.user_manager');
    // @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface
    $dispatcher = $this->get('event_dispatcher');

    // get the base url
    $route = $request->getBaseUrl();

    $user = $userManager->createUser();
    $user->setEnabled(true);

    $event = new GetResponseUserEvent($user, $request);
    $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

    if (null !== $event->getResponse()) {
      return $event->getResponse();
      }

      $form = $formFactory->createForm();
      $form->setData($user);

      $form->handleRequest($request);

      if ($form->isValid()) {
        $event = new FormEvent($form, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

        $userManager->updateUser($user);

        /*
        if (null === $response = $event->getResponse()) {
          $url = $this->generateUrl('registration_confirmed');
          $response = new RedirectResponse($url);
        }
         */

        // to automatically login the user just created
        //$dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

        //return $response;
        $route = $request->getBaseUrl();
        return new Response($route);
      }

        return $this->render('INCESComedorBundle:Registration:register.html.twig', array(
            'form'  => $form->createView(),
            'route' => $route
          ));

    }

    /**
     *  * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
      $user = $this->getUser();
      if (!is_object($user) || !$user instanceof UserInterface) {
        $translated = 'This user does not have access to this section.';
        throw new AccessDeniedException($translated);
      }
    }
}
