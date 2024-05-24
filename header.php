<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>

  <!-- Primary Meta Tags -->
  <meta name="title" content="" />
  <meta name="description" content="" />

  <meta property="og:type" content="website" />
  <meta property="og:url" content="{url_site}" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/img/banner.webp" />

  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="{url_site}" />
  <meta property="twitter:title" content="" />
  <meta property="twitter:description" content="" />
  <meta property="twitter:image" content="<?= get_template_directory_uri(); ?>/assets/img/banner.webp" />

  <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.webp">
  <link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.webp">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="msapplication-config" content="browserconfig.xml">

  <link rel="preload" href="<?= get_template_directory_uri(); ?>/assets/css/main.min.css" as="style" onload="this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.min.css">
  </noscript>
  <script>
    /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */ ! function(a) {
      "use strict";
      var b = function(b, c, d) {
        function j(a) {
          if (e.body) return a();
          setTimeout(function() {
            j(a)
          })
        }

        function l() {
          f.addEventListener && f.removeEventListener("load", l), f.media = d || "all"
        }
        var g, e = a.document,
          f = e.createElement("link");
        if (c) g = c;
        else {
          var h = (e.body || e.getElementsByTagName("head")[0]).childNodes;
          g = h[h.length - 1]
        }
        var i = e.styleSheets;
        f.rel = "stylesheet", f.href = b, f.media = "only x", j(function() {
          g.parentNode.insertBefore(f, c ? g : g.nextSibling)
        });
        var k = function(a) {
          for (var b = f.href, c = i.length; c--;)
            if (i[c].href === b) return a();
          setTimeout(function() {
            k(a)
          })
        };
        return f.addEventListener && f.addEventListener("load", l), f.onloadcssdefined = k, k(l), f
      };
      "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
    }("undefined" != typeof global ? global : this);
    /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
    ! function(a) {
      if (a.loadCSS) {
        var b = loadCSS.relpreload = {};
        if (b.support = function() {
            try {
              return a.document.createElement("link").relList.supports("preload")
            } catch (a) {
              return !1
            }
          }, b.poly = function() {
            for (var b = a.document.getElementsByTagName("link"), c = 0; c < b.length; c++) {
              var d = b[c];
              "preload" === d.rel && "style" === d.getAttribute("as") && (a.loadCSS(d.href, d, d.getAttribute("media")), d.rel = null)
            }
          }, !b.support()) {
          b.poly();
          var c = a.setInterval(b.poly, 300);
          a.addEventListener && a.addEventListener("load", function() {
            b.poly(), a.clearInterval(c)
          }), a.attachEvent && a.attachEvent("onload", function() {
            a.clearInterval(c)
          })
        }
      }
    }(this);
  </script>

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container mx-auto">
      <div class="logo">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
      </div>
      <nav>
        <ul>
          <li class="dropdown">
            <a class="text-sm" href="">Institucional <span></span></a>
            <div class="box-dropdown">
            </div>
          </li>
          <li class="dropdown ">
            <a class="text-sm" href="">Cursos <span></span></a>
            <div class="box-dropdown">

            </div>
          </li>

          <li class="dropdown">
            <a class="text-sm" href="">Eventos <span></span></a>
            <div class="box-dropdown">
            </div>
          </li>

          <li class="dropdown">
            <a class="text-sm" href="">Radar</a>
          </li>

          <li class="dropdown">
            <a class="text-sm" href="">Contato</a>
          </li>
        </ul>
      </nav>

    </div>

  </header>