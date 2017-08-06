<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryAdminController extends Controller
{
    /**
     * @Route("/admin/category/new")
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = new Category();

        $category->setName('Обогреватели');
        $category->setSlug('heaters');

        $em->persist($category);
        $em->flush();

        return new Response('Saved new product with id '.$category->getId());
    }

}