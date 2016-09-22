[dfnder.com](https://dfnder.com) PHP SDK
==============


# dfnder.com integration for PHP and Symfony2+
This SDK allows you to integrate with the [dfnder.com API](https://api.dfnder.com) in a easy way

## To install using composer
    composer require dfnder/dfnder.php.sdk dev-master

## Symfony2+ integration
1. Install the dependency with composer as shown above
2. add the next lines to `app/config/services.yml` in order to install the service injections

        
    services:
        #... your services
        dfnder.card_processor:
            class: DfnderSDK\DependencyInjection\DfnderService
        #... your services

        
3. Use it in your controller

    
    <?php
    
    namespace AppBundle\Controller;
    
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    
    class DefaultController extends Controller
    {
        /**
         * @Route("/", name="show_card_form")
         */
        public function showFormAction(Request $request)
        {
            return $this->render('default/show_card_form.html.twig', []);
        }
    
        /**
         * @Route("/charge", name="process_card_form")
         * @Method("POST")
         */
        public function processFormAction(Request $request)
        {
           $this->get('dfnder.card_processor');
    
            die(print_r($request->request, true));
    
    
            //return $this->render('default/show_card_form.html.twig', []);
        }
    }
