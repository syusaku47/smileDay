<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;
use App\Models\User;

//CSV用
use Goodby\CSV\Import\Standard\LexerConfig;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;

class UserController extends Controller
{

    public function index()
    {
        return "index";
    }

    // public function store(Request $request)
    // {
    //     $user = new User();

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $user->save();

    //     $result = $user;
    //     return $this->resConversionJson($result);
    //     return redirect()->action('HomeController@index');
    // }


    public function store(Request $request)
    {
        $a = "------------------------------------------";

        try {
            // CSV ファイル保存
            //mt_rand乱数生成                                      アップロードした拡張子取得
            $tmpName = mt_rand() . "." . $request->file('csv')->guessExtension(); //TMPファイル名

            $request->file('csv')->move(public_path() . "/csv/tmp", $tmpName);
            $tmpPath = public_path() . "/csv/tmp/" . $tmpName;

            //Goodby CSVのconfig設定
            $config = new LexerConfig();
            $interpreter = new Interpreter();
            $lexer = new Lexer($config);

            //CharsetをUTF-8に変換、CSVのヘッダー行を無視
            $config->setToCharset("UTF-8");
            $config->setFromCharset("sjis-win");
            $config->setIgnoreHeaderLine(true);

            $dataList = [];

            // 新規Observerとして、$dataList配列に値を代入
            $interpreter->addObserver(function (array $row) use (&$dataList) {
                // 文字化け防止
                mb_convert_variables('SJIS-win', 'UTF-8', $row);
                // 各列のデータを取得
                $dataList[] = $row;
                \Log::info($row);
            });

            // CSVデータをパース
            $lexer->parse($tmpPath, $interpreter);

            // TMPファイル削除
            unlink($tmpPath);

            // 登録処理
            $count = 0;
            foreach ($dataList as $row) {
                User::insert([
                    'name' => $row[0],
                    'email' => $row[1],
                    'password' => $row[2]
                ]);
                $count++;
            }
            $result = [
                'result'   => true,
                'response' => $dataList,
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
        return redirect()->route('admin.homes.index');
    }

    private function resConversionJson($result, $statusCode = 200)
    {
        if (empty($statusCode) || $statusCode < 100 || $statusCode >= 600) {
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
