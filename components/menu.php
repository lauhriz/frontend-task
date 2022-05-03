<?php

function generateLink($linkTo, $linkTitle)
{
  $link = '<a class="nav-link px-0';

  if (isset($_GET['page']) && str_starts_with($_GET['page'], $linkTo) || str_starts_with($linkTo, $_GET['page'])) {
    $link .= ' active';
  }
  $link .= '" href="?page=' . $linkTo . '">' . $linkTitle . '</a>';

  return $link;
}
?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid g-0">
        <a class="navbar-brand" href="?page=main">
            <img src="img/clemo.png" alt="." class="clemo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item pe-3">
                <?= generateLink('about-us', 'about us'); ?>
                    <!-- <a class="nav-link px-0" aria-current="page" href="?page=about-us">about us</a> -->
                </li>
                <li class="nav-item pe-3">
                <?= generateLink('services', 'services'); ?>
                    <!-- <a class="nav-link px-0" href="?page=services">services</a> -->
                </li>
                <li class="nav-item pe-3">
                <?= generateLink('works', 'works'); ?>
                    <!-- <a class="nav-link px-0" href="?page=works">works</a> -->
                </li>
                <li class="nav-item pe-3">
                <?= generateLink('blog', 'blog'); ?>
                    <!-- <a class="nav-link px-0" href="?page=blog">blog</a> -->
                </li>
                <li class="nav-item pe-3 pe-md-0">
                <?= generateLink('contact', 'contact'); ?>
                    <!-- <a class="nav-link px-0" href="?page=contact">contact</a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>