<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index/indexhome.html.twig */
class __TwigTemplate_206f332f05cc12f005408719ae1ee6cc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/indexhome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/indexhome.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/indexhome.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Carrera | Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "        <!-- Header Start -->
        <div class=\"row mt-5\">
            <div class=\"col\"></div>
        </div>

       
        <div class=\"container-fluid header bg-white p-0\">
            <div class=\"row g-0 align-items-center flex-column-reverse flex-md-row\">
                <div class=\"col-md-6 p-5 mt-lg-5\">
                    <h1 class=\"display-5 animated fadeIn mb-4 mt-5\">Plateforme <span class=\"text-primary\">des opportunités</span></h1>
                    <h3 class=\"animated fadeIn mb-4 pb-3\">pour les étudiants et jeunes professionnels.</h3>
                  
                </div>
             <div class=\"col-lg-6 animated fadeIn\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/careeraflyer.png"), "html", null, true);
        yield "\" alt=\"flyer\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/careeragalss.png"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- Header End -->



        <!-- Category Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Opportunités</h1>
                    <p>notre plateforme est là pour vous accompagner. Explorez des stages, des emplois, des programmes de mentorat et bien plus encore, adaptés à vos ambitions.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/formation.png"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"70\">
                                </div>
                                <h6>Formation</h6>
                                <span>122 formations</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hackathon.jpg"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Hackathon</h6>
                                <span>15 hackathons</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offres.jpg"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Offre d'emploi</h6>
                                <span>602 offres d'emploi </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/stage.png"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"45\" height=\"70\">
                                </div>
                                <h6>Stage</h6>
                                <span>542 Stages</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/freelance.jpg"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Freelance</h6>
                                <span>498 Missions</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bourse.png"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"40\">
                                </div>
                                <h6>Bourse</h6>
                                <span>123 Bourses </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/club.jpg"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"50\">
                                </div>
                                <h6>Club</h6>
                                <span>350 Clubs</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/alternance.jpg"), "html", null, true);
        yield "\" alt=\"Icon\" width=\"50\" height=\"50\">
                                </div>
                                <h6>Alternance</h6>
                                <span>89 Alternances</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"about-img position-relative overflow-hidden p-5 pe-0\">
                            <img class=\"img-fluid w-100\" src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flyer.png"), "html", null, true);
        yield "\" width=\"30\" height=\"80\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <h1 class=\"mb-4\">#1 plateforme pour  booster votre carriére </h1>
                        <p class=\"mb-4\">Découvrez des opportunités uniques, des outils adaptés et un accompagnement sur mesure pour faire évoluer votre parcours vers de nouveaux horizons.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Trouvez des offres qui correspondent à vos ambitions.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Accédez à des ressources pour développer vos compétences.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Profitez d’un réseau pour élargir vos opportunités.</p>
                        <a class=\"btn btn-primary py-3 px-5 mt-3\" href=\"\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-0 gx-5 align-items-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-start mx-auto mb-5 wow slideInLeft\" data-wow-delay=\"0.1s\">
                            <h1 class=\"mb-3\">Postulez maintenant</h1>
                            <p>Une carrière qui change tout. Postulez maintenant !</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 text-start text-lg-end wow slideInRight\" data-wow-delay=\"0.1s\">
                        <ul class=\"nav nav-pills d-inline-flex justify-content-end mb-5\">
                            <li class=\"nav-item me-2\">
                                <a class=\"btn btn-outline-primary active\" data-bs-toggle=\"pill\" href=\"#tab-1\">tous</a>
                            </li>
                            <li class=\"nav-item me-2\">
                                <a class=\"btn btn-outline-primary\" data-bs-toggle=\"pill\" href=\"#tab-2\">Pour étudiants</a>
                            </li>
                            <li class=\"nav-item me-0\">
                                <a class=\"btn btn-outline-primary\" data-bs-toggle=\"pill\" href=\"#tab-3\">Pour professionnels </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4\">
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre1.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"450\" hight=\"600\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Ingénieur</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1900 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Ingénieur génie logiciel</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>chotrana 1 sokkra, Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDI</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>3 Postes</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>Temps flexible </small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre2.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Bources</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">29 000 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Bources d'études à l'étranger </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>2-3 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>23 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre3.png"), "html", null, true);
        yield "\" alt=\"\" width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Stages</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">300 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Stage en comptabilité</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>tunis, Tunisie </p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>3 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>61 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre5.png"), "html", null, true);
        yield "\" alt=\"\"width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour Profesionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Freelance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">50 DT/jrs</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Freelance en informatique</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>en ligne</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>92 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> temps flexible</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre4.png"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Alternance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1500 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Alternance: ingénieur système embarqué</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>charguia 2, Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>4 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>105 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-17</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offre6.png"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour profesionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Clubs et associoations </div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association dans tous les domaines</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ben Arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>69 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir plus ..</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/financier.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Stage</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">450 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"#\">stage en comptabilité</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> nabeul, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                       <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>1 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>59 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/civil.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Alternance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1400 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Ingénieur génie civil</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Ben Arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                       <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>5 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>25 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 8-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/robotique.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Formation</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">350 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Formation robotique</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ben arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>6 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>17 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>18-20</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bourses.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\"> Pour étudiant</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Bource</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">33 000 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Bource des études en allemagne</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, Berlin, Allemagne</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>3 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>22 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>--</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clubc.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Club</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Tunis, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>100 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 text-center\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir Plus..</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clubc.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Club</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>5 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/financier.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Ouvrier</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1100 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Poste d'un financier </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Sousse, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>69 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/prof.jpg"), "html", null, true);
        yield "\" alt=\"\" height=\" 400\" width=\"350\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Expérience </div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">600 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">professeur d'allemand </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDD</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>12 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 10-18</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/informaticien.jpg"), "html", null, true);
        yield "\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Offre</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">850 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">informaticien</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Sousse, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDI</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>83 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 8-17</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-12 text-center\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir plus..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"bg-light rounded p-3\">
                    <div class=\"bg-white rounded p-4\" style=\"border: 1px dashed rgba(0, 185, 142, .3)\">
                        <div class=\"row g-5 align-items-center\">
                            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <img class=\"img-fluid rounded w-100\" src=\"";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/contact.jpg"), "html", null, true);
        yield "\" alt=\"\" width=\"50\" height=\"50\">
                            </div>
                            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"mb-4\">
                                    <h1 class=\"mb-3\">Contactez-nous</h1>
                                    <p>Contactez-nous pour toute question ou assistance !</p>
                                </div>
                                <a href=\"\" class=\"btn btn-primary py-3 px-4 me-2\"><i class=\"fa fa-envelope me-2\"></i>envoyer email</a>
                                <a href=\"\" class=\"btn btn-dark py-3 px-4\"><i class=\"fa fa-user me-2\"></i>s'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Partenaires</h1>
                    <p>Ensemble pour construire un avenir meilleur.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/esprit.png"), "html", null, true);
        yield "\" alt=\"\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">ESPRIT</h5>
                                <small>école</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ey.png"), "html", null, true);
        yield "\" alt=\"\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">EY</h5>
                                <small>Société</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gomycode.png"), "html", null, true);
        yield "\" alt=\"\" width=\"300\" heigth=\"350\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">Gomycode</h5>
                                <small>école</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/otef.png"), "html", null, true);
        yield "\" alt=\"\" width=\"300\" heigth=\"350\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">OTEF</h5>
                                <small>Organisation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Clients !</h1>
                    <p>Ce que disent nos utilisateurs : des expériences diversifiées.</p>
                </div>
                <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>Je me sens beaucoup plus confiant dans ma recherche grâce aux ressources disponibles sur la plateforme (articles, conseils d'experts, webinaires). Elle est super utile et je recommande vivement aux étudiants et jeunes professionnels de l'utiliser.</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-1.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">Dorra MAAROUF</h6>
                                    <small>professeur d'anglais</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>C'est un espace où l'on se sent soutenu et accompagné, et pas seulement un endroit pour chercher des jobs. La plateforme est plus qu'une simple base de données d'offres. Je la recommande à 100% !</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-2.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">Ahmed SALAH</h6>
                                    <small>Etudiant</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>la possibilité de suivre des ateliers et des sessions de formation pour améliorer mes compétences est un énorme avantage. Cela m'a permis de me préparer bien mieux aux entretiens. C'est un must-have pour tous les jeunes professionnels !</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testimonial-3.jpg"), "html", null, true);
        yield "\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">youssef BEN SAID</h6>
                                    <small>Développeur fullstack</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index/indexhome.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  834 => 639,  819 => 627,  804 => 615,  770 => 584,  751 => 568,  732 => 552,  713 => 536,  681 => 507,  643 => 472,  621 => 453,  599 => 434,  577 => 415,  548 => 389,  526 => 370,  504 => 351,  482 => 332,  460 => 313,  430 => 286,  408 => 267,  386 => 248,  364 => 229,  342 => 210,  320 => 191,  270 => 144,  248 => 125,  234 => 114,  220 => 103,  206 => 92,  192 => 81,  178 => 70,  164 => 59,  150 => 48,  124 => 25,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carrera | Accueil{% endblock %}

{% block body %}
        <!-- Header Start -->
        <div class=\"row mt-5\">
            <div class=\"col\"></div>
        </div>

       
        <div class=\"container-fluid header bg-white p-0\">
            <div class=\"row g-0 align-items-center flex-column-reverse flex-md-row\">
                <div class=\"col-md-6 p-5 mt-lg-5\">
                    <h1 class=\"display-5 animated fadeIn mb-4 mt-5\">Plateforme <span class=\"text-primary\">des opportunités</span></h1>
                    <h3 class=\"animated fadeIn mb-4 pb-3\">pour les étudiants et jeunes professionnels.</h3>
                  
                </div>
             <div class=\"col-lg-6 animated fadeIn\">
                <div class=\"owl-carousel header-carousel\">
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"{{ asset('/img/careeraflyer.png') }}\" alt=\"flyer\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                    <div class=\"owl-carousel-item\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/careeragalss.png') }}\" alt=\"\" style=\"width: 90%; height: 450px; object-fit: cover;\">
                    </div>
                </div>
            </div>

            </div>
        </div>
        <!-- Header End -->



        <!-- Category Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Opportunités</h1>
                    <p>notre plateforme est là pour vous accompagner. Explorez des stages, des emplois, des programmes de mentorat et bien plus encore, adaptés à vos ambitions.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/formation.png') }}\" alt=\"Icon\" width=\"50\" height=\"70\">
                                </div>
                                <h6>Formation</h6>
                                <span>122 formations</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/hackathon.jpg') }}\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Hackathon</h6>
                                <span>15 hackathons</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/offres.jpg') }}\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Offre d'emploi</h6>
                                <span>602 offres d'emploi </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/stage.png') }}\" alt=\"Icon\" width=\"45\" height=\"70\">
                                </div>
                                <h6>Stage</h6>
                                <span>542 Stages</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/freelance.jpg') }}\" alt=\"Icon\" width=\"50\" height=\"60\">
                                </div>
                                <h6>Freelance</h6>
                                <span>498 Missions</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/bourse.png') }}\" alt=\"Icon\" width=\"50\" height=\"40\">
                                </div>
                                <h6>Bourse</h6>
                                <span>123 Bourses </span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/club.jpg') }}\" alt=\"Icon\" width=\"50\" height=\"50\">
                                </div>
                                <h6>Club</h6>
                                <span>350 Clubs</span>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <a class=\"cat-item d-block bg-light text-center rounded p-3\" href=\"\">
                            <div class=\"rounded p-4\">
                                <div class=\"icon mb-3\">
                                    <img class=\"img-fluid\" src=\"{{asset ('img/alternance.jpg') }}\" alt=\"Icon\" width=\"50\" height=\"50\">
                                </div>
                                <h6>Alternance</h6>
                                <span>89 Alternances</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"about-img position-relative overflow-hidden p-5 pe-0\">
                            <img class=\"img-fluid w-100\" src=\"{{asset ('img/flyer.png') }}\" width=\"30\" height=\"80\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <h1 class=\"mb-4\">#1 plateforme pour  booster votre carriére </h1>
                        <p class=\"mb-4\">Découvrez des opportunités uniques, des outils adaptés et un accompagnement sur mesure pour faire évoluer votre parcours vers de nouveaux horizons.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Trouvez des offres qui correspondent à vos ambitions.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Accédez à des ressources pour développer vos compétences.</p>
                        <p><i class=\"fa fa-check text-primary me-3\"></i>Profitez d’un réseau pour élargir vos opportunités.</p>
                        <a class=\"btn btn-primary py-3 px-5 mt-3\" href=\"\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-0 gx-5 align-items-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-start mx-auto mb-5 wow slideInLeft\" data-wow-delay=\"0.1s\">
                            <h1 class=\"mb-3\">Postulez maintenant</h1>
                            <p>Une carrière qui change tout. Postulez maintenant !</p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 text-start text-lg-end wow slideInRight\" data-wow-delay=\"0.1s\">
                        <ul class=\"nav nav-pills d-inline-flex justify-content-end mb-5\">
                            <li class=\"nav-item me-2\">
                                <a class=\"btn btn-outline-primary active\" data-bs-toggle=\"pill\" href=\"#tab-1\">tous</a>
                            </li>
                            <li class=\"nav-item me-2\">
                                <a class=\"btn btn-outline-primary\" data-bs-toggle=\"pill\" href=\"#tab-2\">Pour étudiants</a>
                            </li>
                            <li class=\"nav-item me-0\">
                                <a class=\"btn btn-outline-primary\" data-bs-toggle=\"pill\" href=\"#tab-3\">Pour professionnels </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4\">
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre1.jpg') }}\" alt=\"\" width=\"450\" hight=\"600\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Ingénieur</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1900 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Ingénieur génie logiciel</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>chotrana 1 sokkra, Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDI</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>3 Postes</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>Temps flexible </small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre2.jpg') }}\" alt=\"\" width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Bources</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">29 000 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Bources d'études à l'étranger </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>2-3 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>23 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre3.png') }}\" alt=\"\" width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Stages</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">300 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Stage en comptabilité</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>tunis, Tunisie </p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>3 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>61 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre5.png') }}\" alt=\"\"width=\"450\" hight=\"1000\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour Profesionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Freelance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">50 DT/jrs</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Freelance en informatique</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>en ligne</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>92 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> temps flexible</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre4.png') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Alternance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1500 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Alternance: ingénieur système embarqué</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>charguia 2, Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>4 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>105 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-17</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/offre6.png') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour profesionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Clubs et associoations </div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association dans tous les domaines</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ben Arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>69 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir plus ..</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{ asset('img/financier.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Stage</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">450 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"#\">stage en comptabilité</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> nabeul, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                       <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>1 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>59 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 9-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/civil.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Alternance</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1400 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Ingénieur génie civil</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Ben Arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                       <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>5 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>25 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 8-16</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/robotique.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Formation</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">350 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Formation robotique</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ben arous, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>6 mois</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>17 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>18-20</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/bourses.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\"> Pour étudiant</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Bource</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">33 000 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Bource des études en allemagne</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, Berlin, Allemagne</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>3 ans</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>22 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i>--</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/clubc.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour étudiants</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Club</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Tunis, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>100 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 text-center\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir Plus..</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                        <div class=\"row g-4\">
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/clubc.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Club</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">--</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Club et association</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>5 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/financier.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Ouvrier</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">1100 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">Poste d'un financier </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Sousse, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>--</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>69 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> --</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/prof.jpg') }}\" alt=\"\" height=\" 400\" width=\"350\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Expérience </div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">600 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">professeur d'allemand </a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i> Ariana, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDD</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>12 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 10-18</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"property-item rounded overflow-hidden\">
                                    <div class=\"position-relative overflow-hidden\">
                                        <a href=\"\"><img class=\"img-fluid\" src=\"{{asset ('img/informaticien.jpg') }}\" alt=\"\"></a>
                                        <div class=\"bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3\">Pour professionnels</div>
                                        <div class=\"bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3\">Offre</div>
                                    </div>
                                    <div class=\"p-4 pb-0\">
                                        <h5 class=\"text-primary mb-3\">850 DT</h5>
                                        <a class=\"d-block h5 mb-2\" href=\"\">informaticien</a>
                                        <p><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Sousse, Tunisie</p>
                                    </div>
                                    <div class=\"d-flex border-top\">
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-business-time text-primary me-2\"></i>CDI</small>
                                        <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-briefcase text-primary me-2\"></i>83 opportunités</small>
                                        <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-clock text-primary me-2\"></i> 8-17</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-12 text-center\">
                                <a class=\"btn btn-primary py-3 px-5\" href=\"\">Voir plus..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"bg-light rounded p-3\">
                    <div class=\"bg-white rounded p-4\" style=\"border: 1px dashed rgba(0, 185, 142, .3)\">
                        <div class=\"row g-5 align-items-center\">
                            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <img class=\"img-fluid rounded w-100\" src=\"{{asset ('img/contact.jpg') }}\" alt=\"\" width=\"50\" height=\"50\">
                            </div>
                            <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"mb-4\">
                                    <h1 class=\"mb-3\">Contactez-nous</h1>
                                    <p>Contactez-nous pour toute question ou assistance !</p>
                                </div>
                                <a href=\"\" class=\"btn btn-primary py-3 px-4 me-2\"><i class=\"fa fa-envelope me-2\"></i>envoyer email</a>
                                <a href=\"\" class=\"btn btn-dark py-3 px-4\"><i class=\"fa fa-user me-2\"></i>s'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Partenaires</h1>
                    <p>Ensemble pour construire un avenir meilleur.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"{{asset ('img/esprit.png') }}\" alt=\"\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">ESPRIT</h5>
                                <small>école</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"{{asset ('img/ey.png') }}\" alt=\"\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">EY</h5>
                                <small>Société</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"{{asset ('img/gomycode.png') }}\" alt=\"\" width=\"300\" heigth=\"350\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">Gomycode</h5>
                                <small>école</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"team-item rounded overflow-hidden\">
                            <div class=\"position-relative\">
                                <img class=\"img-fluid\" src=\"{{asset ('img/otef.png') }}\" alt=\"\" width=\"300\" heigth=\"350\">
                                <div class=\"position-absolute start-50 top-100 translate-middle d-flex align-items-center\">
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a class=\"btn btn-square mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                            <div class=\"text-center p-4 mt-3\">
                                <h5 class=\"fw-bold mb-0\">OTEF</h5>
                                <small>Organisation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center mx-auto mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
                    <h1 class=\"mb-3\">Nos Clients !</h1>
                    <p>Ce que disent nos utilisateurs : des expériences diversifiées.</p>
                </div>
                <div class=\"owl-carousel testimonial-carousel wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>Je me sens beaucoup plus confiant dans ma recherche grâce aux ressources disponibles sur la plateforme (articles, conseils d'experts, webinaires). Elle est super utile et je recommande vivement aux étudiants et jeunes professionnels de l'utiliser.</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{asset ('img/testimonial-1.jpg') }}\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">Dorra MAAROUF</h6>
                                    <small>professeur d'anglais</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>C'est un espace où l'on se sent soutenu et accompagné, et pas seulement un endroit pour chercher des jobs. La plateforme est plus qu'une simple base de données d'offres. Je la recommande à 100% !</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{asset ('img/testimonial-2.jpg') }}\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">Ahmed SALAH</h6>
                                    <small>Etudiant</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-light rounded p-3\">
                        <div class=\"bg-white border rounded p-4\">
                            <p>la possibilité de suivre des ateliers et des sessions de formation pour améliorer mes compétences est un énorme avantage. Cela m'a permis de me préparer bien mieux aux entretiens. C'est un must-have pour tous les jeunes professionnels !</p>
                            <div class=\"d-flex align-items-center\">
                                <img class=\"img-fluid flex-shrink-0 rounded\" src=\"{{asset ('img/testimonial-3.jpg') }}\" style=\"width: 45px; height: 45px;\">
                                <div class=\"ps-3\">
                                    <h6 class=\"fw-bold mb-1\">youssef BEN SAID</h6>
                                    <small>Développeur fullstack</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
{% endblock %} 
", "index/indexhome.html.twig", "C:\\Users\\hedir\\OneDrive\\Desktop\\CareeraPlatform-main\\templates\\index\\indexhome.html.twig");
    }
}
