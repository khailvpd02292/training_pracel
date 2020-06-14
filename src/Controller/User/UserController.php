<?php

namespace App\Controller\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller {
    
    /**
     * @Route("/", name="homepage")
     * @Method({"GET"})
     */
    public function index(){
        return $this->render('user/index.twig');
    }

    /**
     * @Route("/listRecruitment", name="listRecruitment")
     * @Method({"GET"})
     */
    public function listRecruitment(){
        return $this->render('user/listRecruitment.twig');
    }

    /**
     * @Route("/recruitmentDetail", name="recruitmentDetail")
     * @Method({"GET"})
     */
    public function recruitmentDetail(){
        return $this->render('user/recruitmentDetail.twig');
    }
}