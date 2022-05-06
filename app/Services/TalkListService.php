<?php

namespace App\Services;

use App\Models\TalkList;
use App\Models\Review;
use Log;

class TalkListService {
    public static function index()
    {
        // トークリストの取得
        $talkLists = TalkList::select('id', 'content')->orderBy('id', 'desc')->get();
        // レビュー用の配列を追加
        foreach($talkLists as $talkList)
        {
            $talkList['reviews'] = array();
        }
        // レビューの取得
        $reviews = Review::select('id', 'talkList_id', 'stars', 'comment', 'created_at')->get();
        // トークリストIDごとにグルーピング
        $grouped = $reviews->groupBy('talkList_id');
        // トークリストの取得結果にレビューの配列を追加する
        foreach($grouped as $key => $val)
        {
            $keyIndex = array_search($key, array_column($talkLists->toArray(), 'id'));
            $talkLists[$keyIndex]['reviews'] = $val;
        }
        return $talkLists;
    }
}
