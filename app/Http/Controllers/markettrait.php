<?php

namespace App\Http\Controllers;

trait markettrait
{

    public function bill($data = null, $mess = null, $status = null)
    {
        $arry = [
            'status' => $status,
            'message' => $mess,
            'data' => $data,

        ];
        return response()->json($arry, $status);
    }
}
