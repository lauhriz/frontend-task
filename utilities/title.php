<?php isset($_GET['page']) ? $_GET['page'] : 'main';;


    if ($page === 'main') {
      $title = 'clemo.';
  } else if ($page === 'about-us') {
      $title = 'about us.';
  } else if ($page === 'services') {
      $title = 'services.';
  } else if ($page === 'works') {
      $title = 'works.';
  } else if ($page === 'blog') {
      $title = 'blog.';
  } else if ($page === 'contact') {
      $title = 'contact us.';
  } else if ($page === 'service') {
      $title = 'service.';
  } else if ($page === 'work') {
      $title = 'work.';
  } else if ($page === 'blog-inner') {
      $title = 'our blog.';
  }

  

  echo isset($title) ? $title : "clemo.";
  
  ?>