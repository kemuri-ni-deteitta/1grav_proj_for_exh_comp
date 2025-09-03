<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/list/list.html.twig */
class __TwigTemplate_8affbc1414b1bc21cbf3c8be1c05f6970914c11622430a78a633eed1fede7ccc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'global_attributes' => [$this, 'block_global_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 4
        $context["name"] = $this->getAttribute(($context["field"] ?? null), "name", []);
        // line 5
        $context["btnLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnLabel", [])) : ("PLUGIN_ADMIN.ADD_ITEM"));
        // line 6
        $context["btnSortLabel"] = (($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "btnSortLabel", [])) : ("PLUGIN_ADMIN.SORT_BY"));
        // line 7
        $context["fieldControls"] = (($this->getAttribute(($context["field"] ?? null), "controls", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "controls", []), "bottom")) : ("bottom"));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/list/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_contents($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3 pure-u-1-3";
        }
        echo "\">
        ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
            // line 12
            echo "            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\">
                <input type=\"checkbox\"
                       id=\"toggleable_";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"
                       ";
            // line 15
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 16
            echo "                       name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                       ";
            // line 17
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 18
            echo "                >
                <label for=\"toggleable_";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\"></label>
            </span>
        ";
        }
        // line 22
        echo "        ";
        if (($context["show_label"] ?? null)) {
            // line 23
            echo "        <label";
            echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((((" class=\"toggleable " . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\" for=\"toggleable_") . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (((" class=\"" . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\"")));
            echo ">
            ";
            // line 24
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 25
                echo "                ";
                if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                    // line 26
                    echo "                    <span class=\"hint--bottom\" data-hint=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), false);
                    echo " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                ";
                } else {
                    // line 28
                    echo "                    <span class=\"hint--bottom\" data-hint=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", []));
                    echo " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                ";
                }
                // line 30
                echo "            ";
            } else {
                // line 31
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
                echo "
            ";
            }
            // line 33
            echo "            ";
            echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
            echo "
        </label>
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 37
            echo "        <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
            <span class=\"form-description\">";
            // line 38
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
            echo "</span>
        </div>
        ";
        }
        // line 41
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "sublabel", [])) {
            // line 42
            echo "        <div class=\"form-sublabel ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sublabelclasses", []), "html", null, true);
            echo "\">
            ";
            // line 43
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 44
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", [])), false);
                echo "
            ";
            } else {
                // line 46
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", []));
                echo "
            ";
            }
            // line 48
            echo "        </div>
        ";
        }
        // line 50
        echo "    </div>
    <div class=\"form-data";
        // line 51
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3 pure-u-2-3";
        }
        echo "\"
        ";
        // line 52
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 57
        echo "    >

        <div class=\"form-list-wrapper ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\" data-type=\"collection\"
             ";
        // line 60
        if ($this->getAttribute(($context["field"] ?? null), "selectunique", [])) {
            // line 61
            echo "                 data-select-unique=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html_attr");
            echo "\"
                 data-max=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "selectunique", [])), "html", null, true);
            echo "\"
             ";
        }
        // line 64
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "min", [], "any", true, true)) {
            echo "data-min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min", []), "html", null, true);
            echo "\"";
        }
        // line 65
        echo "            ";
        if (($this->getAttribute(($context["field"] ?? null), "max", [], "any", true, true) &&  !$this->getAttribute(($context["field"] ?? null), "selectunique", []))) {
            echo "data-max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "max", []), "html", null, true);
            echo "\"";
        }
        // line 66
        echo "        >
            ";
        // line 67
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "top", 1 => "both"])) {
            // line 68
            echo "                <div class=\"collection-actions\">
                    ";
            // line 69
            if (($context["collapsible"] ?? null)) {
                // line 70
                echo "                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                ";
                // line 71
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                echo "</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                ";
                // line 73
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                echo "</button>
                    ";
            }
            // line 75
            echo "                    ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 76
                echo "                        <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                                ";
                // line 77
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                    ";
            }
            // line 79
            echo "                    <button class=\"button\" type=\"button\" data-action=\"add\"
                            data-action-add=\"";
            // line 80
            ((($this->getAttribute(($context["field"] ?? null), "placement", []) === "position")) ? (print ("top")) : (print (twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "placement", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placement", []), "bottom")) : ("bottom")), "html", null, true))));
            echo "\"
                            ";
            // line 81
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 82
            echo "                    ><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            echo "</button>
                </div>
            ";
        }
        // line 85
        echo "            <ul  ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\"";
        }
        echo " data-collection-holder=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                ";
        // line 86
        if (($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 87
            echo "                    data-collection-nosort
                ";
        }
        // line 88
        echo ">
                ";
        // line 89
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 90
            echo "                ";
            $context["collapsible"] = ((twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "fields", [])) > 1) && ( !$this->getAttribute(($context["field"] ?? null), "collapsible", [], "any", true, true) || $this->getAttribute(($context["field"] ?? null), "collapsible", [])));
            // line 91
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 92
                echo "                    ";
                $context["item_name"] = ((($context["name"] ?? null)) ? (((($context["name"] ?? null) . ".") . $context["key"])) : ($context["key"]));
                // line 93
                echo "                    <li data-collection-item=\"";
                echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
                echo "\"
                        data-collection-key=\"";
                // line 94
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                        class=\"";
                // line 95
                echo (((($context["collapsible"] ?? null) && $this->getAttribute(($context["field"] ?? null), "collapsed", []))) ? ("collection-collapsed") : (""));
                echo "\"
                        ";
                // line 96
                if ($this->getAttribute(($context["field"] ?? null), "min_height", [])) {
                    echo "style=\"min-height:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "min_height", []), "html", null, true);
                    echo ";\"";
                }
                echo ">
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                    // line 99
                    $context["child"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context, $context["child"], $context["child_name"], ($context["item_name"] ?? null));
                    // line 100
                    echo "                                ";
                    if ($context["child"]) {
                        // line 101
                        echo "                                    ";
                        $context["child"] = twig_array_merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                        // line 102
                        echo "                                    ";
                        $context["default_layout"] = "text";
                        // line 103
                        echo "                                    ";
                        if ((($this->getAttribute($context["child"], "type", []) == "key") || (($this->getAttribute($context["child"], "key", []) == true) && ($this->getAttribute($context["child"], "type", []) != "list")))) {
                            // line 104
                            echo "                                        ";
                            // line 105
                            echo "                                        ";
                            $context["default_layout"] = "key";
                            // line 106
                            echo "                                        ";
                            $context["child_value"] = $context["key"];
                            // line 107
                            echo "                                    ";
                        } elseif (($this->getAttribute($context["child"], "name", []) == "value")) {
                            // line 108
                            echo "                                        ";
                            // line 109
                            echo "                                        ";
                            $context["child"] = twig_array_merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                            // line 110
                            echo "                                        ";
                            $context["child_value"] = $context["val"];
                            // line 111
                            echo "                                    ";
                        } else {
                            // line 112
                            echo "                                        ";
                            $context["child_value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")));
                            // line 113
                            echo "                                        ";
                            // line 114
                            echo "                                        ";
                            if (((null === ($context["child_value"] ?? null)) && $this->getAttribute($context["val"], twig_trim_filter($context["child_name"], ".", "left"), [], "array", true, true))) {
                                // line 115
                                echo "                                          ";
                                $context["child_value"] = $this->getAttribute($context["val"], twig_trim_filter($context["child_name"], ".", "left"), [], "array");
                                // line 116
                                echo "                                        ";
                            }
                            // line 117
                            echo "                                    ";
                        }
                        // line 118
                        echo "
                                    ";
                        // line 119
                        $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["child"], "type", []), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                        // line 120
                        echo "                                    ";
                        $context["template_data"] = ["field" => $context["child"], "value" => ($context["child_value"] ?? null), "originalValue" => null];
                        // line 121
                        echo "                                    ";
                        if ((($context["default_layout"] ?? null) != "key")) {
                            // line 122
                            echo "                                        ";
                            if (($this->getAttribute($context["child"], "type", []) == "fieldset")) {
                                // line 123
                                echo "                                            ";
                                $context["template_data"] = twig_array_merge(($context["template_data"] ?? null), ["val" => ($context["child_value"] ?? null)]);
                                // line 124
                                echo "                                        ";
                            }
                            // line 125
                            echo "                                    ";
                        }
                        // line 127
                        $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/list/list.html.twig", 127)->display(twig_array_merge($context, ($context["template_data"] ?? null)));
                    }
                    // line 129
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                            <div class=\"item-actions\">
                                ";
                // line 131
                if (($context["collapsible"] ?? null)) {
                    // line 132
                    echo "                                    <i class=\"fa fa-chevron-circle-";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("right") : ("down"));
                    echo "\" data-action=\"";
                    echo (($this->getAttribute(($context["field"] ?? null), "collapsed", [])) ? ("expand") : ("collapse"));
                    echo "\"></i>
                                    <br />
                                ";
                }
                // line 135
                echo "                                <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                                <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                                  <i class=\"fa fa-fw text-primary fa-check\"></i>
                                  <span>";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.DELETE"), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                ";
        }
        // line 144
        echo "            </ul>
            ";
        // line 145
        if (twig_in_filter(($context["fieldControls"] ?? null), [0 => "bottom", 1 => "both"])) {
            // line 146
            echo "            <div class=\"collection-actions\">
                ";
            // line 147
            if (($context["collapsible"] ?? null)) {
                // line 148
                echo "                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            ";
                // line 149
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-down\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
                echo "</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            ";
                // line 151
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-chevron-circle-right\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
                echo "</button>
                ";
            }
            // line 153
            echo "                ";
            if ($this->getAttribute(($context["field"] ?? null), "sortby", [])) {
                // line 154
                echo "                    <button class=\"button";
                echo (( !twig_length_filter($this->env, ($context["value"] ?? null))) ? (" hidden") : (""));
                echo "\" type=\"button\" data-action=\"sort\" data-action-sort=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "\" data-action-sort-dir=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"
                            ";
                // line 155
                if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                    echo "disabled=\"disabled\"";
                }
                echo "><i class=\"fa fa-sort-amount-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "sortby_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "sortby_dir", []), "asc")) : ("asc")), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnSortLabel"] ?? null)), "html", null, true);
                echo " '";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sortby", []), "html", null, true);
                echo "'</button>
                ";
            }
            // line 157
            echo "                <button class=\"button\" type=\"button\" data-action=\"add\"
                        data-action-add=\"";
            // line 158
            ((($this->getAttribute(($context["field"] ?? null), "placement", []) === "position")) ? (print ("bottom")) : (print (twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "placement", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placement", []), "bottom")) : ("bottom")), "html", null, true))));
            echo "\"
                        ";
            // line 159
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 160
            echo "                ><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ($context["btnLabel"] ?? null)), "html", null, true);
            echo "</button>
            </div>
            ";
        }
        // line 163
        echo "
            ";
        // line 164
        ob_start();
        // line 165
        $context["item_name"] = ((($context["name"] ?? null)) ? ((($context["name"] ?? null) . ".*")) : ("*"));
        // line 166
        echo "<li data-collection-item=\"";
        echo twig_escape_filter($this->env, ($context["item_name"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 167
        if ( !($this->getAttribute(($context["field"] ?? null), "sort", []) === false)) {
            // line 168
            echo "                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    ";
        }
        // line 170
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                // line 172
                $context["child"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context, $context["child"], $context["child_name"], ($context["item_name"] ?? null));
                // line 173
                echo "                            ";
                if ($context["child"]) {
                    // line 174
                    echo "                                ";
                    $context["child"] = twig_array_merge($context["child"], ["_list_index" => ($context["item_name"] ?? null)]);
                    // line 175
                    echo "                                ";
                    $context["default_layout"] = "text";
                    // line 176
                    echo "                                ";
                    if ((($this->getAttribute($context["child"], "type", []) == "key") || ($this->getAttribute($context["child"], "key", []) == true))) {
                        // line 177
                        echo "                                    ";
                        // line 178
                        echo "                                    ";
                        $context["default_layout"] = "key";
                        // line 179
                        echo "                                ";
                    } elseif (($this->getAttribute($context["child"], "name", []) == "value")) {
                        // line 180
                        echo "                                    ";
                        // line 181
                        echo "                                    ";
                        $context["child"] = twig_array_merge($context["child"], ["name" => ($context["item_name"] ?? null)]);
                        // line 182
                        echo "                                ";
                    }
                    // line 183
                    echo "
                                ";
                    // line 184
                    $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["child"], "type", []), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                    // line 185
                    echo "                                ";
                    $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/list/list.html.twig", 185)->display(twig_array_merge($context, ["field" => $context["child"], "value" => null]));
                    // line 186
                    echo "                            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                        <div class=\"item-actions\">
                            ";
            // line 189
            if (($context["collapsible"] ?? null)) {
                // line 190
                echo "                                <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                                <br />
                            ";
            }
            // line 193
            echo "                            <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                            <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                              <i class=\"fa fa-fw text-primary fa-check\"></i>
                              <span>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.DELETE"), "html", null, true);
            echo "</span>
                            </div>
                        </div>";
        }
        // line 200
        echo "</li>
            ";
        $context["template"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        echo "            <div style=\"display: none;\" data-collection-template=\"new\"
                 data-collection-template-html=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->regexReplace(($context["template"] ?? null), "/([ 
]+)/", " "), "html_attr");
        echo "\"></div>
            <div style=\"display: none;\" data-collection-config=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></div>
        </div>
    </div>
";
    }

    // line 52
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 53
        echo "        data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
        data-grav-disabled=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
        data-grav-default=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 55,  730 => 54,  725 => 53,  722 => 52,  714 => 204,  709 => 203,  706 => 202,  702 => 200,  696 => 196,  691 => 193,  686 => 190,  684 => 189,  681 => 188,  666 => 186,  663 => 185,  661 => 184,  658 => 183,  655 => 182,  652 => 181,  650 => 180,  647 => 179,  644 => 178,  642 => 177,  639 => 176,  636 => 175,  633 => 174,  630 => 173,  628 => 172,  611 => 171,  609 => 170,  605 => 168,  603 => 167,  598 => 166,  596 => 165,  594 => 164,  591 => 163,  584 => 160,  580 => 159,  576 => 158,  573 => 157,  560 => 155,  551 => 154,  548 => 153,  539 => 151,  530 => 149,  527 => 148,  525 => 147,  522 => 146,  520 => 145,  517 => 144,  514 => 143,  495 => 138,  490 => 135,  481 => 132,  479 => 131,  476 => 130,  462 => 129,  459 => 127,  456 => 125,  453 => 124,  450 => 123,  447 => 122,  444 => 121,  441 => 120,  439 => 119,  436 => 118,  433 => 117,  430 => 116,  427 => 115,  424 => 114,  422 => 113,  419 => 112,  416 => 111,  413 => 110,  410 => 109,  408 => 108,  405 => 107,  402 => 106,  399 => 105,  397 => 104,  394 => 103,  391 => 102,  388 => 101,  385 => 100,  383 => 99,  366 => 98,  358 => 96,  354 => 95,  350 => 94,  345 => 93,  342 => 92,  324 => 91,  321 => 90,  319 => 89,  316 => 88,  312 => 87,  310 => 86,  299 => 85,  292 => 82,  288 => 81,  284 => 80,  281 => 79,  268 => 77,  259 => 76,  256 => 75,  247 => 73,  238 => 71,  235 => 70,  233 => 69,  230 => 68,  228 => 67,  225 => 66,  218 => 65,  211 => 64,  206 => 62,  201 => 61,  199 => 60,  195 => 59,  191 => 57,  189 => 52,  183 => 51,  180 => 50,  176 => 48,  170 => 46,  164 => 44,  162 => 43,  157 => 42,  154 => 41,  148 => 38,  143 => 37,  140 => 36,  133 => 33,  127 => 31,  124 => 30,  116 => 28,  108 => 26,  105 => 25,  103 => 24,  98 => 23,  95 => 22,  89 => 19,  86 => 18,  82 => 17,  77 => 16,  73 => 15,  69 => 14,  63 => 12,  61 => 11,  54 => 10,  51 => 9,  46 => 1,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set value = (value is null ? field.default : value) %}
{% set name = field.name %}
{% set btnLabel = field.btnLabel is defined ? field.btnLabel : \"PLUGIN_ADMIN.ADD_ITEM\" %}
{% set btnSortLabel = field.btnSortLabel is defined ? field.btnSortLabel : \"PLUGIN_ADMIN.SORT_BY\" %}
{% set fieldControls = field.controls|default('bottom') %}

{% block contents %}
    <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
        {% if field.toggleable %}
            <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\">
                <input type=\"checkbox\"
                       id=\"toggleable_{{ field.name }}\"
                       {% if toggleableChecked %}value=\"1\"{% endif %}
                       name=\"toggleable_{{ (scope ~ field.name)|fieldName }}\"
                       {% if toggleableChecked %}checked=\"checked\"{% endif %}
                >
                <label for=\"toggleable_{{ field.name }}\"></label>
            </span>
        {% endif %}
        {% if show_label %}
        <label{{ (field.toggleable ? ' class=\"toggleable ' ~ field.labelclasses ~ '\" for=\"toggleable_' ~ field.name ~ '\"' : ' class=\"' ~ field.labelclasses ~ '\"')|raw }}>
            {% if field.help %}
                {% if field.markdown %}
                    <span class=\"hint--bottom\" data-hint=\"{{ field.help|t|markdown(false) }}\">{{ field.label|t|markdown(false)|raw }} <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                {% else %}
                    <span class=\"hint--bottom\" data-hint=\"{{ field.help|t }}\">{{ field.label|t|raw }} <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                {% endif %}
            {% else %}
            {{ field.label|t }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
        {% endif %}
        {% if field.description %}
        <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
            <span class=\"form-description\">{{ field.description|t|markdown(false)|raw }}</span>
        </div>
        {% endif %}
        {% if field.sublabel %}
        <div class=\"form-sublabel {{ field.sublabelclasses }}\">
            {% if field.markdown %}
                {{ field.sublabel|t|markdown(false)|raw }}
            {% else %}
                {{ field.sublabel|t|raw }}
            {% endif %}
        </div>
        {% endif %}
    </div>
    <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\"
        {% block global_attributes %}
        data-grav-field=\"{{ field.type }}\"
        data-grav-disabled=\"{{ toggleableChecked }}\"
        data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
        {% endblock %}
    >

        <div class=\"form-list-wrapper {{ field.size }}\" data-type=\"collection\"
             {% if field.selectunique %}
                 data-select-unique=\"{{ field.selectunique|json_encode|e('html_attr') }}\"
                 data-max=\"{{ field.selectunique|length }}\"
             {% endif %}
            {% if field.min is defined %}data-min=\"{{ field.min }}\"{% endif %}
            {% if field.max is defined and not field.selectunique %}data-max=\"{{ field.max }}\"{% endif %}
        >
            {% if fieldControls in ['top', 'both'] %}
                <div class=\"collection-actions\">
                    {% if collapsible %}
                        <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|t }}</button>
                        <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|t }}</button>
                    {% endif %}
                    {% if field.sortby %}
                        <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|t }} '{{ field.sortby }}'</button>
                    {% endif %}
                    <button class=\"button\" type=\"button\" data-action=\"add\"
                            data-action-add=\"{{ field.placement is same as('position') ? 'top' : field.placement|default('bottom') }}\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    ><i class=\"fa fa-plus\"></i> {{ btnLabel|t }}</button>
                </div>
            {% endif %}
            <ul  {% if field.classes is defined %}class=\"{{ field.classes }}\"{% endif %} data-collection-holder=\"{{ name }}\"
                {% if field.sort is same as(false) %}
                    data-collection-nosort
                {% endif %}>
                {% if field.fields %}
                {% set collapsible = field.fields|length > 1 and (field.collapsible is not defined or field.collapsible)  %}
                {% for key, val in value %}
                    {% set item_name = name ? name ~ '.' ~ key : key %}
                    <li data-collection-item=\"{{ item_name }}\"
                        data-collection-key=\"{{ key }}\"
                        class=\"{{ collapsible and field.collapsed ? 'collection-collapsed' : '' }}\"
                        {% if field.min_height %}style=\"min-height:{{ field.min_height }};\"{% endif %}>
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                            {%- for child_name, child in field.fields -%}
                                {% set child = prepare_form_field(child, child_name, item_name) %}
                                {% if child %}
                                    {% set child = child|merge({ '_list_index': item_name }) %}
                                    {% set default_layout = 'text' %}
                                    {% if child.type == 'key' or (child.key == true and child.type != 'list') %}
                                        {# Special handling for the key field #}
                                        {% set default_layout = 'key' %}
                                        {% set child_value = key %}
                                    {% elseif child.name == 'value' %}
                                        {# Special handling for the value field #}
                                        {% set child = child|merge({ name: item_name }) %}
                                        {% set child_value = val %}
                                    {% else %}
                                        {% set child_value = form ? form.value(child.name) : data.value(child.name) %}
                                        {# Look for a default value for that field #}
                                        {% if child_value is null and val[child_name|trim('.', 'left')] is defined %}
                                          {% set child_value = val[child_name|trim('.', 'left')] %}
                                        {% endif %}
                                    {% endif %}

                                    {% set field_templates = include_form_field(child.type, field_layout, default_layout) %}
                                    {% set template_data = { field: child, value: child_value, originalValue: null } %}
                                    {% if default_layout != 'key' %}
                                        {% if child.type == 'fieldset' %}
                                            {% set template_data = template_data|merge({val: child_value}) %}
                                        {% endif %}
                                    {% endif %}
        
                                    {%- include field_templates with template_data -%}
                                {% endif %}
                            {% endfor %}
                            <div class=\"item-actions\">
                                {% if collapsible %}
                                    <i class=\"fa fa-chevron-circle-{{ field.collapsed ? 'right' : 'down' }}\" data-action=\"{{ field.collapsed ? 'expand' : 'collapse' }}\"></i>
                                    <br />
                                {% endif %}
                                <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                                <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                                  <i class=\"fa fa-fw text-primary fa-check\"></i>
                                  <span>{{ 'PLUGIN_ADMIN.DELETE'|t }}</span>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                {% endif %}
            </ul>
            {% if fieldControls in ['bottom', 'both'] %}
            <div class=\"collection-actions\">
                {% if collapsible %}
                    <button class=\"button\" type=\"button\" data-action=\"expand_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-down\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|t }}</button>
                    <button class=\"button\" type=\"button\" data-action=\"collapse_all\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-chevron-circle-right\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|t }}</button>
                {% endif %}
                {% if field.sortby %}
                    <button class=\"button{{ not value|length ? ' hidden' : '' }}\" type=\"button\" data-action=\"sort\" data-action-sort=\"{{ field.sortby }}\" data-action-sort-dir=\"{{ field.sortby_dir|default('asc') }}\"
                            {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}><i class=\"fa fa-sort-amount-{{ field.sortby_dir|default('asc') }}\"></i> {{ btnSortLabel|t }} '{{ field.sortby }}'</button>
                {% endif %}
                <button class=\"button\" type=\"button\" data-action=\"add\"
                        data-action-add=\"{{ field.placement is same as('position') ? 'bottom' : field.placement|default('bottom') }}\"
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                ><i class=\"fa fa-plus\"></i> {{ btnLabel|t }}</button>
            </div>
            {% endif %}

            {% set template %}
                {%- set item_name = name ? name ~ '.*' : '*' -%}
                <li data-collection-item=\"{{ item_name }}\">
                    {% if field.sort is not same as(false) %}
                        <div class=\"collection-sort\"><i class=\"fa fa-fw fa-bars\"></i></div>
                    {% endif %}
                    {%- if field.fields -%}
                        {%- for child_name, child in field.fields -%}
                            {% set child = prepare_form_field(child, child_name, item_name) %}
                            {% if child %}
                                {% set child = child|merge({ '_list_index': item_name }) %}
                                {% set default_layout = 'text' %}
                                {% if child.type == 'key' or child.key == true %}
                                    {# Special handling for the key field #}
                                    {% set default_layout = 'key' %}
                                {% elseif child.name == 'value' %}
                                    {# Special handling for the value field #}
                                    {% set child = child|merge({ name: item_name }) %}
                                {% endif %}

                                {% set field_templates = include_form_field(child.type, field_layout, default_layout) %}
                                {% include field_templates with { field: child, value: null } %}
                            {% endif %}
                        {%- endfor %}
                        <div class=\"item-actions\">
                            {% if collapsible %}
                                <i class=\"fa fa-chevron-circle-down\" data-action=\"collapse\"></i>
                                <br />
                            {% endif %}
                            <i class=\"fa fa-trash-o\" data-action=\"confirm\"></i>
                            <div class=\"list-confirm-deletion button danger hidden\"  data-action=\"delete\">
                              <i class=\"fa fa-fw text-primary fa-check\"></i>
                              <span>{{ 'PLUGIN_ADMIN.DELETE'|t }}</span>
                            </div>
                        </div>
                    {%- endif -%}
                </li>
            {% endset %}
            <div style=\"display: none;\" data-collection-template=\"new\"
                 data-collection-template-html=\"{{ template|regex_replace('/([ \\r\\n]+)/', ' ')|e('html_attr') }}\"></div>
            <div style=\"display: none;\" data-collection-config=\"{{ name }}\"></div>
        </div>
    </div>
{% endblock %}
", "forms/fields/list/list.html.twig", "/home/ivan/expoGroupOnServer/user/plugins/admin/themes/grav/templates/forms/fields/list/list.html.twig");
    }
}
