<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Role extends Model
{
    use HasFactory;

    public static $roles = [
        "2" => "Administration",
        "3" => "Centres",
        "4" => "Mariage",
        "5" => "Décès",
        "6" => "Certificat De",
        "7" => "Rapports",
        "8" => "Tableau de Bord"
    ];

    public static function transform( $given_roles) {
        $result = [];
        array_walk(self::$roles, function ( $value, $key) use ($given_roles, &$result) {
            $result[ $key] = in_array( $key, $given_roles) ? "selected" : "";
        }, $result);
        return $result;
    }
}
