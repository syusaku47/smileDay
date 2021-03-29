<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;
use App\Models\Content;

use App\Models\ContentList;

class ContentListController extends Controller
{
    public function index()
    {
        $content = Content::find(1);
        $childContents = $content->contentLists()->where('type_id', 1)->get();
        // dd($childContents);

        return view('admin.bases.contents.contentLists.index', [
            'childContents' => $childContents
        ]);
    }
}
