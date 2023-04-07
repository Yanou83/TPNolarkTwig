<?php

/* casques.twig */
class __TwigTemplate_93e60dcff8d53ba17d71647c6e540aa2b7abdb8f959728b117afbce4c81eb0d2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"casques\">";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["casques"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["casque"]) {
            // line 3
            echo "        <article>
            <img src=\"../images/casques/";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "libelle", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "image", array()), "html", null, true);
            echo "\"
                 alt=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", array()), "html", null, true);
            echo "\">";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()) ==  -1)) {
                // line 8
                echo "                <p class=\"stockko\">
                    <abbr data-tip=\"Sur commande uniquement\">stock</abbr>
                </p>";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 11
$context["casque"], "stock", array()) >= 10)) {
                // line 13
                echo "                <p class=\"stockok\">
                    <abbr data-tip=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()), "html", null, true);
                echo " casques en stock\">stock</abbr>
                </p>";
            } else {
                // line 18
                echo "                <p class=\"stockok\">
                    <abbr data-tip=\"Plus que";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "stock", array()), "html", null, true);
                echo " casques en stock...\">stock</abbr>
                </p>";
            }
            // line 22
            echo "            <p class=\"prix\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "prix", array()), "html", null, true);
            echo "€</p>
            <p class=\"marque\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "nom", array()), "html", null, true);
            echo "</p>
            <p class=\"modele\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "modele", array()), "html", null, true);
            echo "</p>";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) == 5)) {
                // line 27
                echo "                <img class=\"classement classement0";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()), "html", null, true);
                echo "\"
                     src=\"../images/casques/etoiles.gif\"
                     alt=\"Classement";
                // line 29
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) / 10), array("." => ",")), "html", null, true);
                echo " sur 5\">";
            } else {
                // line 31
                echo "                <img class=\"classement classement";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()), "html", null, true);
                echo "\"
                     src=\"../images/casques/etoiles.gif\"
                     alt=\"Classement";
                // line 33
                echo twig_escape_filter($this->env, twig_replace_filter((twig_get_attribute($this->env, $this->source, $context["casque"], "classement", array()) / 10), array("." => ",")), "html", null, true);
                echo " sur 5\">";
            }
            // line 35
            echo "        </article>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['casque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "casques.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  99 => 35,  95 => 33,  89 => 31,  85 => 29,  79 => 27,  77 => 25,  74 => 24,  70 => 23,  65 => 22,  60 => 19,  57 => 18,  52 => 14,  49 => 13,  47 => 11,  43 => 8,  41 => 6,  38 => 5,  32 => 4,  29 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "casques.twig", "C:\\wamp64\\www\\TP11_Correction_Nolark\\tpl\\casques.twig");
    }
}
