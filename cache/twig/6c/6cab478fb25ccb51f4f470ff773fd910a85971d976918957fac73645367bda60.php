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

/* contacts.html.twig */
class __TwigTemplate_ff5e24664b2b736e9c2060535fc7e895953f756822a5df46a9c0542a93143368 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contacts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<style>
/* ===== CONTACT INFORMATION SECTION STYLING ===== */

/* Main container for contact information */
.contact-info-section {
    margin: 2rem 0;                    /* ⚙️ SPACING: Distance from other elements (top/bottom) */
    padding: 1.5rem;                   /* ⚙️ SPACING: Internal padding inside the box */
    background: #f8f9fa;               /* 🎨 COLOR: Light gray background of the entire section */
    border-radius: 8px;                /* ⚙️ SHAPE: Rounded corners of the box */
    border-left: 4px solid #007cba;    /* 🎨 COLOR: Blue left border (change #007cba to any color) */
}

/* Main heading \"Контактная информация\" */
.contact-info-section h2 {
    color: #333;                       /* 🎨 COLOR: Dark gray color of main heading */
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space below the main heading */
    font-size: 1.5rem;                 /* 📏 SIZE: Size of main heading text */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of main heading (400=normal, 600=semi-bold, 700=bold) */
}

/* Container for each contact item (phones, emails, address) */
.contact-item {
    margin-bottom: 0.5rem;               /* ⚙️ SPACING: Space between contact sections */
}

/* Address text styling */
.contact-item p {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text */
    margin: 0;                         /* ⚙️ SPACING: Remove default margins */
}

/* Section headings (Адрес, Телефоны, Электронная почта) */
.contact-item h3 {
    color: #ff6600;                    /* 🎨 COLOR: Orange color of section headings (change #ff6600 to any color) */
    font-size: 1.2rem;                 /* 📏 SIZE: Size of section headings */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of section headings */
    margin-bottom: 0.5rem;             /* ⚙️ SPACING: Space below section headings */
    border-bottom: 2px solid #ff6600;  /* 🎨 COLOR: Orange underline under headings (change #ff6600 to match heading color) */
    padding-bottom: 0.25rem;           /* ⚙️ SPACING: Space between heading text and underline */
    display: inline-block;             /* 📐 LAYOUT: Makes the heading only as wide as the text */
}

/* List containers for phones, emails, and social networks */
.phone-list, .email-list, .social-list {
    list-style: none;                  /* 📐 LAYOUT: Removes bullet points from lists */
    padding: 0;                        /* ⚙️ SPACING: Removes default list padding */
    margin: 0;                         /* ⚙️ SPACING: Removes default list margins */
}

/* Individual phone/email/social list items */
.phone-list li, .email-list li, .social-list li {
    padding: 0.5rem 0;                 /* ⚙️ SPACING: Vertical padding for each item */
    border-bottom: 1px solid #e9ecef;  /* 🎨 COLOR: Light gray line between items (change #e9ecef to any color) */
    font-size: 1rem;                   /* 📏 SIZE: Size of all contact information */
}

/* Remove border from last item in lists */
.phone-list li:last-child, .email-list li:last-child, .social-list li:last-child {
    border-bottom: none;               /* 📐 LAYOUT: Removes bottom border from last item */
}

/* Description text for phones, emails, and social networks (the text after \"-\") */
.phone-description, .email-description, .social-description {
    font-weight: normal;                    /* 📏 WEIGHT: Makes descriptions bold (change to 'normal' for regular weight) */
    color: #000;                       /* 🎨 COLOR: Black color for descriptions (change #000 to any color) */
    font-style: normal;                /* 📏 STYLE: Normal font style (not italic) */
    font-size: 1rem;                   /* 📏 SIZE: Size of description text */
}

/* Phone numbers styling (the actual numbers, not descriptions) */
.phone-list li strong {
    font-size: 1rem;  
    font-weight: normal;                    /* 📏 SIZE: Size of phone numbers (same as descriptions) */
}

/* Email links styling */
.contact-item a {
    color: #000;                       /* 🎨 COLOR: Black color for email links (change #000 to any color) */
    text-decoration: none;             /* 📐 LAYOUT: Removes default underline from links */
    font-size: 1rem; 
                 /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email addresses styling (the actual email addresses, not descriptions) */
.email-list li a strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
    color: #034880;  
    font-weight: normal;   
}

/* Social network platform names styling (the actual platform names, not descriptions) */
.social-list li a strong {
    font-size: 1rem;
    color: #034880;     
    font-weight: normal;                /* 📏 SIZE: Size of social network platform names (same as descriptions) */
}

