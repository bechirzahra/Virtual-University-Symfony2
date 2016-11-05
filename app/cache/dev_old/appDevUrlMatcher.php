<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // my_app_mail_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_mail_homepage')), array (  '_controller' => 'MyApp\\MailBundle\\Controller\\DefaultController::indexAction',));
        }

        // my_app_mail_redirection
        if ($pathinfo === '/redirection') {
            return array (  '_controller' => 'MyApp\\MailBundle\\Controller\\DefaultController::redirectionAction',  '_route' => 'my_app_mail_redirection',);
        }

        // my_app_mail_sendMail
        if ($pathinfo === '/sendMail') {
            return array (  '_controller' => 'MyApp\\MailBundle\\Controller\\DefaultController::sendMailAction',  '_route' => 'my_app_mail_sendMail',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            if (0 === strpos($pathinfo, '/hello')) {
                // university_user_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'university_user_homepage')), array (  '_controller' => 'University\\UserBundle\\Controller\\DefaultController::indexAction',));
                }

                // my_app_ulearn_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_ulearn_homepage')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::indexAction',));
                }

            }

            if (0 === strpos($pathinfo, '/home')) {
                // homestat
                if ($pathinfo === '/homestat') {
                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::homestatAction',  '_route' => 'homestat',);
                }

                if (0 === strpos($pathinfo, '/homeE')) {
                    // homeEns
                    if ($pathinfo === '/homeEns') {
                        return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\EnseignantController::homeEnsAction',  '_route' => 'homeEns',);
                    }

                    // homeEt
                    if ($pathinfo === '/homeEt') {
                        return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\EtudiantController::homeEtAction',  '_route' => 'homeEt',);
                    }

                }

                // homeAd
                if ($pathinfo === '/homeAd') {
                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\AdminController::homeAdAction',  '_route' => 'homeAd',);
                }

                // homeCh
                if ($pathinfo === '/homeCh') {
                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ChefEntrepriseController::homeChAction',  '_route' => 'homeCh',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/list')) {
            // listC
            if ($pathinfo === '/listC') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CoursController::listCAction',  '_route' => 'listC',);
            }

            // listUser
            if ($pathinfo === '/listUser') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\AdminController::listUserAction',  '_route' => 'listUser',);
            }

        }

        // accepter
        if (0 === strpos($pathinfo, '/accepter') && preg_match('#^/accepter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepter')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\AdminController::accepterAction',));
        }

        // deleteUser
        if (0 === strpos($pathinfo, '/deleteUser') && preg_match('#^/deleteUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\AdminController::deleteUserAction',));
        }

        if (0 === strpos($pathinfo, '/listStage')) {
            // listStage
            if ($pathinfo === '/listStage') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\StageController::listStageAction',  '_route' => 'listStage',);
            }

            // listStageEt
            if ($pathinfo === '/listStageEt') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\StageController::listStageEtAction',  '_route' => 'listStageEt',);
            }

        }

        // addStage
        if ($pathinfo === '/addStage') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\StageController::addStageAction',  '_route' => 'addStage',);
        }

        // inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\AdminController::inscriptionAction',  '_route' => 'inscription',);
        }

        // updateStage
        if (0 === strpos($pathinfo, '/updateStage') && preg_match('#^/updateStage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateStage')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\StageController::updateStageAction',));
        }

        // deleteStage
        if (0 === strpos($pathinfo, '/deleteStage') && preg_match('#^/deleteStage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteStage')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\StageController::deleteStageAction',));
        }

        if (0 === strpos($pathinfo, '/Module')) {
            // Module
            if (rtrim($pathinfo, '/') === '/Module') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Module');
                }

                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::indexAction',  '_route' => 'Module',);
            }

            // Module_show
            if (preg_match('#^/Module/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Module_show')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::showAction',));
            }

            // Module_new
            if ($pathinfo === '/Module/new') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::newAction',  '_route' => 'Module_new',);
            }

            // Module_create
            if ($pathinfo === '/Module/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_Module_create;
                }

                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::createAction',  '_route' => 'Module_create',);
            }
            not_Module_create:

            // Module_edit
            if (preg_match('#^/Module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Module_edit')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::editAction',));
            }

            // Module_update
            if (preg_match('#^/Module/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_Module_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Module_update')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::updateAction',));
            }
            not_Module_update:

            // Module_delete
            if (preg_match('#^/Module/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_Module_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Module_delete')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ModuleController::deleteAction',));
            }
            not_Module_delete:

        }

        if (0 === strpos($pathinfo, '/CERT')) {
            // CERT
            if (rtrim($pathinfo, '/') === '/CERT') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'CERT');
                }

                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::indexAction',  '_route' => 'CERT',);
            }

            // CERT_show
            if (preg_match('#^/CERT/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CERT_show')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::showAction',));
            }

            // CERT_new
            if ($pathinfo === '/CERT/new') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::newAction',  '_route' => 'CERT_new',);
            }

            // CERT_create
            if ($pathinfo === '/CERT/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_CERT_create;
                }

                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::createAction',  '_route' => 'CERT_create',);
            }
            not_CERT_create:

            // CERT_edit
            if (preg_match('#^/CERT/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CERT_edit')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::editAction',));
            }

            // CERT_update
            if (preg_match('#^/CERT/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_CERT_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CERT_update')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::updateAction',));
            }
            not_CERT_update:

            // CERT_delete
            if (preg_match('#^/CERT/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_CERT_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CERT_delete')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\CertificationController::deleteAction',));
            }
            not_CERT_delete:

        }

        // Evaluation_ajouter
        if (0 === strpos($pathinfo, '/ajouterEvaluation') && preg_match('#^/ajouterEvaluation/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Evaluation_ajouter');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Evaluation_ajouter')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\EvaluationController::ajouterAction',));
        }

        // my_app_cours_homepage
        if ($pathinfo === '/cours') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::coursAction',  '_route' => 'my_app_cours_homepage',);
        }

        if (0 === strpos($pathinfo, '/upload')) {
            // my_app_cours_UploadCours
            if ($pathinfo === '/uploadcours') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::UploadCoursAction',  '_route' => 'my_app_cours_UploadCours',);
            }

            // my_app_cours_Upload
            if ($pathinfo === '/upload') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::UploadAction',  '_route' => 'my_app_cours_Upload',);
            }

        }

        // my_app_cours_ContactUs
        if ($pathinfo === '/ContactUs') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\DefaultController::ContactUsAction',  '_route' => 'my_app_cours_ContactUs',);
        }

        // myapp_ulearn_listResponses
        if (0 === strpos($pathinfo, '/listResponses') && preg_match('#^/listResponses/(?P<questionID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_ulearn_listResponses')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizController::listResponsesAction',));
        }

        // myapp_ulearn_checkReponse
        if (0 === strpos($pathinfo, '/checkReponse') && preg_match('#^/checkReponse/(?P<reponseID>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'myapp_ulearn_checkReponse')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizController::checkReponseAction',));
        }

        if (0 === strpos($pathinfo, '/quiz')) {
            if (0 === strpos($pathinfo, '/quizreponse')) {
                // quizreponse
                if (rtrim($pathinfo, '/') === '/quizreponse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quizreponse');
                    }

                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::indexAction',  '_route' => 'quizreponse',);
                }

                // quizreponse_show
                if (preg_match('#^/quizreponse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizreponse_show')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::showAction',));
                }

                // quizreponse_new
                if ($pathinfo === '/quizreponse/new') {
                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::newAction',  '_route' => 'quizreponse_new',);
                }

                // quizreponse_create
                if ($pathinfo === '/quizreponse/create') {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_quizreponse_create;
                    }

                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::createAction',  '_route' => 'quizreponse_create',);
                }
                not_quizreponse_create:

                // quizreponse_edit
                if (preg_match('#^/quizreponse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizreponse_edit')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::editAction',));
                }

                // quizreponse_update
                if (preg_match('#^/quizreponse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_quizreponse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizreponse_update')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizReponseController::updateAction',));
                }
                not_quizreponse_update:

                // quizreponse_delete
                if (preg_match('#^/quizreponse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_quizreponse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizreponse_delete')), array (  '_controller' => 'MyAppChaimaBundle:QuizReponse:delete',));
                }
                not_quizreponse_delete:

            }

            if (0 === strpos($pathinfo, '/quizquestion')) {
                // quizquestion
                if (rtrim($pathinfo, '/') === '/quizquestion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quizquestion');
                    }

                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::indexAction',  '_route' => 'quizquestion',);
                }

                // quizquestion_show
                if (preg_match('#^/quizquestion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestion_show')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::showAction',));
                }

                // quizquestion_new
                if ($pathinfo === '/quizquestion/new') {
                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::newAction',  '_route' => 'quizquestion_new',);
                }

                // quizquestion_create
                if ($pathinfo === '/quizquestion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_quizquestion_create;
                    }

                    return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::createAction',  '_route' => 'quizquestion_create',);
                }
                not_quizquestion_create:

                // quizquestion_edit
                if (preg_match('#^/quizquestion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestion_edit')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::editAction',));
                }

                // quizquestion_update
                if (preg_match('#^/quizquestion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_quizquestion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestion_update')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::updateAction',));
                }
                not_quizquestion_update:

                // quizquestion_delete
                if (preg_match('#^/quizquestion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_quizquestion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quizquestion_delete')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QuizQuestionController::deleteAction',));
                }
                not_quizquestion_delete:

            }

        }

        if (0 === strpos($pathinfo, '/test')) {
            // testA
            if ($pathinfo === '/testA') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QcmController::testAAction',  '_route' => 'testA',);
            }

            // testB
            if ($pathinfo === '/testB') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QcmController::testBAction',  '_route' => 'testB',);
            }

            // testC
            if ($pathinfo === '/testC') {
                return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QcmController::testCAction',  '_route' => 'testC',);
            }

        }

        // resultat
        if ($pathinfo === '/resultat') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\QcmController::resultatAction',  '_route' => 'resultat',);
        }

        // ListeExamens
        if ($pathinfo === '/ListeExamens') {
            return array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ExamenController::ListeExamensAction',  '_route' => 'ListeExamens',);
        }

        // deleteExamen
        if (0 === strpos($pathinfo, '/deleteExamen') && preg_match('#^/deleteExamen/(?P<idExamen>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteExamen')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ExamenController::deleteExamenAction',));
        }

        // updateExamen
        if (0 === strpos($pathinfo, '/updateExamen') && preg_match('#^/updateExamen/(?P<idExamen>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateExamen')), array (  '_controller' => 'MyApp\\UlearnBundle\\Controller\\ExamenController::updateExamenAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // dcs_rating_add_vote
        if (0 === strpos($pathinfo, '/vote/add') && preg_match('#^/vote/add/(?P<id>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dcs_rating_add_vote')), array (  '_controller' => 'DCS\\RatingBundle\\Controller\\RatingController::addVoteAction',));
        }

        // admin_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_homepage')), array (  '_controller' => 'Admin\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/admin/admin')) {
                if (0 === strpos($pathinfo, '/admin/admin/admin/user')) {
                    // admin_admin_admin_user_list
                    if ($pathinfo === '/admin/admin/admin/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_list',  '_route' => 'admin_admin_admin_user_list',);
                    }

                    // admin_admin_admin_user_create
                    if ($pathinfo === '/admin/admin/admin/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_create',  '_route' => 'admin_admin_admin_user_create',);
                    }

                    // admin_admin_admin_user_batch
                    if ($pathinfo === '/admin/admin/admin/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_batch',  '_route' => 'admin_admin_admin_user_batch',);
                    }

                    // admin_admin_admin_user_edit
                    if (preg_match('#^/admin/admin/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_edit',));
                    }

                    // admin_admin_admin_user_delete
                    if (preg_match('#^/admin/admin/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_delete',));
                    }

                    // admin_admin_admin_user_show
                    if (preg_match('#^/admin/admin/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_show',));
                    }

                    // admin_admin_admin_user_export
                    if ($pathinfo === '/admin/admin/admin/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.user',  '_sonata_name' => 'admin_admin_admin_user_export',  '_route' => 'admin_admin_admin_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/admin/admin/faq')) {
                    // admin_admin_admin_faq_list
                    if ($pathinfo === '/admin/admin/admin/faq/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_list',  '_route' => 'admin_admin_admin_faq_list',);
                    }

                    // admin_admin_admin_faq_create
                    if ($pathinfo === '/admin/admin/admin/faq/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_create',  '_route' => 'admin_admin_admin_faq_create',);
                    }

                    // admin_admin_admin_faq_batch
                    if ($pathinfo === '/admin/admin/admin/faq/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_batch',  '_route' => 'admin_admin_admin_faq_batch',);
                    }

                    // admin_admin_admin_faq_edit
                    if (preg_match('#^/admin/admin/admin/faq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_faq_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_edit',));
                    }

                    // admin_admin_admin_faq_delete
                    if (preg_match('#^/admin/admin/admin/faq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_faq_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_delete',));
                    }

                    // admin_admin_admin_faq_show
                    if (preg_match('#^/admin/admin/admin/faq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_admin_admin_faq_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_show',));
                    }

                    // admin_admin_admin_faq_export
                    if ($pathinfo === '/admin/admin/admin/faq/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.faq',  '_sonata_name' => 'admin_admin_admin_faq_export',  '_route' => 'admin_admin_admin_faq_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/Graphe')) {
            // symf_graphe_homepage
            if (0 === strpos($pathinfo, '/Graphe/hello') && preg_match('#^/Graphe/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'symf_graphe_homepage')), array (  '_controller' => 'Symf\\GrapheBundle\\Controller\\DefaultController::indexAction',));
            }

            // symf_graphe_Chart_Line
            if ($pathinfo === '/Graphe/ChartLine') {
                return array (  '_controller' => 'Symf\\GrapheBundle\\Controller\\GrapheController::ChartLineAction',  '_route' => 'symf_graphe_Chart_Line',);
            }

            // symf_graphe_Pie
            if ($pathinfo === '/Graphe/Pie') {
                return array (  '_controller' => 'Symf\\GrapheBundle\\Controller\\GrapheController::chartPieAction',  '_route' => 'symf_graphe_Pie',);
            }

            // _grapheHistogramme
            if ($pathinfo === '/Graphe/histogramme') {
                return array (  '_controller' => 'Symf\\GrapheBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogramme',);
            }

            // Statistiques_sexe
            if ($pathinfo === '/Graphe/statSexe') {
                return array (  '_controller' => 'Symf\\GrapheBundle\\Controller\\GrapheController::StatistiquesAdherentsAction',  '_route' => 'Statistiques_sexe',);
            }

        }

        if (0 === strpos($pathinfo, '/h')) {
            // symf_my_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'symf_my_homepage')), array (  '_controller' => 'Symf\\MyBundle\\Controller\\DefaultController::indexAction',));
            }

            // Home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Symf\\MyBundle\\Controller\\DefaultController::homeAction',  '_route' => 'Home',);
            }

        }

        if (0 === strpos($pathinfo, '/list')) {
            // list_adh
            if ($pathinfo === '/list_adh') {
                return array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqController::listAdhAction',  '_route' => 'list_adh',);
            }

            // faq_list
            if ($pathinfo === '/list') {
                return array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqController::listAction',  '_route' => 'faq_list',);
            }

        }

        if (0 === strpos($pathinfo, '/faq')) {
            // faq_ajouter
            if ($pathinfo === '/faq/ajouter') {
                return array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqController::ajouterAction',  '_route' => 'faq_ajouter',);
            }

            // faq_modifier
            if (0 === strpos($pathinfo, '/faq/modifier') && preg_match('#^/faq/modifier/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'faq_modifier');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'faq_modifier')), array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqController::modifierAction',));
            }

            // faq_supprimer
            if (0 === strpos($pathinfo, '/faq/supprimer') && preg_match('#^/faq/supprimer/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'faq_supprimer');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'faq_supprimer')), array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqController::supprimerAction',));
            }

        }

        // faq_lisetudiant
        if ($pathinfo === '/listetudiant') {
            return array (  '_controller' => 'Symf\\MyBundle\\Controller\\FaqetudiantController::listetudiantAction',  '_route' => 'faq_lisetudiant',);
        }

        if (0 === strpos($pathinfo, '/quiz')) {
            // egulias_quiz_answers
            if ($pathinfo === '/quizes/answers') {
                return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\AnswerController::answerListAction',  '_route' => 'egulias_quiz_answers',);
            }

            // egulias_selected_quiz_answers
            if (preg_match('#^/quiz/(?P<id>\\d+)/answers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_selected_quiz_answers')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\AnswerController::quizAnswerListAction',));
            }

            if (0 === strpos($pathinfo, '/quiz/question')) {
                if (0 === strpos($pathinfo, '/quiz/questions')) {
                    // egulias_quiz_question
                    if ($pathinfo === '/quiz/questions') {
                        return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::questionsPanelAction',  '_route' => 'egulias_quiz_question',);
                    }

                    // egulias_quiz_question_add
                    if ($pathinfo === '/quiz/questions/create') {
                        return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::createQuestionAction',  '_route' => 'egulias_quiz_question_add',);
                    }

                    // egulias_question_save
                    if ($pathinfo === '/quiz/questions/save') {
                        return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::saveQuestionAction',  '_route' => 'egulias_question_save',);
                    }

                    // egulias_quiz_question_edit
                    if (preg_match('#^/quiz/questions/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_question_edit')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::editQuestionAction',));
                    }

                }

                // egulias_quiz_question_update
                if (preg_match('#^/quiz/question/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_egulias_quiz_question_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_question_update')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::updateQuestionAction',));
                }
                not_egulias_quiz_question_update:

            }

            // egulias_quiz_add_question
            if ($pathinfo === '/quiz/add/question') {
                return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuestionController::addQuestionAction',  '_route' => 'egulias_quiz_add_question',);
            }

            // egulias_quiz_take
            if (preg_match('#^/quiz/(?P<id>\\d+)/take$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_take')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizController::takeQuizAction',));
            }

            // egulias_quiz_save_response
            if (preg_match('#^/quiz/(?P<id>\\d+)/response$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_save_response')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizController::saveResponseAction',));
            }

            // egulias_quiz_panel
            if ($pathinfo === '/quiz') {
                return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizManagerController::controlPanelAction',  '_route' => 'egulias_quiz_panel',);
            }

            // egulias_quiz_add
            if ($pathinfo === '/quiz/add') {
                return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizManagerController::addAction',  '_route' => 'egulias_quiz_add',);
            }

            // egulias_quiz_save
            if ($pathinfo === '/quiz/save') {
                return array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizManagerController::saveQuizAction',  '_route' => 'egulias_quiz_save',);
            }

            // egulias_quiz_edit
            if (preg_match('#^/quiz/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_edit')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizManagerController::editQuizAction',));
            }

            // egulias_quiz_update
            if (preg_match('#^/quiz/(?P<id>\\d+)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'egulias_quiz_update')), array (  '_controller' => 'Egulias\\QuizBundle\\Controller\\QuizManagerController::updateQuizAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
