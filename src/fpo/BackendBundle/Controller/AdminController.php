<?php

namespace fpo\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function welcomeAction()
    {

      //  return $this->render('BackendBundle:Default:index.html.twig',array('users'=>$usuarios));
     return $this->render('BackendBundle:Default:index.html.twig');
  //    return new Response("HOla mundoooooooooooooooooooooo yes");
    }

    public function loginAction(Request $request)
    {

        if($request->getMethod()== 'POST')
        {

            $usuario=$request->get('usuario');
            $clave=$request->get('clave');
            error_log("Usuario:".$usuario. "Clave:".$clave);
            //$user=$this->getDoctrine()->getRepository('BackendBundle:Usuario')->findBy(array('usuario'=>$usuario,'clave'=>$clave));
            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('BackendBundle:Usuario')->findby(array('usuario'=>$usuario,'clave'=>sha1($clave)));
           // error_log("OK".$user);
          //  var_dump(print_r($user));
            if($user)
            {
                error_log("entroooo prueba3");
               // $session = $request->getSession();
                //$session->set("id",$user->getId());
                //$session->set("nombres",$user->getNombres());

                return $this->redirect($this->generateUrl('backend_admin'));
                //return $this->indexAction();
            }
            else
            {
                error_log("entroooo prueba4");
                $this->get('session')->getFlashBag()->add(
                    'mensaje',
                    'Los datos ingresados no son válidos'
                );
                return $this->redirect($this->generateUrl('backend_login'));


            }



        }

        return $this->render('BackendBundle:login:login.html.twig');
    }


}
