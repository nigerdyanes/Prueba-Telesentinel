<?php

namespace App\Http\Controllers;

use App\Datos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatosController extends Controller
{

    public function getCountByMonths()
    {
        $data = DB::table('getCountByMonths')
                ->selectRaw('*')
                ->get();

        $dataParsed = parser_data_db($data);

        return response()->json($dataParsed);

    }

    public function getCountByStatus()
    {
        $data = DB::table('datos')
                ->selectRaw('estado_contacto as "estado", count(estado_contacto) as "total"')
                ->whereRaw('estado_contacto <> "5/3/2021 16:49"')
                ->groupBy('estado_contacto')
                ->get();

        return response()->json($data);
    }


    public function getCountStatusByMonths()
    {
        $data = DB::table('getCountStatusByMonths')
                ->selectRaw('*')
                ->get();

        $dataParsed = parser_data_db($data);

        return response()->json($dataParsed);
    }

    public function insertTxtData()
    {   $path =storage_path('app/datos_new.txt');
        $data = fopen($path,'r');
        while (!feof($data)){
            $getTextLine = fgets($data);
            $explodeLine = explode("	",$getTextLine);
            list($id,$razon_social,$fecha_contacto,$fecha_gestion,$estado_contacto, $tipo_contacto,$en_cotiza,$fecha_cotiza,$en_venta,$fecha_venta) = $explodeLine;
            DB::insert('insert into datos (id, razon_social,fecha_contacto,fecha_gestion,estado_contacto,tipo_contacto,en_cotiza,fecha_cotiza,en_venta,fecha_venta) values (?, ?, ?, ?, ?, ?, ?, ?, ?,?)',
            [$id, $razon_social,$fecha_contacto,$fecha_gestion,$estado_contacto,$tipo_contacto,$en_cotiza,$fecha_cotiza,$en_venta,$fecha_venta]);
        }
        fclose($data);
    }

}
