<?php
namespace fpo\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MantenimientoController extends Controller
{
    public function crudGrupoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("select  G.ID ,G.DESCRIPCION ,CASE
     WHEN G.ESTADO =  '0' THEN 'Inactivo'
     WHEN G.ESTADO = '1' THEN 'Activo'
     ELSE 'Inactivo'
     END AS ESTADO from grupos G");

        $statement->execute();
        $crudGrupo = $statement->fetchAll();
        return $this->render('BackendBundle:crud:grupo.html.twig',array('crudGrupo' => $crudGrupo));
     // return new Response(print_r($reportGeneral));

    }
    public function crudGrupoAddAction(Request $request)
    {

        if($request->getMethod()== 'POST')
       {
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT sp_insertarGrupo('".$request->get('descripcion')."');");
     /*   $statement2 = $connection->prepare("select  G.ID ,G.DESCRIPCION ,CASE
                                             WHEN G.ESTADO =  '0' THEN 'Inactivo'
                                             WHEN G.ESTADO = '1' THEN 'Activo'
                                             ELSE 'Inactivo'
                                             END AS ESTADO from grupos G");*/

        $statement->execute();
      /*  $statement2->execute();
        $data = $statement2->fetchAll();
         //var_dump($data.count);
           $tbody='';

         foreach ( $data as &$valor)
         {
          $tbody.='<tr>'.
                 '<td>'.$valor["descripcion"].'</td>'.
                 '<td>'.$valor["estado"].'</td>'.
                 '<td>'.
                    '<a href="{{path(backend_admin_crudEdit,{id:'.$valor["id"].'})}}" id="enlaceEditar" class="btn btn-primary" data-toggle="modal" data-target="#myModalEdit">Editar</a>'.
                    '<a href="{{path(backend_admin_crudAct,{id:'.$valor["id"].' })}}" id="enlaceActivar" class="btn btn-facebook activar-btn">Activar</a>'.
                    '<a href="{{path(backend_admin_crudRemov,{id:'.$valor["id"].'})}}" id="enlaceEliminar" class="btn btn-danger btn-flat delete-btn">Inactivar</a>'.
                 '</td>'.
                 '</tr>';
         }


        return new Response($tbody);*/
        return $this->crudGrupoAction();
       }

    }
    public function crudGrupoRemovAction(Request $request)
    {

            $em = $this->getDoctrine()->getManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT sp_eliminarGrupo(".$request->get('id').");");
            $statement2 = $connection->prepare("SELECT estado from grupos where id=".$request->get('id').";");
            $statement->execute();
            $statement2->execute();
            $data = $statement2->fetch();
            return new JsonResponse($data);

    }

    public function crudGrupoActAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("update grupos set estado='1' where id=".$request->get('id'));
        $statement2 = $connection->prepare("SELECT estado from grupos where id=".$request->get('id').";");
        $statement->execute();$statement2->execute();
        $data = $statement2->fetch();
        return new JsonResponse($data);

        //return new Response(print_r($request->get('id')));
       /* $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("update grupos set estado='1' where id=".$request->get('id'));

        $statement->execute();
        // $crudGrupo = $statement->fetchAll();
        return $this->redirect($this->generateUrl('backend_admin_crudGrupo'));*/


    }

    public function crudGrupoEditAction(Request $request)
    {

        if($request->getMethod()== 'POST')
        {
            $em = $this->getDoctrine()->getManager();

            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT sp_modificargrupo(".$request->get('id').",'".$request->get('descripcion')."');");
            $statement->execute();
            return $this->crudGrupoAction();
        }

    }

/*******************  Estudiantes *******************************************************************************/
    public function crudEstudianteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT nombres, apellidop, apellidom, cedula as cedula1, paralelo, anolectivo,
       fecha_creacion, fecha_modificacion, CASE
     WHEN ESTADO =  '0' THEN 'Inactivo'
     WHEN ESTADO = '1' THEN 'Activo'
     ELSE 'Inactivo'
     END AS ESTADO
  FROM estudiante  order by nombres,apellidop,apellidom");

        $statement->execute();
        $crudEstudiante = $statement->fetchAll();
        return $this->render('BackendBundle:crud:Estudiante.html.twig',array('crudEstudiante' => $crudEstudiante));
        // return new Response(print_r($reportGeneral));

    }

    public function crudEstudianteAddAction(Request $request)
    {

        if($request->getMethod()== 'POST')
        {

            $em = $this->getDoctrine()->getManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT sp_insertarestudiante('".$request->get('nombres')."','".$request->get('apellidop')."','".$request->get('apellidom')."','".$request->get('cedula')."','".$request->get('paralelo')."','".$request->get('anolectivo')."');");
            $statement->execute();
            return $this->crudEstudianteAction();
        }

    }
/*Corregir el metodo*/
    public function crudEstudianteEditAction(Request $request)
    {

        if($request->getMethod()== 'POST')
        {
            $em = $this->getDoctrine()->getManager();

            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT sp_modificarestudiante('".$request->get('nombres')."','".$request->get('apellidop')."','".$request->get('apellidom')."','".$request->get('paralelo')."','".$request->get('anolectivo')."','".$request->get('cedula')."');");
            $statement->execute();
            return $this->crudGrupoAction();
        }

    }

    public function crudEstudianteActAction(Request $request)
    {
        $cedula=$request->get('cedula');
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("UPDATE estudiante SET estado='1' WHERE cedula='".$cedula."'");
        $statement2 = $connection->prepare("SELECT estado from estudiante where cedula='".$cedula."'");
        $statement->execute();$statement2->execute();
        $data = $statement2->fetch();
        return new JsonResponse($data);

    }

    public function crudEstudianteRemovAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT sp_eliminarestudiante('".$request->get('cedula')."');");
        $statement2 = $connection->prepare("SELECT estado from estudiante where cedula='".$request->get('cedula')."'");
        $statement->execute();
        $statement2->execute();
        $data = $statement2->fetch();
        return new JsonResponse($data);
    }
/**************************************************************************************************************************************/

}

