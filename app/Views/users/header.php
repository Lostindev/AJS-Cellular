<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <title><?php echo $title ?></title>

    <!--Local Files-->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/<?php echo $page?>.css">

    <!-- Bootstrap 4 load from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>




<body>
<header>
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
