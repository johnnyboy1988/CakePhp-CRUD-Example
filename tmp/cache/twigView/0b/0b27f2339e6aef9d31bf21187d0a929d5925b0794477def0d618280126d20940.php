<?php

/* /opt/lampp/htdocs/cake-auth/vendor/cakephp/bake/src/Template/Bake/Element/Controller/index.twig */
class __TwigTemplate_adfca277cce2aa790fc9a18cc5760b7d9d6134442ba40ed4f2edb64b701746d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7a15f95195ee7b63ad4f98900b8f838738661d194df3646456cbbbc7be5bf6 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_bf7a15f95195ee7b63ad4f98900b8f838738661d194df3646456cbbbc7be5bf6->enter($__internal_bf7a15f95195ee7b63ad4f98900b8f838738661d194df3646456cbbbc7be5bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/opt/lampp/htdocs/cake-auth/vendor/cakephp/bake/src/Template/Bake/Element/Controller/index.twig"));

        // line 16
        echo "
    /**
     * Index method
     *
     * @return \\Cake\\Http\\Response|void
     */
    public function index()
    {
";
        // line 24
        $context["belongsTo"] = $this->getAttribute(($context["Bake"] ?? null), "aliasExtractor", array(0 => ($context["modelObj"] ?? null), 1 => "BelongsTo"), "method");
        // line 25
        if (($context["belongsTo"] ?? null)) {
            // line 26
            echo "        \$this->paginate = [
            'contain' => [";
            // line 27
            echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", array(0 => ($context["belongsTo"] ?? null), 1 => array("indent" => false)), "method");
            echo "]
        ];
";
        }
        // line 30
        echo "        \$";
        echo twig_escape_filter($this->env, ($context["pluralName"] ?? null), "html", null, true);
        echo " = \$this->paginate(\$this->";
        echo twig_escape_filter($this->env, ($context["currentModelName"] ?? null), "html", null, true);
        echo ");

        \$this->set(compact('";
        // line 32
        echo twig_escape_filter($this->env, ($context["pluralName"] ?? null), "html", null, true);
        echo "'));
    }
";
        
        $__internal_bf7a15f95195ee7b63ad4f98900b8f838738661d194df3646456cbbbc7be5bf6->leave($__internal_bf7a15f95195ee7b63ad4f98900b8f838738661d194df3646456cbbbc7be5bf6_prof);

    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/cake-auth/vendor/cakephp/bake/src/Template/Bake/Element/Controller/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 32,  45 => 30,  39 => 27,  36 => 26,  34 => 25,  32 => 24,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}

    /**
     * Index method
     *
     * @return \\Cake\\Http\\Response|void
     */
    public function index()
    {
{% set belongsTo = Bake.aliasExtractor(modelObj, 'BelongsTo') %}
{% if belongsTo %}
        \$this->paginate = [
            'contain' => [{{ Bake.stringifyList(belongsTo, {'indent': false})|raw }}]
        ];
{% endif %}
        \${{ pluralName }} = \$this->paginate(\$this->{{ currentModelName }});

        \$this->set(compact('{{ pluralName }}'));
    }
", "/opt/lampp/htdocs/cake-auth/vendor/cakephp/bake/src/Template/Bake/Element/Controller/index.twig", "");
    }
}
