<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Feeds;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class FeedsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function store(Request $request)
    {
        $this->storeData("feed", [
            'karyawan_nip'=>$request->nip,
            'title'=>$request->title,
            'desc_feed'=>$request->content,
            'img'=>$request->image
        ]);

        return redirect()->route('feeds.index');
    }

    public function index()
    {
        $feeds = $this->getData('feed')->Feeds;
        $karyawans = $this->getData("karyawan")->karyawan;

        return view('feeds.feeds', [
            'feeds'=>$feeds,
            'karyawans'=>$karyawans
        ]);
    }

    public function show(String $id)
    {
        $feed = $this->getData("feed/$id")->Feeds;
        $karyawan = $this->getData("karyawan/$feed->karyawan_nip")->karyawan;
        $allKaryawan = $this->getData("karyawan")->karyawan;

        return view('feeds.detail', [
            'feed'=>$feed,
            'karyawan'=>$karyawan,
            'allKaryawan'=>$allKaryawan
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->updateData("feed/$id", [
            'karyawan_nip'=>$request->nip,
            'title'=>$request->title,
            'desc_feed'=>$request->content,
            'img'=>$request->image
        ]);

        return redirect()->route('feeds.index');
    }

    public function destroy(string $id)
    {
        $this->deleteData("feed/$id");

        return redirect()->route('feeds.index');
    }
}
