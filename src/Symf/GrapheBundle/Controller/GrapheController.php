<?php

namespace Symf\GrapheBundle\Controller; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 
use Zend\Json\Expr;
class GrapheController  extends Controller{

       public function chartLineAction(){   
           // Chart    
           $series = array(         array("name" => "AAAAAA",    "data" => array(1,2,4,5,6,3,8)));
           $ob = new Highchart();     $ob->chart->renderTo('linechart');  //  #id du div où afficher le graphe 
           $ob->title->text('Titre du graphique');    
           $ob->xAxis->title(array('text'  => "Titre axe horizontal"));   
           $ob->yAxis->title(array('text'  => "Titre axe vertical "));  
           $ob->series($series);  
             return $this->render('SymfGrapheBundle:Graphe:LineChart.html.twig', array(         'chart' => $ob   ));
             
       }
public function chartPieAction(){ 
   $ob = new Highchart();
                $ob->chart->renderTo('piechart');
                $ob->title->text('Statistiques des utilisateurs ');
                $ob->plotOptions->pie(array(     'allowPointSelect'  => true,'cursor'=> 'pointer','dataLabels'=> array('enabled' => false),'showInLegend'  => true ));
               $em=$this->getDoctrine()->getEntityManager();
         $query1 = $em->createQuery("SELECT count(u) as et FROM AdminAdminBundle:User u  where u.roles = 'etudiant'" );
         $etudiant =$query1->getResult();
         
         
         $query2 = $em->createQuery("SELECT count(u) as admin  FROM AdminAdminBundle:User u  where u.roles = 'admin'" );
         $administraeur =$query2->getResult();
         
         $query3 = $em->createQuery("SELECT count(u) as ensei  FROM AdminAdminBundle:User u  where u.roles = 'enseignant'" );
         $ensei =$query3->getResult();
         
          $query4 = $em->createQuery("SELECT count(u) as chef  FROM AdminAdminBundle:User u  where u.roles = 'chefentreprise'" );
         $admin =$query4->getResult();
        
        $data = array();
        foreach ($etudiant as $values) {
            
            $a = array('ETUDIANT', intval($values['et']));
            array_push($data, $a);
            
        }
        
         foreach ($administraeur as $values1) {
            $a = array('administrateur', intval($values1['admin']));
            array_push($data, $a);
        }
        foreach ($ensei as $values2) {
            
            $a = array('enseignant', intval($values2['ensei']));
            array_push($data, $a);
            
        }
        
        foreach ($admin as $values3) {
            
            $a = array('chef entreprise', intval($values3['chef']));
            array_push($data, $a);
            
        }
        
      
$ob->series(array(array('type' => 'pie','name' => 'Promotions %', 'data' => $data)));
  return $this->render('SymfGrapheBundle:Graphe:pie.html.twig', array('chart' => $ob));


}
 public function chartHistogrammeAction() {
        $ob = new Highchart();
        $ob->chart->renderTo('container');// The #id of the div where to render the chart
        $ob->title->text('Statistiques'
                . ' des Notes');
        

         $em = $this->getDoctrine()->getEntityManager();
        // $query = $em->createQuery("SELECT u.note  FROM SymfGrapheBundle:Note u");
         //$note = $query->getResult();
         
        
        $query1 = $em->createQuery("SELECT count(u) as adm1 FROM SymfGrapheBundle:Note u  where u.noteE > 10 ");
        $Tunis = $query1->getResult();
        $query2 = $em->createQuery("SELECT count(u) as adm1 FROM SymfGrapheBundle:Note u  where u.noteE < 10 ");
        $Tunis1 = $query2->getResult();
       
        
        $data = array();
      
        foreach ($Tunis as $values) {
            
            $a = array('inferrieur a 10', intval($values['adm1']));
            array_push($data, $a);//print_r($data);exit();
            }
        foreach ($Tunis1 as $values) {
            
            $a = array('supperieur a 10', intval($values['adm1']));
            array_push($data, $a);//print_r($data);exit();
            }    
        
        
       
        
      
      
            $series = array(
            array(
                'name' => 'Pourcentage',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => $data,
            ),

        );
       
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value }'),
                    'style' => array('color' => '#AA4643')
                ),

                
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " %" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Pourcentage',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        
       

        $ob->chart->type('column');//print_r($data);exit();
      
       $note = array();
       
        $ob->xAxis->categories($note);
        
        $ob->yAxis($yData);
        $ob->legend->enabled(true);
        $formatter = new Expr('function () {
var unit = {
"Pourcentage": "%",

}[this.series.name];
return this.x + ": <b>" + this.y + "</b> " + unit;
}');
//          var_dump($series);die();
        $ob->tooltip->formatter($formatter);
        
        $ob->series($series);
        
        return $this->render('SymfGrapheBundle:Graphe:histogramme.html.twig', array(
                    'chart' => $ob
        ));

}
public function StatistiquesAdherentsAction()
	{
		
		

$ob = new Highchart();
                $ob->chart->renderTo('piechart');
                $ob->title->text('Statistiques Homme/Femme ');
                $ob->plotOptions->pie(array(     'allowPointSelect'  => true,'cursor'=> 'pointer','dataLabels'=> array('enabled' => false),'showInLegend'  => true ));
               $em=$this->getDoctrine()->getEntityManager();
         $query1 = $em->createQuery("SELECT count(u) as femme FROM AdminAdminBundle:User u  where u.sexe = 'femme'" );
         $femme =$query1->getResult();
         
         
         $query2 = $em->createQuery("SELECT count(u) as homme  FROM AdminAdminBundle:User u  where u.sexe = 'homme'" );
         $homme =$query2->getResult();
        
        $data = array();
        foreach ($femme as $values) {
            
            $a = array('femme', intval($values['femme']));
            array_push($data, $a);
            
        }
        
         foreach ($homme as $values1) {
            $a = array('homme', intval($values1['homme']));
            array_push($data, $a);
        }
        
      
$ob->series(array(array('type' => 'pie','name' => 'Promotions %', 'data' => $data)));
  return $this->render('SymfGrapheBundle:Graphe:pie.html.twig', array('chart' => $ob));


}}
	