/* Email links on hover (when mouse is over them) */
.contact-item a:hover {
    text-decoration: underline;
}

/* Address text styling (the actual address, not the heading) */
.contact-item p strong {
    font-size: 1rem;
    font-weight: normal;                      /* 📏 SIZE: Size of address text (same as descriptions) */
}

/* ===== QUICK REFERENCE FOR CHANGES ===== */
/*
🎨 COLOR CHANGES:
- Main heading color: .contact-info-section h2 { color: #YOUR_COLOR; }
- Section headings: .contact-item h3 { color: #YOUR_COLOR; }
- Section underlines: .contact-item h3 { border-bottom: 2px solid #YOUR_COLOR; }
- Left border: .contact-info-section { border-left: 4px solid #YOUR_COLOR; }
- Descriptions: .phone-description, .email-description { color: #YOUR_COLOR; }
- Email links: .contact-item a { color: #YOUR_COLOR; }
- Background: .contact-info-section { background: #YOUR_COLOR; }
- Separator lines: .phone-list li, .email-list li { border-bottom: 1px solid #YOUR_COLOR; }

📏 SIZE CHANGES:
- Main heading: .contact-info-section h2 { font-size: YOUR_SIZE; }
- Section headings: .contact-item h3 { font-size: YOUR_SIZE; }
- All text: .phone-list li, .email-list li, .contact-item p, .phone-description, .email-description { font-size: YOUR_SIZE; }

⚙️ SPACING CHANGES:
- Section spacing: .contact-item { margin-bottom: YOUR_SIZE; }
- Item spacing: .phone-list li, .email-list li { padding: YOUR_SIZE; }
- Container padding: .contact-info-section { padding: YOUR_SIZE; }
*/
</style>
    ";
        // line 135
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    
    ";
        // line 137
        if (((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social_networks", []))) {
            // line 138
            echo "    <div class=\"contact-info-section\">
        <h2>Контактная информация</h2>
        
        ";
            // line 141
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
                // line 142
                echo "        <div class=\"contact-item\">
            <h3>Адрес</h3>
            <p><strong>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
                echo "</strong></p>
        </div>
        ";
            }
            // line 147
            echo "        
        ";
            // line 148
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", [])) {
                // line 149
                echo "        <div class=\"contact-item\">
            <h3>Телефоны</h3>
            <ul class=\"phone-list\">
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []));
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 153
                    echo "                <li>
                    <strong>";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", []), "html", null, true);
                    echo "</strong>
                    ";
                    // line 155
                    if ($this->getAttribute($context["phone"], "description", [])) {
                        // line 156
                        echo "                    <span class=\"phone-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 158
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "            </ul>
        </div>
        ";
            }
            // line 163
            echo "        
        ";
            // line 164
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", [])) {
                // line 165
                echo "        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <ul class=\"email-list\">
                ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", []));
                foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                    // line 169
                    echo "                <li>
                    <a href=\"mailto:";
                    // line 170
                    echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", []), "html", null, true);
                    echo "\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", []), "html", null, true);
                    echo "</strong></a>
                    ";
                    // line 171
                    if ($this->getAttribute($context["email"], "description", [])) {
                        // line 172
                        echo "                    <span class=\"email-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 174
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "            </ul>
        </div>
        ";
            }
            // line 179
            echo "        
        ";
            // line 180
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social_networks", [])) {
                // line 181
                echo "        <div class=\"contact-item\">
            <h3>Социальные сети</h3>
            <ul class=\"social-list\">
                ";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "social_networks", []));
                foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                    // line 185
                    echo "                <li>
                    <a href=\"";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "username", []), "html", null, true);
                    echo "\" target=\"_blank\" rel=\"noopener\">
                        <strong>
                            ";
                    // line 188
                    if (($this->getAttribute($context["social"], "platform", []) == "telegram")) {
                        echo "Telegram
                            ";
                    } elseif (($this->getAttribute(                    // line 189
$context["social"], "platform", []) == "whatsapp")) {
                        echo "WhatsApp
                            ";
                    } elseif (($this->getAttribute(                    // line 190
$context["social"], "platform", []) == "vk")) {
                        echo "ВКонтакте
                            ";
                    } elseif (($this->getAttribute(                    // line 191
$context["social"], "platform", []) == "instagram")) {
                        echo "Instagram
                            ";
                    } elseif (($this->getAttribute(                    // line 192
$context["social"], "platform", []) == "facebook")) {
                        echo "Facebook
                            ";
                    } elseif (($this->getAttribute(                    // line 193
$context["social"], "platform", []) == "twitter")) {
                        echo "Twitter/X
                            ";
                    } elseif (($this->getAttribute(                    // line 194
$context["social"], "platform", []) == "youtube")) {
                        echo "YouTube
                            ";
                    } elseif (($this->getAttribute(                    // line 195
$context["social"], "platform", []) == "linkedin")) {
                        echo "LinkedIn
                            ";
                    } else {
                        // line 196
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["social"], "platform", [])), "html", null, true);
                    }
                    // line 197
                    echo "                        </strong>
                    </a>
                    ";
                    // line 199
                    if ($this->getAttribute($context["social"], "description", [])) {
                        // line 200
                        echo "                    <span class=\"social-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 202
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "            </ul>
        </div>
        ";
            }
            // line 207
            echo "    </div>
    ";
        }
        // line 209
        echo "    
    ";
        // line 211
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
            // line 212
            echo "    <div class=\"map-section\">
        <h2>Как нас найти</h2>
        <div id=\"yandex-map\" style=\"position:relative;overflow:hidden;width:100%;height:600px;background:#f5f5f5;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;\">
            <div style=\"text-align:center;color:#666;\">
                <div style=\"font-size:48px;margin-bottom:10px;\">🗺️</div>
                <div style=\"font-size:18px;margin-bottom:5px;\"><strong>Загрузка карты...</strong></div>
                <div style=\"font-size:14px;\">";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</div>
            </div>
        </div>
        
        <script type=\"text/javascript\">
            // Use coordinates from admin panel for precise map location
            var address = \"";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "\";
            var coordinates = \"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "coordinates", []), "html", null, true);
            echo "\";
            var mapContainer = document.getElementById('yandex-map');
            
            // Parse coordinates - format should be \"latitude,longitude\" for Yandex Maps
            var coords = coordinates.split(',');
            var latitude = coords[0].trim();
            var longitude = coords[1].trim();
            
            // Create a working Yandex Maps widget with coordinates from admin panel
            var iframe = document.createElement('iframe');
            iframe.src = 'https://yandex.ru/map-widget/v1/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&source=constructor';
            iframe.width = '100%';
            iframe.height = '600';
            iframe.frameBorder = '0';
            iframe.style.border = '0';
            iframe.allowFullscreen = true;
            
            // Clear loading content and add iframe
            mapContainer.innerHTML = '';
            mapContainer.style.background = 'none';
            mapContainer.style.border = 'none';
            mapContainer.appendChild(iframe);
        </script>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 225,  392 => 224,  383 => 218,  375 => 212,  372 => 211,  369 => 209,  365 => 207,  360 => 204,  353 => 202,  347 => 200,  345 => 199,  341 => 197,  338 => 196,  333 => 195,  329 => 194,  325 => 193,  321 => 192,  317 => 191,  313 => 190,  309 => 189,  305 => 188,  300 => 186,  297 => 185,  293 => 184,  288 => 181,  286 => 180,  283 => 179,  278 => 176,  271 => 174,  265 => 172,  263 => 171,  257 => 170,  254 => 169,  250 => 168,  245 => 165,  243 => 164,  240 => 163,  235 => 160,  228 => 158,  222 => 156,  220 => 155,  216 => 154,  213 => 153,  209 => 152,  204 => 149,  202 => 148,  199 => 147,  193 => 144,  189 => 142,  187 => 141,  182 => 138,  180 => 137,  175 => 135,  42 => 4,  39 => 3,  29 => 1,);
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

