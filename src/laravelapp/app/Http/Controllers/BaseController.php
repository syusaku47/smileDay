<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;
use App\Models\Content;
use App\Http\Requests\StoreBase;

class BaseController extends Controller
{

    public function index()
    {
        return "テストでーす";
    }
    public function create()
    {
        return view('bases.create');
    }

    // public function store(StoreBase $request)
    public function store(StoreBase $request)
    {
        // return "POSTテスト";
        try {
            $base = new Base();
            $base->fill($request->all());
            $base->save();

            $content = new Content();
            $content->save();

            $result = [
                'result'      => true,
                'base' => $base,
                'conten' => $content,
            ];
        } catch (\Exception $e) {
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);

        return redirect()->route('bases.create');
    }

    private function resConversionJson($result, $statusCode = 200)
    {
        if (empty($statusCode) || $statusCode < 100 || $statusCode >= 600) {
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
