<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class ApiController extends Controller //Api Controller with all the function
{
    /**
     * @Route("/api/", name="api")
     */
    public function ApiAction()//Test function
    {
            return new Response(
            '<html><body>This is api</body></html>'
        );
    }
    /**
     * @Route("/api/teams/", name="getallteams")
     * @Method("GET")
     */
    public function GetAllteamsAction()//Function get all the teams
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        //Set up the Serializer specifying which Encoders and Normalizer are going to be available
        $em = $this->getDoctrine()->getManager();
        $teams=$em->getRepository('AppBundle:Teams')->findAll();
        //Find all the teams(Objects)
        $jsonContent = $serializer->serialize($teams, 'json');
        //Serializing the Objects(Turn the objet into Json)
         return new Response($jsonContent);
     }
     /**
     * @Route("/api/teams/{id}", name="getoneteam")
     * @Method("GET")
     */
    public function GetTeamAction($id)//Function find one team by ID
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        //Set up the Serializer specifying which Encoders and Normalizer are going to be available
        $em = $this->getDoctrine()->getManager();
        $team=$em->getRepository('AppBundle:Teams')->find($id);
        //Find the team
        if (!$team) {
        throw $this->createNotFoundException(
            'No team found for id '.$id
        );// If the team is not existing,thorw the error
     }else{
        $jsonContent = $serializer->serialize($team, 'json');
        //If the team is existing, serializing the Object
     }
        return new Response($jsonContent);
     }
    /**
     * @Route("/api/teams/{id}", name="editteam")
     * @Method("PUT")
     */
    public function EditTeamAction($id)
    {
     
        
    }
    /**
     * @Route("/api/teams/{id}", name="deledtteam")
     * @Method("DELETE")
     */
    public function DeleteTeamAction($id) //Function delete the team by ID
    {
      $em = $this->getDoctrine()->getManager();
      $team=$em->getRepository('AppBundle:Teams')->find($id);//Find the team
     if (!$team) {
        throw $this->createNotFoundException(
            'No team found for id '.$id
        );//If the team is existing, serializing the Object
     }else{
         $em->remove($team);
         $em->flush();
     } //If the team is existing, delete the team
    $encoders = array(new JsonEncoder());
    $normalizers = array(new ObjectNormalizer());
    $serializer = new Serializer($normalizers, $encoders); 
    $jsonContent = $serializer->serialize($team, 'json');//Serializing the Objects
    return new Response($jsonContent);
    }
    /**
     * @Route("/api/team/", name="addteam")
     * @Method("POST")
     */
    public function AddTeamAction()
    {
     
        
    }
     /**
     * @Route("/api/teams/{id}/matchs", name="getmatchs")
     * @Method("GET")
     */
    public function TeamMatchsAction($id)//Function find the matchs by Team
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $matchs=$em->getRepository('AppBundle:Matches')->findAllMatchsByTeam($id);//Find all the matchs by the id of team 
        
        $jsonContent = $serializer->serialize($matchs, 'json');//Serializing the Objects
         return new Response($jsonContent);
     }
    /**
     * @Route("/api/events/", name="getallevents")
     * @Method("GET")
     */
    public function GetAlleventsAction()//Function find all the events
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $events=$em->getRepository('AppBundle:Events')->findAll();//Find all the events
        $jsonContent = $serializer->serialize($events, 'json');//Serializing the Objects
         return new Response($jsonContent);
     }
    /**
     * @Route("/api/events/{id}", name="getoneevent")
     * @Method("GET")
     */
    public function GetEventAction($id)//Function find the event by ID
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $event=$em->getRepository('AppBundle:Events')->find($id);//Find the event
        if (!$event) {
        throw $this->createNotFoundException(
            'No event found for id '.$id
        );//If the event is not existing, throw the error
     }else{
        $jsonContent = $serializer->serialize($event, 'json');
     }//If the event is existing, serializing the Object
        return new Response($jsonContent);
     }
    /**
     * @Route("/api/event/{id}", name="editevent")
     * @Method("PUT")
     */
      public function EditEventAction($id)
    {
     
        
    }
    /**
     * @Route("/api/events/{id}", name="deledtevent")
     * @Method("DELETE")
     */
    public function DeleteEventAction($id)//Function delete the event
    {
      $em = $this->getDoctrine()->getManager();
      $event=$em->getRepository('AppBundle:Events')->find($id);//Find the event
     if (!$event) {
        throw $this->createNotFoundException(
            'No event found for id '.$id
        );//If the event is not existing, throw the error
     }else{
         $em->remove($event);
         $em->flush();
     }//If the event is existing, delete the event
    $encoders = array(new JsonEncoder());
    $normalizers = array(new ObjectNormalizer());
    $serializer = new Serializer($normalizers, $encoders); 
    $jsonContent = $serializer->serialize($event, 'json');
    return new Response($jsonContent);
    }
    /**
     * @Route("/api/event/", name="addevent")
     * @Method("POST")
     */
    public function AddEventAction()
    {
     
        
    }
    
     /**
     * @Route("/api/matchs/", name="getallmatchs")
     * @Method("GET")
     */
    public function GetAllmatchsAction()//Function get all the matchs
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $matchs=$em->getRepository('AppBundle:Matches')->findAll();//Find all the matchs
        $jsonContent = $serializer->serialize($matchs, 'json'); //Serializing the Objects
         return new Response($jsonContent);
         
     }
      /**
     * @Route("/api/matchs/{id}", name="getonematch")
     * @Method("GET")
     */
    public function GetMatchAction($id)//Function get the match by ID
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $match=$em->getRepository('AppBundle:Matches')->find($id);//Find the matchs
        if (!$match) {
        throw $this->createNotFoundException(
            'No match found for id '.$id
        );//If the match is not existing, throw the error
     }else{
        $jsonContent = $serializer->serialize($match, 'json');
     }//If the match is existing, serializing the Object
        return new Response($jsonContent);
     }
      /**
     * @Route("api/events/{id}/schedule", name="getschedule")
     * @Method("GET")
     */
     public function GetScheduleAction($id)//Function get the schedule of the Event
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();
        $matchs=$em->getRepository('AppBundle:Matches')->findSchedule($id);//Select all the matchs of the event then put them in order
        $jsonContent = $serializer->serialize($matchs, 'json');//Serializing the Objects
    
        return new Response($jsonContent);
     }
    
}