{% block content %}
<style>
/* ===== CONTACT INFORMATION SECTION STYLING ===== */

/* Main container for contact information */
.contact-info-section {
    margin: 2rem 0;                    /* ⚙️ SPACING: Distance from other elements (top/bottom) */
    padding: 1.5rem;                   /* ⚙️ SPACING: Internal padding inside the box */
    background: #f8f9fa;               /* 🎨 COLOR: Light gray background of the entire section */
    border-radius: 8px;                /* ⚙️ SHAPE: Rounded corners of the box */
    border-left: 4px solid #007cba;    /* 🎨 COLOR: Blue left border (change #007cba to any color) */
}

/* Main heading \"Контактная информация\" */
.contact-info-section h2 {
    color: #333;                       /* 🎨 COLOR: Dark gray color of main heading */
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space below the main heading */
    font-size: 1.5rem;                 /* 📏 SIZE: Size of main heading text */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of main heading (400=normal, 600=semi-bold, 700=bold) */
}

/* Container for each contact item (phones, emails, address) */
.contact-item {
    margin-bottom: 0.5rem;               /* ⚙️ SPACING: Space between contact sections */
}

/* Address text styling */
.contact-item p {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text */
    margin: 0;                         /* ⚙️ SPACING: Remove default margins */
}

/* Section headings (Адрес, Телефоны, Электронная почта) */
.contact-item h3 {
    color: #ff6600;                    /* 🎨 COLOR: Orange color of section headings (change #ff6600 to any color) */
    font-size: 1.2rem;                 /* 📏 SIZE: Size of section headings */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of section headings */
    margin-bottom: 0.5rem;             /* ⚙️ SPACING: Space below section headings */
    border-bottom: 2px solid #ff6600;  /* 🎨 COLOR: Orange underline under headings (change #ff6600 to match heading color) */
    padding-bottom: 0.25rem;           /* ⚙️ SPACING: Space between heading text and underline */
    display: inline-block;             /* 📐 LAYOUT: Makes the heading only as wide as the text */
}

