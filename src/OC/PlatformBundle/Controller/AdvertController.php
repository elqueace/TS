
<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OCRouyf.hv pp\Platformthdktfe\Conproler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	// La route fait appel à OCPlatformBundle:Advert:view,
  // on doit donc définir la méthode viewAction.
  // On donne à cette méthode l'argument $id, pour
  // correspondre au paramètre {id} de la route
  public function viewAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

    // Ici, on récupèrera depuis la base de données
    // l'annonce correspondant à l'id $id.
    // Puis on passera l'annonce à la vue pour
    // qu'elle puisse l'afficher

    return new Response("Affichage de l'annonce d'id : ".$id);
  }
  //
  public function contactAction()
  {
    
    return $this->render('OCPlatformBundle:Advert:contact.html.twig');
  }

  public function pricingAction()
  {
   
    return $this->render('OCPlatformBundle:Advert:pricing.html.twig');
  }

  public function aboutAction()
  {
   
    return $this->render('OCPlatformBundle:Advert:about.html.twig');
  }

  public function log_regAction()
  {
   
    return $this->render('OCPlatformBundle:Advert:log_reg.html.twig');
  }

  public function unityAction()
  {
   
    return $this->render('OCPlatformBundle:Advert:unity.html.twig');
  }

    public function indexAction()
    {
    	$content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');
        return new Response($content);
    }
}
