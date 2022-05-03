<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'main';


    if ($page === 'main') {
      echo '<link rel="stylesheet" href="css/index.css" />';
  } else if ($page === 'about-us') {
      echo '<link rel="stylesheet" href="css/aboutus.css" />';
      echo '<link rel="stylesheet" href="css/index.css" />';
  } else if ($page === 'services') {
      echo '<link rel="stylesheet" href="css/services.css" />';
      echo '<link rel="stylesheet" href="css/index.css" />';
  } else if ($page === 'service') {
      echo '<link rel="stylesheet" href="css/services.css" />';
      echo '<link rel="stylesheet" href="css/index.css" />';
  } else if ($page === 'works') {
      echo '<link rel="stylesheet" href="css/works.css" />';
  } else if ($page === 'work') {
      echo '<link rel="stylesheet" href="css/works.css" />';
  } else if ($page === 'blog') {
      echo '<link rel="stylesheet" href="css/blog.css" />';
  } else if ($page === 'blog-inner') {
      echo '<link rel="stylesheet" href="css/blog.css" />';
  } else if ($page === 'contact') {
      echo '<link rel="stylesheet" href="css/contact.css" />';
  }
  
  ?>