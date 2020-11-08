<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <title><?php echo $title ?></title>

    <!--Local Files-->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/<?php echo $page ?>.css">
    

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
        "name": "Books",
        "item": "https://example.com/books"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Science Fiction",
        "item": "https://example.com/books/sciencefiction"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Award Winners"
      }]
    },
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Literature",
        "item": "https://example.com/literature"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Award Winners"
      }]
    }]
    </script> -->


</head>

<body>
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

                <a href="<?php echo base_url('/contact') ?>" class="nav-btn">
                    <li>Contact</li>
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


    <!--
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <ul>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href=" <?php echo base_url('/home') ?> ">Home</a></li>
            <li class="menu-item hidden"><a href="<?php echo base_url('/store') ?>">Store</a></li>
            <li class="menu-item hidden"><a href="<? echo site_url('/repairs') ?>">Repairs</a></li>
            <li class="menu-item hidden"><a href="<? echo site_url('') ?>">Services</a></li>
            <li class="menu-item hidden"><a href="<? echo site_url('') ?>">Location</a></li>
            <li class="menu-item hidden"><a href="<? echo site_url('') ?>">Contact</a></li>
        </ul>
    </nav>
</header>

-->