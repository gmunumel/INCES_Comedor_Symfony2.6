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
        //return new Response($route.'#!/admin/list');
        return new Response($route);
      }
        //$error = "";
        if ('POST' === $request->getMethod()) {
          //
          //  return new Response(
          //      "<p id='login-msg' class='message red'>ERROR: ha ocurrido un error. Por favor, coloque otro nombre de usuario o correo.</p>"
          //  );
          //
          //
          //return $this->container->get('templating')->renderResponse('INCESComedorBundle:UserAdmin:list.html.twig', array(
          //  'error' => $error
          //));
          //return new Response($route.'/#!/admin/list');
          //$error = "<p id='login-msg' class='message red'>ERROR: ha ocurrido un error. Por favor, coloque otro nombre de usuario o correo.</p>";
        }

        return $this->render('INCESComedorBundle:Registration:register.html.twig', array(
          'form'  => $form->createView(),
            //'theme' => $this->container->getParameter('fos_user.template.theme'),
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
        $translated = 'This user does not have access to this section..';
        throw new AccessDeniedException($translated);
      }

      /*
      $request = $this->getRequest();
      $route = $request->getBaseUrl();
      //return new Response($route.'/#!/admin/register/confirmed');
      return $this->redirect($route.'/#!/admin/register/confirmed');
       */
      /*
      $request = $this->getRequest();
      $route = $request->getBaseUrl();
      return new RedirectResponse($route.'/');
       */
      /*
      return $this->render('INCESComedorBundle:Registration:confirmed.html.twig', array(
        'user' => $user,
      ));
       */
    }
}
