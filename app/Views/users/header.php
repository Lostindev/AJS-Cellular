<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <title><?php echo $title ?></title>

    <!--Local CSS-->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/<?php echo $page ?>.css">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TRZF4R4');
    </script>
    <!-- End Google Tag Manager -->

    <!--Local Javascript-->
    <script src="/js/servicePageFunctions.js" defer></script>


    <!-- Bootstrap 4 load from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5bf0da290c.js"></script>

    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">


    <!--    
    <script type="application/ld+json">
    [{
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Store",
        "item": "https://example.com/books"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Repairs",
        "item": "https://example.com/books/sciencefiction"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Services"
      }]
    }
    </script> -->


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fbfcb85920fc91564cafc85/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRZF4R4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <nav class="navbar justify-content-center">
            <span class="nav-toggle" id="js-nav-toggle">
                <i class="fas fa-bars"></i>
            </span>

            <ul id="js-menu">
                <a href="<?php echo base_url('/') ?>" class="nav-btn">
                    <li>Home</li>
                </a>

                <a href="<?php echo base_url('/store') ?>" class="nav-btn">
                    <li>Store</li>
                </a>

                <a href="<?php echo base_url('/repairs') ?>" class="nav-btn">
                    <li>Repairs</li>
                </a>

                <a href="<?php echo base_url('/services') ?>" class="nav-btn">
                    <li>Services</li>
                </a>

                <a href="<?php echo base_url('/location') ?>" class="nav-btn">
                    <li>Location</li>
                </a>
            </ul>
        </nav>
    </header>

    <section id="logo-section" name="logo-section">
        <div class="container text-center justify-content-center">
            <div>
                <img src="/img/logo-horizontal.png" alt="AJs Logo" class="img-fluid logo ">
            </div>
        </div>
    </section>