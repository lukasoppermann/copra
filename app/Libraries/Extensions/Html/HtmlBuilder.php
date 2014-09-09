<?php

namespace Libraries\Extensions\Html;

class HtmlBuilder extends \Illuminate\Html\HtmlBuilder
{
  /**
   * HTML Table
   *
   * @return void
   */
    public function table($array)
    {
      return "<table>\n"._array_to_table($array,"")."</table>\n";
    }
}


function _array_to_table($array, $out)
{
  if (is_array($array) == 1)
  {
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

    return $out.'</tbody>';
  }
  // argument $array is not an array
  else
  {
    return;
  }
}
