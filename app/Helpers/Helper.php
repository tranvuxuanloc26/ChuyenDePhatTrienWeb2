<?php
namespace App\Helpers;

use Illuminate\Support\Str;


class Helper
{
    public static function menu($menus, $parent_id = 0, $char = ''){
        $html = '';

        foreach($menus as $key => $menu){
            if($menu->parent_id == $parent_id){
                $html .= '
                    <tr>
                        <td style="width: 50px; padding-left: 15px;">' . $menu->id . '</td>
                        <td>' . $char . $menu->name . '</td>
                        <td>' . self::active($menu->active) . '</td>
                        <td>' . $menu->updated_at . '</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="#" onClick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char .'|--');
            }
        }
        return $html;
    }

    public static function active($active = 0) : string{
        return $active == 0 ? '<span class="badge badge-danger btn-xs"> NO </span>' : '<span class="badge badge-success btn-xs"> YES </span>';
    }
    
    
    
}