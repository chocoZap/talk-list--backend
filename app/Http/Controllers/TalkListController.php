<?php

namespace App\Http\Controllers;

use App\Models\TalkList;
use App\Services\TalkListService;
use Illuminate\Http\Request;

class TalkListController extends Controller
{
    public function index(TalkListService $instance)
    {
      return TalkListService::index();
    }

    public function store(Request $request)
    {
      TalkList::create($request->all());
      return $this->index();
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
