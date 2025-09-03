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

/* portfolio.html.twig */
class __TwigTemplate_b425a9b810f6ec17695d1d94ff9bd9ae46048532704e594e7f5cfcea5d14fbac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 7
            echo "        <div class=\"content-wrapper\">
            <div class=\"container ";
            // line 8
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    ";
            // line 11
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                </div>
                
                ";
            // line 15
            echo "                ";
            $context["all_portfolio_items"] = [];
            // line 16
            echo "                
                ";
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 19
                echo "                    ";
                if ((($this->getAttribute($context["child"], "template", []) == "portfolio-item") && $this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []))) {
                    // line 20
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                        // line 21
                        echo "                            ";
                        $context["item_data"] = ["page" =>                         // line 22
$context["child"], "gallery_item" =>                         // line 23
$context["gallery_item"], "stand_type" => $this->getAttribute($this->getAttribute(                        // line 24
$context["child"], "header", []), "stand_type", []), "construction_area" => $this->getAttribute($this->getAttribute(                        // line 25
$context["child"], "header", []), "construction_area", []), "exhibition_name" => $this->getAttribute($this->getAttribute(                        // line 26
$context["child"], "header", []), "exhibition_name", []), "company_name" => $this->getAttribute($this->getAttribute(                        // line 27
$context["child"], "header", []), "company_name", []), "project_year" => $this->getAttribute($this->getAttribute(                        // line 28
$context["child"], "header", []), "project_year", []), "source" => "portfolio"];
                        // line 31
                        echo "                            ";
                        $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                        // line 32
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                    ";
                }
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                
                ";
            // line 37
            echo "                ";
            $context["services_page"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/uslugi/razrabotka-stendov"], "method");
            // line 38
            echo "                ";
            if (($context["services_page"] ?? null)) {
                // line 39
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["services_page"] ?? null), "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["service_child"]) {
                    // line 40
                    echo "                        ";
                    if ((($this->getAttribute($context["service_child"], "template", []) == "stand-page") && $this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []))) {
                        // line 41
                        echo "                            ";
                        $context["stand_type"] = null;
                        // line 42
                        echo "                            ";
                        if (($this->getAttribute($context["service_child"], "slug", []) == "typovye")) {
                            // line 43
                            echo "                                ";
                            $context["stand_type"] = "typovye";
                            // line 44
                            echo "                            ";
                        } elseif (($this->getAttribute($context["service_child"], "slug", []) == "nestandart")) {
                            // line 45
                            echo "                                ";
                            $context["stand_type"] = "nestandart";
                            // line 46
                            echo "                            ";
                        } elseif (($this->getAttribute($context["service_child"], "slug", []) == "ekskluziv")) {
                            // line 47
                            echo "                                ";
                            $context["stand_type"] = "ekskluziv";
                            // line 48
                            echo "                            ";
                        }
                        // line 49
                        echo "                            
                            ";
                        // line 50
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                            // line 51
                            echo "                                ";
                            // line 52
                            echo "                                ";
                            $context["item_data"] = ["page" =>                             // line 53
$context["service_child"], "gallery_item" =>                             // line 54
$context["gallery_item"], "stand_type" =>                             // line 55
($context["stand_type"] ?? null), "construction_area" => $this->getAttribute(                            // line 56
$context["gallery_item"], "construction_area", []), "exhibition_name" => $this->getAttribute(                            // line 57
$context["gallery_item"], "exhibition_name", []), "company_name" => $this->getAttribute(                            // line 58
$context["gallery_item"], "company_name", []), "project_year" => $this->getAttribute(                            // line 59
$context["gallery_item"], "project_year", []), "source" => "services", "images" => (($this->getAttribute(                            // line 61
$context["gallery_item"], "images", [])) ? ($this->getAttribute($context["gallery_item"], "images", [])) : (null))];
                            // line 63
                            echo "                                ";
                            $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                            // line 64
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                        ";
                    }
                    // line 66
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                ";
            }
            // line 68
            echo "                
                ";
            // line 69
            if ((twig_length_filter($this->env, ($context["all_portfolio_items"] ?? null)) > 0)) {
                // line 70
                echo "                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    ";
                // line 72
                echo "                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>

                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            ";
                // line 85
                $context["gallery_id"] = "portfolio-main";
                // line 86
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["all_portfolio_items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 87
                    echo "                                ";
                    $context["gallery_item"] = $this->getAttribute($context["item"], "gallery_item", []);
                    // line 88
                    echo "                                ";
                    $context["page_obj"] = $this->getAttribute($context["item"], "page", []);
                    // line 89
                    echo "                                    ";
                    $context["project_images"] = [];
                    // line 90
                    echo "                                    ";
                    $context["main_image"] = null;
                    // line 91
                    echo "                                    ";
                    $context["title"] = (($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) : ("Проект"));
                    // line 92
                    echo "                                    ";
                    $context["desc"] = (($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) : (""));
                    // line 93
                    echo "                                    
                                    ";
                    // line 95
                    echo "                                    ";
                    $context["construction_area"] = (($this->getAttribute($context["item"], "construction_area", [])) ? ($this->getAttribute($context["item"], "construction_area", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "construction_area", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "construction_area", [])) : (""))));
                    // line 96
                    echo "                                    ";
                    $context["exhibition_name"] = (($this->getAttribute($context["item"], "exhibition_name", [])) ? ($this->getAttribute($context["item"], "exhibition_name", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "exhibition_name", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "exhibition_name", [])) : (""))));
                    // line 97
                    echo "                                    ";
                    $context["company_name"] = (($this->getAttribute($context["item"], "company_name", [])) ? ($this->getAttribute($context["item"], "company_name", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "company_name", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "company_name", [])) : (""))));
                    // line 98
                    echo "                                    ";
                    $context["project_year"] = (($this->getAttribute($context["item"], "project_year", [])) ? ($this->getAttribute($context["item"], "project_year", [])) : ((($this->getAttribute(($context["gallery_item"] ?? null), "project_year", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "project_year", [])) : (""))));
                    // line 99
                    echo "                                    

                                    
                                    ";
                    // line 103
                    echo "                                    ";
                    if ($this->getAttribute($context["item"], "images", [])) {
                        // line 104
                        echo "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "images", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                            // line 105
                            echo "                                            ";
                            $context["img_obj"] = null;
                            // line 106
                            echo "                                            
                                            ";
                            // line 108
                            echo "                                            ";
                            if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                                // line 109
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                                foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                    // line 110
                                    echo "                                                    ";
                                    if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                        // line 111
                                        echo "                                                        ";
                                        $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                        // line 112
                                        echo "                                                    ";
                                    }
                                    // line 113
                                    echo "                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 114
                                echo "                                            ";
                            }
                            // line 115
                            echo "                                            
                                            ";
                            // line 116
                            if (($context["img_obj"] ?? null)) {
                                // line 117
                                echo "                                                ";
                                $context["img_data"] = ["image" =>                                 // line 118
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                                // line 119
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                                // line 120
$context["img_item"], "is_main", [])) ? ($this->getAttribute($context["img_item"], "is_main", [])) : (false))];
                                // line 122
                                echo "                                                ";
                                $context["project_images"] = twig_array_merge(($context["project_images"] ?? null), [0 => ($context["img_data"] ?? null)]);
                                // line 123
                                echo "                                                
                                                ";
                                // line 125
                                echo "                                                ";
                                if (($this->getAttribute($context["img_item"], "is_main", []) &&  !($context["main_image"] ?? null))) {
                                    // line 126
                                    echo "                                                    ";
                                    $context["main_image"] = ($context["img_obj"] ?? null);
                                    // line 127
                                    echo "                                                ";
                                }
                                // line 128
                                echo "                                            ";
                            }
                            // line 129
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "                                    ";
                    }
                    // line 131
                    echo "                                    
                                    ";
                    // line 133
                    echo "                                    ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) == 0)) {
                        // line 134
                        echo "                                        ";
                        $context["item_image"] = null;
                        // line 135
                        echo "                                        
                                        ";
                        // line 137
                        echo "                                        ";
                        if ($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", [])) {
                            // line 138
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 139
                                echo "                                                ";
                                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 140
                                    echo "                                                    ";
                                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 141
                                    echo "                                                ";
                                }
                                // line 142
                                echo "                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 143
                            echo "                                        ";
                        }
                        // line 144
                        echo "                                        
                                        ";
                        // line 146
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []))) {
                            // line 147
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []), [], "array");
                            // line 148
                            echo "                                        ";
                        }
                        // line 149
                        echo "                                        
                                        ";
                        // line 151
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image", []))) {
                            // line 152
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image", []), [], "array");
                            // line 153
                            echo "                                        ";
                        }
                        // line 154
                        echo "                                        
                                        ";
                        // line 155
                        if (($context["item_image"] ?? null)) {
                            // line 156
                            echo "                                            ";
                            $context["img_data"] = ["image" =>                             // line 157
($context["item_image"] ?? null), "caption" =>                             // line 158
($context["desc"] ?? null), "is_main" => true];
                            // line 161
                            echo "                                            ";
                            $context["project_images"] = [0 => ($context["img_data"] ?? null)];
                            // line 162
                            echo "                                            ";
                            $context["main_image"] = ($context["item_image"] ?? null);
                            // line 163
                            echo "                                        ";
                        }
                        // line 164
                        echo "                                    ";
                    }
                    // line 165
                    echo "                                    
                                    ";
                    // line 167
                    echo "                                    ";
                    if (( !($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 168
                        echo "                                        ";
                        $context["main_image"] = $this->getAttribute($this->getAttribute(($context["project_images"] ?? null), 0, [], "array"), "image", []);
                        // line 169
                        echo "                                    ";
                    }
                    // line 170
                    echo "                                    
                                    ";
                    // line 171
                    if ((($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                        // line 172
                        echo "                                        ";
                        $context["thumb_width"] = 400;
                        // line 173
                        echo "                                        ";
                        $context["thumb_height"] = 300;
                        // line 174
                        echo "                                        
                                        <div class=\"portfolio-item\" data-type=\"";
                        // line 175
                        (($this->getAttribute($context["item"], "stand_type", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true))) : (print ("unknown")));
                        echo "\">
                                            <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <img src=\"";
                        // line 178
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                                                     alt=\"";
                        // line 179
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\"
                                                     onclick=\"openPortfolioGallery(";
                        // line 180
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html_attr");
                        echo "')\"
                                                     loading=\"lazy\"
                                                     sizes=\"(max-width: 480px) 45vw, (max-width: 768px) 45vw, 33vw\">
                                                
                                                ";
                        // line 185
                        echo "                                                ";
                        if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                            // line 186
                            echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                            // line 187
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                            echo "
                                                    </div>
                                                ";
                        }
                        // line 190
                        echo "                                                
                                                ";
                        // line 192
                        echo "                                                <div class=\"hidden-gallery-data\" id=\"gallery-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                        echo "\" style=\"display: none;\">
                                                    ";
                        // line 193
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["project_images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["img_data"]) {
                            // line 194
                            echo "                                                        <div class=\"gallery-item\" 
                                                             data-src=\"";
                            // line 195
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                            echo "\" 
                                                             data-caption=\"";
                            // line 196
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                            echo "\"></div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 198
                        echo "                                                </div>
                                                
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                        // line 203
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                        // line 206
                        if ($this->getAttribute($context["item"], "stand_type", [])) {
                            // line 207
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-";
                            // line 209
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                            echo "\">
                                                                ";
                            // line 210
                            if (($this->getAttribute($context["item"], "stand_type", []) == "typovye")) {
                                echo "Типовой
                                                                ";
                            } elseif (($this->getAttribute(                            // line 211
$context["item"], "stand_type", []) == "nestandart")) {
                                echo "Нестандартный
                                                                ";
                            } elseif (($this->getAttribute(                            // line 212
$context["item"], "stand_type", []) == "ekskluziv")) {
                                echo "Эксклюзивный
                                                                ";
                            } else {
                                // line 213
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 215
                            echo "                                                            </span>
                                                        </div>
                                                    ";
                        }
                        // line 218
                        echo "                                                    
                                                    ";
                        // line 219
                        if (($context["construction_area"] ?? null)) {
                            // line 220
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                            // line 222
                            echo twig_escape_filter($this->env, ($context["construction_area"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 225
                        echo "                                                    
                                                    ";
                        // line 226
                        if (($context["exhibition_name"] ?? null)) {
                            // line 227
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                            // line 229
                            echo twig_escape_filter($this->env, ($context["exhibition_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 232
                        echo "                                                    
                                                    ";
                        // line 233
                        if (($context["company_name"] ?? null)) {
                            // line 234
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                            // line 236
                            echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 239
                        echo "                                                    
                                                    ";
                        // line 240
                        if (($context["project_year"] ?? null)) {
                            // line 241
                            echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                            // line 243
                            echo twig_escape_filter($this->env, ($context["project_year"] ?? null), "html", null, true);
                            echo "</span>
                                                        </div>
                                                    ";
                        }
                        // line 246
                        echo "                                                </div>
                                                
                                                ";
                        // line 248
                        if (($context["desc"] ?? null)) {
                            // line 249
                            echo "                                                    <div class=\"portfolio-description\">";
                            echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                            echo "</div>
                                                ";
                        }
                        // line 251
                        echo "                                            </div>
                                        </div>
                                        </div>
                                    ";
                    }
                    // line 255
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                echo "                        </div>
                    </div>
                </div>
                ";
            } else {
                // line 260
                echo "                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                ";
            }
            // line 264
            echo "                
                <!-- Portfolio Modal -->
                <div id=\"portfolioModal\" class=\"portfolio-modal\" onclick=\"closePortfolioModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closePortfolioModal()\">&times;</span>
                        
                        <!-- Navigation arrows -->
                        <button class=\"modal-nav modal-prev\" onclick=\"prevImage()\" style=\"display: none;\">&lt;</button>
                        <button class=\"modal-nav modal-next\" onclick=\"nextImage()\" style=\"display: none;\">&gt;</button>
                        
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                        
                        <!-- Image counter -->
                        <div id=\"modalCounter\" class=\"modal-counter\" style=\"display: none;\"></div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 286
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 287
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 288
        $context["portfolio_styles"] = ('' === $tmp = ".portfolio-section {
    margin: 30px 0;
}

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.portfolio-item {
    display: flex;
    flex-direction: column;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
    flex: 1;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    cursor: pointer;
    padding: 1rem;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.portfolio-title {
    margin: 0 0 0.5rem 0;
    font-size: 1.2rem;
    color: #2c2c2c;
    font-weight: 600;
    line-height: 1.4;
}

.portfolio-metadata {
    margin-bottom: 0.5rem;
    flex-shrink: 0;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    font-size: 0.85rem;
    min-height: 24px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    margin: 0;
    height: auto;
    min-height: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

/* Portfolio Modal Styles */
.portfolio-modal {
    display: none;
    position: fixed !important;
    z-index: 10000 !important;
    left: 0 !important;
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: rgba(0, 0, 0, 0.9) !important;
    animation: fadeIn 0.3s ease;
}

.modal-content {
    position: absolute !important;
    margin: auto !important;
    padding: 0 !important;
    width: 90% !important;
    max-width: 800px !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    text-align: center !important;
    z-index: 10001 !important;
}

.modal-content img {
    width: auto;
    height: auto;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
}

.modal-close {
    position: absolute;
    top: -40px;
    right: 0;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: #ff6600;
}

.modal-caption {
    margin-top: 1rem;
    color: #fff;
    font-size: 1.1rem;
    font-weight: 500;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Modal Navigation */
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    z-index: 10001;
}

.modal-nav:hover {
    background: rgba(0, 0, 0, 0.9);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}

.modal-counter {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 1rem;
    background: rgba(0, 0, 0, 0.7);
    padding: 5px 10px;
    border-radius: 15px;
}

.hidden-gallery-data {
    display: none !important;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem;
    }
    .portfolio-card {
        border-radius: 10px;
    }
    .portfolio-image {
        min-height: 140px;
        max-height: 30vh;
    }
    .portfolio-image img {
        padding: 0.5rem;
    }
    .portfolio-info {
        padding: 0.5rem 0.75rem;
    }
    .portfolio-title {
        font-size: 1rem;
    }
    .metadata-item {
        font-size: 0.8rem;
    }
    .portfolio-description {
        display: none;
    }
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    .filter-btn {
        width: 200px;
    }
}

@media (max-width: 480px) {
    .portfolio-image {
        min-height: 120px;
        max-height: 28vh;
    }
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 649
        echo "
";
        // line 650
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 653
    public function block_javascripts($context, array $blocks = [])
    {
        // line 654
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        // line 656
        $context["portfolio_script"] = ('' === $tmp = "// Portfolio Gallery Variables
let currentGallery = [];
let currentImageIndex = 0;

// Portfolio Modal Functions
function openPortfolioGallery(galleryId, title) {
    const galleryData = document.getElementById('gallery-' + galleryId);
    const galleryItems = galleryData.querySelectorAll('.gallery-item');
    
    // Populate gallery array
    currentGallery = [];
    galleryItems.forEach(item => {
        currentGallery.push({
            src: item.dataset.src,
            caption: item.dataset.caption
        });
    });
    
    currentImageIndex = 0;
    showModalImage();
    
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'block';
    
    // Show/hide navigation
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 1) {
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
        counter.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        counter.style.display = 'none';
    }
    
    // Prevent body scroll when modal is open
    document.body.style.overflow = 'hidden';
}

function showModalImage() {
    const modalImg = document.getElementById('modalImage');
    const caption = document.getElementById('modalCaption');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 0) {
        const currentItem = currentGallery[currentImageIndex];
        modalImg.src = currentItem.src;
        modalImg.alt = currentItem.caption;
        caption.textContent = currentItem.caption;
        
        if (currentGallery.length > 1) {
            counter.textContent = `\${currentImageIndex + 1} / \${currentGallery.length}`;
        }
    }
}

function nextImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex + 1) % currentGallery.length;
        showModalImage();
    }
}

function prevImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex - 1 + currentGallery.length) % currentGallery.length;
        showModalImage();
    }
}

function closePortfolioModal() {
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'none';
    
    // Reset gallery
    currentGallery = [];
    currentImageIndex = 0;
    
    // Restore body scroll
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key and add arrow navigation
document.addEventListener('keydown', function(event) {
    const modal = document.getElementById('portfolioModal');
    if (modal.style.display === 'block') {
        if (event.key === 'Escape') {
            closePortfolioModal();
        } else if (event.key === 'ArrowLeft') {
            prevImage();
        } else if (event.key === 'ArrowRight') {
            nextImage();
        }
    }
});

// Portfolio filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach((item, index) => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                    item.style.order = ''; // Reset order
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Force grid recalculation
            const grid = document.querySelector('.portfolio-grid');
            if (grid) {
                grid.style.display = 'none';
                grid.offsetHeight; // Trigger reflow
                grid.style.display = 'grid';
            }
        });
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 793
        echo "
";
        // line 794
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["portfolio_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1222 => 794,  1219 => 793,  1082 => 656,  1077 => 654,  1074 => 653,  1070 => 650,  1067 => 649,  706 => 288,  702 => 287,  699 => 286,  675 => 264,  669 => 260,  663 => 256,  649 => 255,  643 => 251,  637 => 249,  635 => 248,  631 => 246,  625 => 243,  621 => 241,  619 => 240,  616 => 239,  610 => 236,  606 => 234,  604 => 233,  601 => 232,  595 => 229,  591 => 227,  589 => 226,  586 => 225,  580 => 222,  576 => 220,  574 => 219,  571 => 218,  566 => 215,  561 => 213,  556 => 212,  552 => 211,  548 => 210,  544 => 209,  540 => 207,  538 => 206,  532 => 203,  525 => 198,  517 => 196,  513 => 195,  510 => 194,  506 => 193,  501 => 192,  498 => 190,  492 => 187,  489 => 186,  486 => 185,  477 => 180,  473 => 179,  469 => 178,  463 => 175,  460 => 174,  457 => 173,  454 => 172,  452 => 171,  449 => 170,  446 => 169,  443 => 168,  440 => 167,  437 => 165,  434 => 164,  431 => 163,  428 => 162,  425 => 161,  423 => 158,  422 => 157,  420 => 156,  418 => 155,  415 => 154,  412 => 153,  409 => 152,  406 => 151,  403 => 149,  400 => 148,  397 => 147,  394 => 146,  391 => 144,  388 => 143,  382 => 142,  379 => 141,  376 => 140,  373 => 139,  368 => 138,  365 => 137,  362 => 135,  359 => 134,  356 => 133,  353 => 131,  350 => 130,  344 => 129,  341 => 128,  338 => 127,  335 => 126,  332 => 125,  329 => 123,  326 => 122,  324 => 120,  323 => 119,  322 => 118,  320 => 117,  318 => 116,  315 => 115,  312 => 114,  306 => 113,  303 => 112,  300 => 111,  297 => 110,  292 => 109,  289 => 108,  286 => 106,  283 => 105,  278 => 104,  275 => 103,  270 => 99,  267 => 98,  264 => 97,  261 => 96,  258 => 95,  255 => 93,  252 => 92,  249 => 91,  246 => 90,  243 => 89,  240 => 88,  237 => 87,  219 => 86,  217 => 85,  202 => 72,  199 => 70,  197 => 69,  194 => 68,  191 => 67,  185 => 66,  182 => 65,  176 => 64,  173 => 63,  171 => 61,  170 => 59,  169 => 58,  168 => 57,  167 => 56,  166 => 55,  165 => 54,  164 => 53,  162 => 52,  160 => 51,  156 => 50,  153 => 49,  150 => 48,  147 => 47,  144 => 46,  141 => 45,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  121 => 39,  118 => 38,  115 => 37,  112 => 35,  106 => 34,  103 => 33,  97 => 32,  94 => 31,  92 => 28,  91 => 27,  90 => 26,  89 => 25,  88 => 24,  87 => 23,  86 => 22,  84 => 21,  79 => 20,  76 => 19,  71 => 18,  68 => 16,  65 => 15,  59 => 11,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set grid_size = theme_var('grid-size') %}

{% block content %}
    {% if not grav.admin %}
        <div class=\"content-wrapper\">
            <div class=\"container {{ grid_size }}\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    {{ page.content|raw }}
                </div>
                
                {# Collect all portfolio items from multiple sources #}
                {% set all_portfolio_items = [] %}
                
                {# Get items from Portfolio section #}
                {% for child in page.children.visible %}
                    {% if child.template == 'portfolio-item' and child.header.gallery %}
                        {% for gallery_item in child.header.gallery %}
                            {% set item_data = {
                                'page': child,
                                'gallery_item': gallery_item,
                                'stand_type': child.header.stand_type,
                                'construction_area': child.header.construction_area,
                                'exhibition_name': child.header.exhibition_name,
                                'company_name': child.header.company_name,
                                'project_year': child.header.project_year,
                                'source': 'portfolio'
                            } %}
                            {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                        {% endfor %}
                    {% endif %}
                {% endfor %}
                
                {# Get items from Services section #}
                {% set services_page = pages.find('/uslugi/razrabotka-stendov') %}
                {% if services_page %}
                    {% for service_child in services_page.children.visible %}
                        {% if service_child.template == 'stand-page' and service_child.header.gallery %}
                            {% set stand_type = null %}
                            {% if service_child.slug == 'typovye' %}
                                {% set stand_type = 'typovye' %}
                            {% elseif service_child.slug == 'nestandart' %}
                                {% set stand_type = 'nestandart' %}
                            {% elseif service_child.slug == 'ekskluziv' %}
                                {% set stand_type = 'ekskluziv' %}
                            {% endif %}
                            
                            {% for gallery_item in service_child.header.gallery %}
                                {# Always create item_data, regardless of structure #}
                                {% set item_data = {
                                    'page': service_child,
                                    'gallery_item': gallery_item,
                                    'stand_type': stand_type,
                                    'construction_area': gallery_item.construction_area,
                                    'exhibition_name': gallery_item.exhibition_name,
                                    'company_name': gallery_item.company_name,
                                    'project_year': gallery_item.project_year,
                                    'source': 'services',
                                    'images': gallery_item.images ?: null
                                } %}
                                {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                
                {% if all_portfolio_items|length > 0 %}
                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    {# Filter Controls #}
                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>

                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            {% set gallery_id = 'portfolio-main' %}
                            {% for item in all_portfolio_items %}
                                {% set gallery_item = item.gallery_item %}
                                {% set page_obj = item.page %}
                                    {% set project_images = [] %}
                                    {% set main_image = null %}
                                    {% set title = gallery_item.title ?: 'Проект' %}
                                    {% set desc = gallery_item.desc ?: '' %}
                                    
                                    {# Ensure all metadata fields have default values #}
                                    {% set construction_area = item.construction_area ?: gallery_item.construction_area ?: '' %}
                                    {% set exhibition_name = item.exhibition_name ?: gallery_item.exhibition_name ?: '' %}
                                    {% set company_name = item.company_name ?: gallery_item.company_name ?: '' %}
                                    {% set project_year = item.project_year ?: gallery_item.project_year ?: '' %}
                                    

                                    
                                    {# Handle multiple images structure #}
                                    {% if item.images %}
                                        {% for img_item in item.images %}
                                            {% set img_obj = null %}
                                            
                                            {# Check for uploaded image #}
                                            {% if img_item.image_upload %}
                                                {% for filepath, filedata in img_item.image_upload %}
                                                    {% if not img_obj and filedata.name %}
                                                        {% set img_obj = page_obj.media[filedata.name] %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                            
                                            {% if img_obj %}
                                                {% set img_data = {
                                                    'image': img_obj,
                                                    'caption': img_item.caption ?: '',
                                                    'is_main': img_item.is_main ?: false
                                                } %}
                                                {% set project_images = project_images|merge([img_data]) %}
                                                
                                                {# Set main image #}
                                                {% if img_item.is_main and not main_image %}
                                                    {% set main_image = img_obj %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    
                                    {# Legacy single image handling if no images found #}
                                    {% if project_images|length == 0 %}
                                        {% set item_image = null %}
                                        
                                        {# Check for uploaded image first #}
                                        {% if gallery_item.image_upload %}
                                            {% for filepath, filedata in gallery_item.image_upload %}
                                                {% if not item_image and filedata.name %}
                                                    {% set item_image = page_obj.media[filedata.name] %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                        
                                        {# If no uploaded image, check for image_name #}
                                        {% if not item_image and gallery_item.image_name %}
                                            {% set item_image = page_obj.media[gallery_item.image_name] %}
                                        {% endif %}
                                        
                                        {# Fallback to old image field #}
                                        {% if not item_image and gallery_item.image %}
                                            {% set item_image = page_obj.media[gallery_item.image] %}
                                        {% endif %}
                                        
                                        {% if item_image %}
                                            {% set img_data = {
                                                'image': item_image,
                                                'caption': desc,
                                                'is_main': true
                                            } %}
                                            {% set project_images = [img_data] %}
                                            {% set main_image = item_image %}
                                        {% endif %}
                                    {% endif %}
                                    
                                    {# Use first image as main if no main image specified #}
                                    {% if not main_image and project_images|length > 0 %}
                                        {% set main_image = project_images[0].image %}
                                    {% endif %}
                                    
                                    {% if main_image and project_images|length > 0 %}
                                        {% set thumb_width = 400 %}
                                        {% set thumb_height = 300 %}
                                        
                                        <div class=\"portfolio-item\" data-type=\"{{ item.stand_type ?: 'unknown' }}\">
                                            <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <img src=\"{{ main_image.url }}\" 
                                                     alt=\"{{ title }}\"
                                                     onclick=\"openPortfolioGallery({{ loop.index }}, '{{ title|e('html_attr') }}')\"
                                                     loading=\"lazy\"
                                                     sizes=\"(max-width: 480px) 45vw, (max-width: 768px) 45vw, 33vw\">
                                                
                                                {# Image counter if multiple images #}
                                                {% if project_images|length > 1 %}
                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> {{ project_images|length }}
                                                    </div>
                                                {% endif %}
                                                
                                                {# Hidden images data for gallery #}
                                                <div class=\"hidden-gallery-data\" id=\"gallery-{{ loop.index }}\" style=\"display: none;\">
                                                    {% for img_data in project_images %}
                                                        <div class=\"gallery-item\" 
                                                             data-src=\"{{ img_data.image.url }}\" 
                                                             data-caption=\"{{ img_data.caption ?: title }}\"></div>
                                                    {% endfor %}
                                                </div>
                                                
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">{{ title }}</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    {% if item.stand_type %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-{{ item.stand_type }}\">
                                                                {% if item.stand_type == 'typovye' %}Типовой
                                                                {% elseif item.stand_type == 'nestandart' %}Нестандартный
                                                                {% elseif item.stand_type == 'ekskluziv' %}Эксклюзивный
                                                                {% else %}{{ item.stand_type }}
                                                                {% endif %}
                                                            </span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if construction_area %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">{{ construction_area }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if exhibition_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">{{ exhibition_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if company_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">{{ company_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if project_year %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">{{ project_year }}</span>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                                
                                                {% if desc %}
                                                    <div class=\"portfolio-description\">{{ desc }}</div>
                                                {% endif %}
                                            </div>
                                        </div>
                                        </div>
                                    {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
                {% else %}
                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                {% endif %}
                
                <!-- Portfolio Modal -->
                <div id=\"portfolioModal\" class=\"portfolio-modal\" onclick=\"closePortfolioModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closePortfolioModal()\">&times;</span>
                        
                        <!-- Navigation arrows -->
                        <button class=\"modal-nav modal-prev\" onclick=\"prevImage()\" style=\"display: none;\">&lt;</button>
                        <button class=\"modal-nav modal-next\" onclick=\"nextImage()\" style=\"display: none;\">&gt;</button>
                        
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                        
                        <!-- Image counter -->
                        <div id=\"modalCounter\" class=\"modal-counter\" style=\"display: none;\"></div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% set portfolio_styles %}
.portfolio-section {
    margin: 30px 0;
}

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.portfolio-item {
    display: flex;
    flex-direction: column;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
    flex: 1;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: transform 0.3s ease;
    cursor: pointer;
    padding: 1rem;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 1rem 1.5rem;
    display: flex;
    flex-direction: column;
    background: #ffffff;
}

.portfolio-title {
    margin: 0 0 0.5rem 0;
    font-size: 1.2rem;
    color: #2c2c2c;
    font-weight: 600;
    line-height: 1.4;
}

.portfolio-metadata {
    margin-bottom: 0.5rem;
    flex-shrink: 0;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4px;
    font-size: 0.85rem;
    min-height: 24px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    display: flex;
    align-items: center;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    display: flex;
    align-items: center;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    margin: 0;
    height: auto;
    min-height: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

/* Portfolio Modal Styles */
.portfolio-modal {
    display: none;
    position: fixed !important;
    z-index: 10000 !important;
    left: 0 !important;
    top: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    max-width: none !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: rgba(0, 0, 0, 0.9) !important;
    animation: fadeIn 0.3s ease;
}

.modal-content {
    position: absolute !important;
    margin: auto !important;
    padding: 0 !important;
    width: 90% !important;
    max-width: 800px !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    text-align: center !important;
    z-index: 10001 !important;
}

.modal-content img {
    width: auto;
    height: auto;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
}

.modal-close {
    position: absolute;
    top: -40px;
    right: 0;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s ease;
}

.modal-close:hover {
    color: #ff6600;
}

.modal-caption {
    margin-top: 1rem;
    color: #fff;
    font-size: 1.1rem;
    font-weight: 500;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Modal Navigation */
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
    z-index: 10001;
}

.modal-nav:hover {
    background: rgba(0, 0, 0, 0.9);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}

.modal-counter {
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 1rem;
    background: rgba(0, 0, 0, 0.7);
    padding: 5px 10px;
    border-radius: 15px;
}

.hidden-gallery-data {
    display: none !important;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem;
    }
    .portfolio-card {
        border-radius: 10px;
    }
    .portfolio-image {
        min-height: 140px;
        max-height: 30vh;
    }
    .portfolio-image img {
        padding: 0.5rem;
    }
    .portfolio-info {
        padding: 0.5rem 0.75rem;
    }
    .portfolio-title {
        font-size: 1rem;
    }
    .metadata-item {
        font-size: 0.8rem;
    }
    .portfolio-description {
        display: none;
    }
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    .filter-btn {
        width: 200px;
    }
}

@media (max-width: 480px) {
    .portfolio-image {
        min-height: 120px;
        max-height: 28vh;
    }
}
{% endset %}

{% do assets.addInlineCss(portfolio_styles) %}
{% endblock %}

{% block javascripts %}
{{ parent() }}

{% set portfolio_script %}
// Portfolio Gallery Variables
let currentGallery = [];
let currentImageIndex = 0;

// Portfolio Modal Functions
function openPortfolioGallery(galleryId, title) {
    const galleryData = document.getElementById('gallery-' + galleryId);
    const galleryItems = galleryData.querySelectorAll('.gallery-item');
    
    // Populate gallery array
    currentGallery = [];
    galleryItems.forEach(item => {
        currentGallery.push({
            src: item.dataset.src,
            caption: item.dataset.caption
        });
    });
    
    currentImageIndex = 0;
    showModalImage();
    
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'block';
    
    // Show/hide navigation
    const prevBtn = document.querySelector('.modal-prev');
    const nextBtn = document.querySelector('.modal-next');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 1) {
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
        counter.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        counter.style.display = 'none';
    }
    
    // Prevent body scroll when modal is open
    document.body.style.overflow = 'hidden';
}

function showModalImage() {
    const modalImg = document.getElementById('modalImage');
    const caption = document.getElementById('modalCaption');
    const counter = document.getElementById('modalCounter');
    
    if (currentGallery.length > 0) {
        const currentItem = currentGallery[currentImageIndex];
        modalImg.src = currentItem.src;
        modalImg.alt = currentItem.caption;
        caption.textContent = currentItem.caption;
        
        if (currentGallery.length > 1) {
            counter.textContent = `\${currentImageIndex + 1} / \${currentGallery.length}`;
        }
    }
}

function nextImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex + 1) % currentGallery.length;
        showModalImage();
    }
}

function prevImage() {
    if (currentGallery.length > 1) {
        currentImageIndex = (currentImageIndex - 1 + currentGallery.length) % currentGallery.length;
        showModalImage();
    }
}

function closePortfolioModal() {
    const modal = document.getElementById('portfolioModal');
    modal.style.display = 'none';
    
    // Reset gallery
    currentGallery = [];
    currentImageIndex = 0;
    
    // Restore body scroll
    document.body.style.overflow = 'auto';
}

// Close modal with Escape key and add arrow navigation
document.addEventListener('keydown', function(event) {
    const modal = document.getElementById('portfolioModal');
    if (modal.style.display === 'block') {
        if (event.key === 'Escape') {
            closePortfolioModal();
        } else if (event.key === 'ArrowLeft') {
            prevImage();
        } else if (event.key === 'ArrowRight') {
            nextImage();
        }
    }
});

// Portfolio filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach((item, index) => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                    item.style.order = ''; // Reset order
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Force grid recalculation
            const grid = document.querySelector('.portfolio-grid');
            if (grid) {
                grid.style.display = 'none';
                grid.offsetHeight; // Trigger reflow
                grid.style.display = 'grid';
            }
        });
    });
});
{% endset %}

{% do assets.addInlineJs(portfolio_script) %}
{% endblock %} ", "portfolio.html.twig", "/var/www/gravExpo/user/themes/quark/templates/portfolio.html.twig");
    }
}
