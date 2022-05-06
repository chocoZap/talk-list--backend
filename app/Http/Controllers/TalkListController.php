<?php

namespace App\Http\Controllers;

use App\Models\TalkList;
use App\Services\TalkListService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TalkListController extends Controller
{
    public static function index(TalkListService $instance)
    {
      return TalkListService::index();
    }

    public function store(Request $request, Response $response)
    {
        TalkList::create($request->all());
        return $response->status();
    }

    public function show(TalkList $TalkList)
    {
      return $TalkList;
    }

    public function update(Request $request, TalkList $TalkList)
    {
      $TalkList->update($request->all());

      return $TalkList;
    }

    public function destroy(TalkList $TalkList)
    {
        $TalkList->delete();

        return $TalkList;
    }
}