/* List containers for phones, emails, and social networks */
.phone-list, .email-list, .social-list {
    list-style: none;                  /* 📐 LAYOUT: Removes bullet points from lists */
    padding: 0;                        /* ⚙️ SPACING: Removes default list padding */
    margin: 0;                         /* ⚙️ SPACING: Removes default list margins */
}

/* Individual phone/email/social list items */
.phone-list li, .email-list li, .social-list li {
    padding: 0.5rem 0;                 /* ⚙️ SPACING: Vertical padding for each item */
    border-bottom: 1px solid #e9ecef;  /* 🎨 COLOR: Light gray line between items (change #e9ecef to any color) */
    font-size: 1rem;                   /* 📏 SIZE: Size of all contact information */
}

/* Remove border from last item in lists */
.phone-list li:last-child, .email-list li:last-child, .social-list li:last-child {
    border-bottom: none;               /* 📐 LAYOUT: Removes bottom border from last item */
}

/* Description text for phones, emails, and social networks (the text after \"-\") */
.phone-description, .email-description, .social-description {
    font-weight: normal;                    /* 📏 WEIGHT: Makes descriptions bold (change to 'normal' for regular weight) */
    color: #000;                       /* 🎨 COLOR: Black color for descriptions (change #000 to any color) */
    font-style: normal;                /* 📏 STYLE: Normal font style (not italic) */
    font-size: 1rem;                   /* 📏 SIZE: Size of description text */
}

/* Phone numbers styling (the actual numbers, not descriptions) */
.phone-list li strong {
    font-size: 1rem;  
    font-weight: normal;                    /* 📏 SIZE: Size of phone numbers (same as descriptions) */
}

/* Email links styling */
.contact-item a {
    color: #000;                       /* 🎨 COLOR: Black color for email links (change #000 to any color) */
    text-decoration: none;             /* 📐 LAYOUT: Removes default underline from links */
    font-size: 1rem; 
                 /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email addresses styling (the actual email addresses, not descriptions) */
.email-list li a strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
    color: #034880;  
    font-weight: normal;   
}

/* Social network platform names styling (the actual platform names, not descriptions) */
.social-list li a strong {
    font-size: 1rem;
    color: #034880;     
    font-weight: normal;                /* 📏 SIZE: Size of social network platform names (same as descriptions) */
}

/* Email links on hover (when mouse is over them) */
.contact-item a:hover {
    text-decoration: underline;
}

/* Address text styling (the actual address, not the heading) */
.contact-item p strong {
    font-size: 1rem;
    font-weight: normal;                      /* 📏 SIZE: Size of address text (same as descriptions) */
}

