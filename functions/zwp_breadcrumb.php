<?php
/*
Descripción: Migajas de navegacion (breadcrumb)
Use: 
<ul>
   <?php the_breadcrumb(); ?>
</ul>
*/

function the_breadcrumb() {
   $current = $post->ID;
   $parent = $post->post_parent;
   $grandparent_get = get_post($parent);
   $grandparent = $grandparent_get->post_parent;
   if (!is_home()) {
      echo '<li><a href="';
      echo get_option('home');
      echo '">';
      echo 'Home';
      echo "</a>";
      echo "</a>";
      // Esta es la flechita.
      echo "»";
      //
      echo "</li> ";
      if (is_category() || is_single() || is_archive()) {
         the_category('title_li=');
         if (is_single()) {
            echo " <li> » ";
            the_title();
            echo " </li>";
         }
      } elseif (is_page()) {

         if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {
            echo "<li><a href='";
            echo get_permalink($grandparent_get->post_parent);
            echo "'>";
            echo get_the_title($grandparent);
            echo "</a>";
            //Esta es la flechita.
            echo "»";
            //
            echo "</li>";
         }
         echo '<li>';
         echo the_title();
         echo '</li>';
      }
   } else if ( is_home() ) {
      echo '<li><a href="';
      echo get_option('home');
      echo '">';
      echo 'Home';
      echo "</a></li>";
   };
}
?>