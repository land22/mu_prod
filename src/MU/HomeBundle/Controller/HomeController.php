<?php
namespace MU\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//On importe les entités
use MU\HomeBundle\Entity\Billets;
use MU\HomeBundle\Entity\Visiteurs;
//ONn importe les elements du formulaires
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MUHomeBundle:Home:index.html.twig');
    }
    public function billeterieAction()
    {

    $visiteurs = new Visiteurs();
    $billets = new Billets();
    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $visiteurs);
    $formBuilder1 = $this->get('form.factory')->createBuilder(FormType::class, $billets);
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('nom', TextType::class)
      ->add('prenom', TextType::class)
      ->add('date_de_naissance', DateType::class);

      $formBuilder1
      ->add('type_billet', TextType::class)
      ->add('date_reservation', DateType::class);

    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();
    $form1 = $formBuilder1->getForm();
    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule

    return $this->render('MUHomeBundle:Home:billeterie.html.twig', array(
      'form' => $form->createView(),'form1' => $form1->createView()));
    }
}