/* ===== QUICK REFERENCE FOR CHANGES ===== */
/*
🎨 COLOR CHANGES:
- Main heading color: .contact-info-section h2 { color: #YOUR_COLOR; }
- Section headings: .contact-item h3 { color: #YOUR_COLOR; }
- Section underlines: .contact-item h3 { border-bottom: 2px solid #YOUR_COLOR; }
- Left border: .contact-info-section { border-left: 4px solid #YOUR_COLOR; }
- Descriptions: .phone-description, .email-description { color: #YOUR_COLOR; }
- Email links: .contact-item a { color: #YOUR_COLOR; }
- Background: .contact-info-section { background: #YOUR_COLOR; }
- Separator lines: .phone-list li, .email-list li { border-bottom: 1px solid #YOUR_COLOR; }

📏 SIZE CHANGES:
- Main heading: .contact-info-section h2 { font-size: YOUR_SIZE; }
- Section headings: .contact-item h3 { font-size: YOUR_SIZE; }
- All text: .phone-list li, .email-list li, .contact-item p, .phone-description, .email-description { font-size: YOUR_SIZE; }

⚙️ SPACING CHANGES:
- Section spacing: .contact-item { margin-bottom: YOUR_SIZE; }
- Item spacing: .phone-list li, .email-list li { padding: YOUR_SIZE; }
- Container padding: .contact-info-section { padding: YOUR_SIZE; }
*/
</style>
    {{ page.content|raw }}
    
    {% if page.header.phones or page.header.address or page.header.emails or page.header.social_networks %}
    <div class=\"contact-info-section\">
        <h2>Контактная информация</h2>
        
        {% if page.header.address %}
        <div class=\"contact-item\">
            <h3>Адрес</h3>
            <p><strong>{{ page.header.address }}</strong></p>
        </div>
        {% endif %}
        
        {% if page.header.phones %}
        <div class=\"contact-item\">
            <h3>Телефоны</h3>
            <ul class=\"phone-list\">
                {% for phone in page.header.phones %}
                <li>
                    <strong>{{ phone.number }}</strong>
                    {% if phone.description %}
                    <span class=\"phone-description\"> - {{ phone.description }}</span>
                    {% endif %}
                </li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        
        {% if page.header.emails %}
        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <ul class=\"email-list\">
                {% for email in page.header.emails %}
                <li>
                    <a href=\"mailto:{{ email.email }}\"><strong>{{ email.email }}</strong></a>
                    {% if email.description %}
                    <span class=\"email-description\"> - {{ email.description }}</span>
                    {% endif %}
                </li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        
        {% if page.header.social_networks %}
        <div class=\"contact-item\">
            <h3>Социальные сети</h3>
            <ul class=\"social-list\">
                {% for social in page.header.social_networks %}
                <li>
                    <a href=\"{{ social.username }}\" target=\"_blank\" rel=\"noopener\">
                        <strong>
                            {% if social.platform == 'telegram' %}Telegram
                            {% elseif social.platform == 'whatsapp' %}WhatsApp
                            {% elseif social.platform == 'vk' %}ВКонтакте
                            {% elseif social.platform == 'instagram' %}Instagram
                            {% elseif social.platform == 'facebook' %}Facebook
                            {% elseif social.platform == 'twitter' %}Twitter/X
                            {% elseif social.platform == 'youtube' %}YouTube
                            {% elseif social.platform == 'linkedin' %}LinkedIn
                            {% else %}{{ social.platform|title }}{% endif %}
                        </strong>
                    </a>
                    {% if social.description %}
                    <span class=\"social-description\"> - {{ social.description }}</span>
                    {% endif %}
                </li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
    </div>
    {% endif %}
    
    {# Yandex Map section - using reliable widget approach #}
    {% if page.header.address %}
    <div class=\"map-section\">
        <h2>Как нас найти</h2>
        <div id=\"yandex-map\" style=\"position:relative;overflow:hidden;width:100%;height:600px;background:#f5f5f5;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;\">
            <div style=\"text-align:center;color:#666;\">
                <div style=\"font-size:48px;margin-bottom:10px;\">🗺️</div>
                <div style=\"font-size:18px;margin-bottom:5px;\"><strong>Загрузка карты...</strong></div>
                <div style=\"font-size:14px;\">{{ page.header.address }}</div>
            </div>
        </div>
        
        <script type=\"text/javascript\">
            // Use coordinates from admin panel for precise map location
            var address = \"{{ page.header.address }}\";
            var coordinates = \"{{ page.header.coordinates }}\";
            var mapContainer = document.getElementById('yandex-map');
            
            // Parse coordinates - format should be \"latitude,longitude\" for Yandex Maps
            var coords = coordinates.split(',');
            var latitude = coords[0].trim();
            var longitude = coords[1].trim();
            
            // Create a working Yandex Maps widget with coordinates from admin panel
            var iframe = document.createElement('iframe');
            iframe.src = 'https://yandex.ru/map-widget/v1/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&source=constructor';
            iframe.width = '100%';
            iframe.height = '600';
            iframe.frameBorder = '0';
            iframe.style.border = '0';
            iframe.allowFullscreen = true;
            
            // Clear loading content and add iframe
            mapContainer.innerHTML = '';
            mapContainer.style.background = 'none';
            mapContainer.style.border = 'none';
            mapContainer.appendChild(iframe);
        </script>
    </div>
    {% endif %}
{% endblock %} ", "contacts.html.twig", "/var/www/gravExpo/user/themes/quark/templates/contacts.html.twig");
    }
}
