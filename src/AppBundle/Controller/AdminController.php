<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function addInventoryAction()
    {
        return $this->render('AppBundle:Admin:addInventory.html.twig', array(
                // ...
            ));    
    }

    public function editInventoryAction($id)
    {
        return $this->render('AppBundle:Admin:editInventory.html.twig', array(
                // ...
            ));    
    }

    public function listInventoryAction()
    {
        return $this->render('AppBundle:Admin:listInventory.html.twig', array(
                // ...
            ));    
    }

    public function deleteInventoryAction($id)
    {
        return $this->render('AppBundle:Admin:deleteInventory.html.twig', array(
                // ...
            ));    
    }

}
