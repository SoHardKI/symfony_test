<?php

namespace App\Controller;

use App\Entity\RecArray;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArrayController extends AbstractController
{
    /**
     * @Route("/array", name="array")
     */
    public function index()
    {
        $recArray6 = new RecArray();
        $recArray6->setId(111);
        $recArray6->setName("AG PARKS, SIA");
        $recArray5 = new RecArray();
        $recArray5->setId(97);
        $recArray5->setName('Ester.EU, SIA');
        $recArray3 = new RecArray();
        $recArray3->setId(23);
        $recArray3->setName('DAMBIS BIROJS, SIA');
        $recArray3->setChild([$recArray6, $recArray5]);
        $recArray2 = new RecArray();
        $recArray2->setId(3);
        $recArray2->setName('EBV GROUP, SIA');
        $recArray1 = new RecArray();
        $recArray1->setId(1);
        $recArray1->setName('LANEKS Buve, SIA');
        $recArray1->setChild([$recArray2, $recArray3]);
        $recArray = new RecArray();
        $recArray->setId(999);
        $recArray->setName('AS BUILDCITY');
        $recArray->setChild([$recArray1]);
        echo '<pre>';
        print_r($recArray);
        echo '</pre>';
        die();

        return $this->render('array/index.html.twig', [
            'controller_name' => 'ArrayController',
        ]);
    }
}
