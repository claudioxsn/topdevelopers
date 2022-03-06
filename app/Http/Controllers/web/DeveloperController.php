<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class DeveloperController extends Controller
{

    public function index()
    {
        return view('developers.index');
    }

    public function getDevelopers(Request $request)
    {
        $data = $request->all();
        $developers = collect()->unique();

        for ($i = 0; $i < 5; $i++) {
            foreach (Http::get('https://api.github.com/search/users?q=' .
                'language:' . (isset($data['language']) ? $data['language'] : '') .
                '&location:' . (isset($data['location']) ? $data['location'] : '') .
                '&created:>' . (isset($data['createdAfter']) ? $data['createdAfter'] : '') .
                '&followers:>' . (isset($data['followersMaior']) ? $data['followersMaior'] : '') .
                '&repos:>' . (isset($data['reposMaior']) ? $data['reposMaior'] : '') .
                '&per_page=500&page=' . $i. "'")['items'] as $http) {

                if($http != null){

                $dev = new Developer();
                $dev->id = $http['id'];
                $dev->login = $http['login'];
                $dev->node_id = $http['node_id'];
                $dev->avatar_url = $http['avatar_url'];
                $dev->gravatar_id = $http['gravatar_id'];
                $dev->url = $http['url'];
                $dev->html_url = $http['html_url'];
                $dev->followers_url = $http['followers_url'];
                $dev->following_url = $http['following_url'];
                $dev->gists_url = $http['gists_url'];
                $dev->starred_url = $http['starred_url'];
                $dev->subscriptions_url = $http['subscriptions_url'];
                $dev->organizations_url = $http['organizations_url'];
                $dev->repos_url = $http['repos_url'];
                $dev->events_url = $http['events_url'];

                $developers->push($dev);
                }
            }
        }

        $current_page = LengthAwarePaginator::resolveCurrentPath();
        $count = count($developers) == 0 ? 1 : count($developers);
    // dd($developers);
        $devs = new LengthAwarePaginator($developers->forPage($request->input('page'), 30), $developers->count(), 30, $request->input('page'), []);
      //  dd($devs);
        $devs->setPath('/developers/search');
        $devs->currentPage($request->input('page'));
      //  dd($devs);
        return view('developers.index', compact('devs'));
    }
}