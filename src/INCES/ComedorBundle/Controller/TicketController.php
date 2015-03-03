<?php

namespace INCES\ComedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use INCES\ComedorBundle\Entity\Usuario;

class TicketController extends Controller
{
  public function indexAction()
  {
    $html = $this->renderView('INCESComedorBundle:Ticket:index.html.twig');

    return new Response(
      $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
              'Content-Type'          => 'application/pdf',
              'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
          );

    }

    public function showAction($id)
    {

      $em = $this->getDoctrine()->getManager();

      $entity = $em->getRepository('INCESComedorBundle:Usuario')->find($id);

      $html = $this->renderView('INCESComedorBundle:Ticket:show.html.twig', array(
        'entity'      => $entity
      ));

      return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
              'Content-Type'          => 'application/pdf',
              'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
          );
    }
}
