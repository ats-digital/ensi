<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * ProductController
 *
 * @author Wajih WERIEMI <wweriemi@ats-digital.com>
 */
class ProductController extends Controller
{
    /**
     * Index
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $products = $em->getRepository('AppBundle:Product')->findAll();

        return $this->render('AppBundle:Product:index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * Show
     *
     * @param int $id
     *
     * @throws NotFoundHttpFoundation
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $product = $em->getRepository('AppBundle:Product')->find($id);
        if (!$product) {
            $message = sprintf(
                'Unable to find Product identified by "%s".',
                $id
            );
            throw new NotFoundHttpException($message);
        }

        return $this->render('AppBundle:Product:show.html.twig', [
            'product' => $product,
        ]);
    }
}
