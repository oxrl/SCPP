<?php

namespace fpo\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReportController extends Controller
{
    public function reportGeneralAction()
    {
        //$em = $this->getDoctrine()->getEntityManager();
        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT _cedula
                ,_nombres
                ,_apellidos
                ,_grupo
                ,_lugar
                ,_fecha_inicio
                ,_fecha_fin
                ,_diagnostico
                ,_profilaxis
                ,_operatoria
                ,_endodoncia
                ,_exodoncia
                ,_rx
                ,_sellantes
                ,_fluorizacion
                ,_periodoncia
                ,_charlas
                ,_NUMPACIENTESH
                ,_NUMPACIENTESM
                ,_HORASACREDITADA FROM sp_reportesPracProfesionales()");

        $statement->execute();
        $reportGeneral = $statement->fetchAll();

       return $this->render('BackendBundle:Report:reportGeneral.html.twig',array('reportGeneral' => $reportGeneral));
     // return new Response(print_r($reportGeneral));

    }

    public function ReportVigentesTotalizadosAction()
    {

        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT R.CEDULA,E.NOMBRES,E.APELLIDOP||' '||E.APELLIDOM AS APELLIDOS ,SUM(A.DIAGNOSTICO) AS DIAGNOSTICO,SUM(A.PROFILAXIS) AS PROFILAXIS,SUM(A.OPERATORIA) AS OPERATORIA,SUM(A.ENDODONCIA)  AS ENDODONCIA,SUM(A.EXODONCIA) AS EXODONCIA,SUM(A.RX) AS RX,SUM(A.SELLANTES) AS SELLANTES,SUM(A.FLUORIZACION) AS FLUORIZACION,SUM(A.PERIODONCIA) AS PERIODONCIA,SUM(A.CHARLAS) AS CHARLAS,SUM(A.NUMPACIENTESH) AS NUMPACIENTESH,SUM(A.NUMPACIENTESM) AS NUMPACIENTESM,SUM(R.HORASACREDITADAS)  AS HORASACREDITADAS FROM REGISTRO R
                INNER JOIN ACTIVIDADES A ON A.CODIGO=R.ACTIVIDADES  AND A.ESTADO='1'
                INNER JOIN ESTUDIANTE E ON E.CEDULA=R.CEDULA  AND E.ESTADO='1'
                INNER JOIN GRUPOS G ON G.ID=R.GRUPO AND G.ESTADO='1'
                INNER JOIN INSTITUCION I ON I.CODIGO = R.INSTITUCION AND I.ESTADO='1'
                GROUP BY R.CEDULA,E.NOMBRES,APELLIDOS
                HAVING SUM(R.HORASACREDITADAS) < 240");

        $statement->execute();
        $reportVigentes = $statement->fetchAll();

        return $this->render('BackendBundle:Report:reportVigentes.html.twig',array('reportVigentes' => $reportVigentes));
        // return new Response(print_r($reportGeneral));


    }

    public function reportFinalizadosTotalizadosAction()
    {

        $em = $this->getDoctrine()->getManager();

        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT R.CEDULA,E.NOMBRES,E.APELLIDOP||' '||E.APELLIDOM AS APELLIDOS ,SUM(A.DIAGNOSTICO) AS DIAGNOSTICO,SUM(A.PROFILAXIS) AS PROFILAXIS,SUM(A.OPERATORIA) AS OPERATORIA,SUM(A.ENDODONCIA)  AS ENDODONCIA,SUM(A.EXODONCIA) AS EXODONCIA,SUM(A.RX) AS RX,SUM(A.SELLANTES) AS SELLANTES,SUM(A.FLUORIZACION) AS FLUORIZACION,SUM(A.PERIODONCIA) AS PERIODONCIA,SUM(A.CHARLAS) AS CHARLAS,SUM(A.NUMPACIENTESH) AS NUMPACIENTESH,SUM(A.NUMPACIENTESM) AS NUMPACIENTESM,SUM(R.HORASACREDITADAS)  AS HORASACREDITADAS FROM REGISTRO R
                INNER JOIN ACTIVIDADES A ON A.CODIGO=R.ACTIVIDADES  AND A.ESTADO='1'
                INNER JOIN ESTUDIANTE E ON E.CEDULA=R.CEDULA  AND E.ESTADO='1'
                INNER JOIN GRUPOS G ON G.ID=R.GRUPO AND G.ESTADO='1'
                INNER JOIN INSTITUCION I ON I.CODIGO = R.INSTITUCION AND I.ESTADO='1'
                GROUP BY R.CEDULA,E.NOMBRES,APELLIDOS
                HAVING SUM(R.HORASACREDITADAS) >= 240");

        $statement->execute();
        $reportTotalizados = $statement->fetchAll();

        return $this->render('BackendBundle:Report:reportTotalizados.html.twig',array('reportTotalizados' => $reportTotalizados));
        // return new Response(print_r($reportGeneral));


    }
}
