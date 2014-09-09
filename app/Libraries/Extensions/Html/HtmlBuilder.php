<?php

namespace Libraries\Extensions\Html;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{
  /**
   * HTML Table
   *
   * @return void
   *
   * TODO: Add possibility for classes
   */

    public function table($array)
    {
      if (is_array($array) == 1)
      {
        $out = "";
        // add table header
        $head = array_keys($array[key($array)]);
        if( !is_int($head[0]) )
        {
          $out .= "<thead><tr>";
          foreach( $head as $h )
          {
            $out .= '<th>'.ucfirst(strtolower($h)).'</th>';
          }
          $out .= "</tr></thead>";
        }

        // add table body
        $out .= "<tbody>";

        foreach($array as $row)
        {
          $out .= '<tr>';
          foreach( $row as $value )
          {
            $out .= '<td>'.$value.'</td>';
          }
          $out .= '</tr>';
        }

        return "<table>\n".$out."</tbody>\n</table>\n";
      }
      // argument $array is not an array
      else
      {
        return;
      }
    }
}
