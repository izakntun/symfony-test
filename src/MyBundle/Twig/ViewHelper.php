<?php namespace MyBundle\Twig;

class ViewHelper extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'generateTable' => new \Twig_Function_Method($this, 'generateTable')
        );
    }

    public function generateTable($columns, $rows)
    {
        $table = "<table class='table'>";
        for ($i = 0; $i <= $rows; $i++)
        {
            $table .= "<tr>";
            for ($i = 0; $i <= $columns; $i++)
            {
                $table .= "<td>Columna $i </td>";
            }
            $table .= "</tr>";
        }
        $table .= "</table>";
        return $table;
    }

    public function getName()
    {
        return 'my_bundle';
    }
}