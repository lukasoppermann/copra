<?php namespace Services;

use Config;
use Request;

/**
 * Navigation
 */
class NavigationViewService
{
  public function build( $nav, $parent = "", $result = "" )
  {
    foreach ($nav as $item)
    {
      $item = $item['content'][Config::get('app.locale')];

      $result .= '<li class="'.
        ( trim($item['link'], '/') == (Request::path() != "/" ? Request::path() : 'home') ? ' is-active js-is-active' : '').
        ( strpos(Request::path(), trim($item['link'], '/')) !== false ? ' is-active js-is-active' : '').
        '">

        <a rel="dns-prefetch" data-id="'.$item['id'].'" href="'.url($item['link']).'">
            '.$item['menu_label'].'
        </a>';

        // loop through children if they exist
        if ( isset($item['children']) && is_array($item['children']) ){
          $result .= $this->build($item['children'], $item);
        }


      $result .= '</li>';
    }
    if($result != "")
    {
      return "<ul>".$result."</ul>";
    }
  }

}
