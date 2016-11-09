<?php
// Bootstrap pagination function
function wp_bs_pagination($pages = '', $range = 4)
{
 $showitems = ($range * 2) + 1;
 global $paged;
 if(empty($paged)) $paged = 1;
 if($pages == '')
 {
   global $wp_query;
   $pages = $wp_query->max_num_pages;
   if(!$pages)
   {
     $pages = 1;
   }
 }
 if(1 != $pages)
 {
  echo '<div class="text-center">';
 echo '<nav><ul class="pagination">';
  if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='Primeiro'>&laquo;<span class='hidden-xs'> Primeira</span></a></li>";
  if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."' aria-label='Anterior'>&lsaquo;<span class='hidden-xs'> Anterior</span></a></li>";

  for ($i=1; $i <= $pages; $i++)
  {
   if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
   {
     echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>
     </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
   }
 }
 if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Próximo'><span class='hidden-xs'>Próximo </span>&rsaquo;</a></li>";
 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Última </span>&raquo;</a></li>";
 echo "</ul></nav>";
 echo "</div>";
}

}