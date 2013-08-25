<?php

namespace CRM\BackBundle\Controller;

use CRM\CoreBundle\Entity\Customer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller
{
    /**
     * Display an index of all customers
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $customers = $this->getDoctrine()->getManager()->getRepository('CRMCoreBundle:Customer')->findAll();

        return $this->render(
            'CRMBackBundle:Customer:index.html.twig',
            array(
                'customers' => $customers
            )
        );
    }

    /**
     * Display a customer
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function viewAction($id)
    {
        $customer = $this->getDoctrine()->getRepository('CRMCoreBundle:Customer')->find($id);

        if (!$customer) {
            throw $this->createNotFoundException('Aucun client trouvé pour cet id : '.$id);
        }

        return $this->render(
            'CRMBackBundle:Customer:view.html.twig',
            array(
                'customer' => $customer
            )
        );
    }

    /**
     * Create a customer
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $customer = new Customer();
        $form = $this->createForm(
            'customer',
            $customer ,
            array(
                'action' => $this->generateUrl('crm_customer_new'),
                'method' => 'POST'
            )
        );

        if ($request->getMethod() == 'POST') {
            if ($form->handleRequest($request)->isValid()) {

                $customer->getFile()->move(__DIR__.'/../../../../web/'.$this->container->getParameter('avatar_dir'), $customer->getFile()->getClientOriginalName());

                $customer->setUploadDir($this->container->getParameter('avatar_dir'));
                $customer->setAvatar($customer->getFile()->getClientOriginalName());
                $em->persist($customer);
                $em->flush();

                $this->get('session')->getFlashBag()->add('notice','customer_created');
                return $this->redirect($this->generateUrl('crm_customer_view', array('id' => $customer->getId())));
            }
        }

        return $this->render(
            'CRMBackBundle:Customer:new.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Update a customer
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('CRMCoreBundle:Customer')->find($id);

        if (!$customer) {
            throw $this->createNotFoundException('Aucun client trouvé pour cet id : '.$id);
        }

        $form = $this->createForm(
            'customer',
            $customer ,
            array(
                'action' => $this->generateUrl('crm_customer_update', array('id' => $id)),
                'method' => 'POST'
            )
        );

        if ($request->getMethod() == 'POST') {
            if ($form->handleRequest($request)->isValid()) {
                $em->flush();

                $this->get('session')->getFlashBag()->add('notice','customer_updated');

                return $this->redirect($this->generateUrl('crm_customer_view', array('id' => $id)));
            }
        }

        return $this->render(
            'CRMBackBundle:Customer:update.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Delete a customer
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $customer = $em->getRepository('CRMCoreBundle:Customer')->find($id);

        if (!$customer) {
            throw $this->createNotFoundException('Aucun client trouvé pour cet id : '.$id);
        }

        $em->remove($customer);
        $em->flush();

        $this->get('session')->getFlashBag()->add('notice','customer_deleted');
        return $this->redirect($this->generateUrl('crm_customer_index'));

    }
}
