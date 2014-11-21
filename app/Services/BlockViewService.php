<?php namespace Services;

use Config;
use \Michelf\MarkdownExtra;

class BlockViewService {
  // default content
  public function fromBlock( $el, $lvl = 0 )
  {
    $out = '<div class="'.(!isset($el['class']) ?: $el['class']).'">';
    // media
    if( isset($el['media']) )
    {
      // file_exists(asset(Config::get('app.media').'/'.$el['src']))
      foreach( $el['media'] as $m )
      {
        // get extension
        $ext = trim(strrchr($m['src'], '.'),'.');
        // check for image
        if( in_array($ext, Config::get('app.media.images')) )
        {
          $out .= '<div class="block-content-image">
            <img class="'.(!isset($m['class']) ?: $m['class']).'" src="'.asset(Config::get('app.dirs.media').'/'.$m['src']).'"
              alt="'.(isset($m['description']) ? $m['description'] : $m['src']).'" />
          </div>';
        }
      }
    }

    // markdown content
    if( isset($el['content']) )
    {
      $out .= '<div class="block-content-copy">'.shiftHeaders(MarkdownExtra::defaultTransform($el['content']),$lvl).'</div>';
    }

    return $out.'</div>';
  }

  /**
   * build view from array
   *
   * @method array
   *
   * @param  [type] $el
   *
   * @return [type]
   */
  function fromArray( $el )
  {
    $out = '<div class="'.variable($el['class']).'">';

    if( !isset($mode) || $mode == 'default' )
    {
      if( array_merge($el['content']) !== $el['content'] || !is_numeric(implode(array_keys($el['content']))) )
      {
        foreach($el['content'] as $term => $def)
        {
          $out .='<div class="def-item item-'.strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '',str_replace(' ','',$term))).'"><span class="def-term">'.$term.'</span><div class="def-content js-searchable-entry item-content-'.strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '',str_replace(' ','',$term))).'">'.MarkdownExtra::defaultTransform($def).'</div></div>';
        }
      }
      else
      {
        foreach($el['content'] as $def)
        {
          $out .='<div class="item"><span class="visual"></span>'.MarkdownExtra::defaultTransform($def).'</div>';
        }
      }
    }
    // table
    elseif( $mode == 'table' )
    {
      $out .= HTML::table($el['content']);
    }

    return $out.'</div>';
  }

  /**
   * [fromStream description]
   *
   * @method fromStream
   *
   * @param  [type]     $el
   */
  function fromStream( $el )
  {
    if( isset($el['stream']) )
    {
      // get posts
      $stream = \Api::stream($el['stream'])->get(['language' => Config::get('app.locale'), 'limit' => 100]);
      if( $stream['success'] === true )
      {
        // build view
        //
        $out = '<div class="'.($el['class'] ?:'').'">';

        $out .= "<div class='searchable-optionsGroup'>";
        // add search
        if( isset($el['variables']) && isset($el['variables']['search']) && $el['variables']['search'] == "true" )
        {
          $out .= '<input class="js-searchable-searchBox searchable-searchBox" placeholder="Suche">';
        }
        // add count
        if( isset($el['variables']) && isset($el['variables']['itemCount']) && $el['variables']['itemCount'] == "true" )
        {
          $out .= "<div class='stream-itemCount js-searchable-itemCount'>".count($stream['data'])." Ergebnisse</div>";
        }
        $out .= "</div>";


        if( !isset($el['mode']) || $el['mode'] == 'default' )
        {
          foreach($stream['data'] as $p)
          {
            $p = $p['content'][Config::get('app.locale')];
            $text = null;

            foreach( $p['data'] as $content )
            {
              foreach( $content['content'] as $c )
              {
                if($c['type'] == 'default'){
                  $text = "NOT DONE ".shiftHeaders(MarkdownExtra::defaultTransform($c['content']),2);
                  break;
                }
              }
            }

            $out.= "<div class='post'>".$text."</div>";
          }
        }
        elseif( $el['mode'] == 'preview' )
        {
          foreach($stream['data'] as $p)
          {

            $p = $p['content'][Config::get('app.locale')];
            $text = null;

            foreach( $p['data'] as $content )
            {
              foreach( $content['content'] as $c )
              {
                if($c['type'] == 'block'){
                  $text = shiftHeaders(MarkdownExtra::defaultTransform($c['content']),2);
                  break;
                }
              }
            }

            $out.= "<div class='post-preview'>".$text."</div>";
          }
        }
        // cards
        elseif( $el['mode'] == 'card' )
        {
          foreach($stream['data'] as $card)
          {
            $card = $card['content'][Config::get('app.locale')];
            $sides = array_values(array_slice($card['data'],0,2));

            $out .= '<div class="card column-4">';
              $sideClass = 'card-front';
              foreach( $sides as $side)
              {
                $content = "";
                foreach( $side['content'] as $item )
                {
                  $method = 'from'.Ucfirst($item['type']);
                  if( method_exists( $this, $method ) )
                  {
                    $content .= $this->$method($item);
                  }
                }
                $out .= \View::make('partials.'.$sideClass)->with('content', $content);

                $sideClass = 'card-back';
              }
              $out .= '</div>';
            }
          }

          if( isset($el['variables']) && isset($el['variables']['emptyState']) && $el['variables']['emptyState'] !== "false" )
          {
            $out .= "<div class='stream-emptyState js-emptyState'>".$el['variables']['emptyState']."</div>";
          }

          return $out.'</div>';
        }
      }
    }

}
