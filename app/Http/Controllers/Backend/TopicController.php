<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTopicRequest;
use App\Http\Requests\EditTopicRequest;
use App\Models\Topic;
use Illuminate\Http\Request;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Builder;

class TopicController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTopic()
    {
        $data['topicList'] = Topic::paginate(10);
        return view('backend/topic/topic', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddTopic(AddTopicRequest $request){
        $topic = new Topic();
        $topic->topic_name = $request->topic_name;
        $topic->description = $request->description;
        $topic->status = $request->status;
        //$topic->topic_slug = Str::slug($request->cateName);
        $topic->save();
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditTopic($id)
    {
        $data['topic'] = Topic::where('id', $id)->first();
        //dd($data);
        //return view('backend/topic/edit', $data);
        return View::make('backend/topic/edit')->with(['topic'=>$data['topic']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditTopic(EditTopicRequest $request , $id)
    {
        $topic = Topic::where('id', $id)->first();
        $topic->topic_name = $request->topic_name;
        $topic->description = $request->description;
        $topic->status = $request->status;
        $topic->save();
        return redirect()->intended('admin/topic');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteTopic($id){
        Topic::destroy($id);
        return back();
    }

//    public function getSearchTopic(Request $request){
//        $key = $request->search;
//        $data['topicList'] = Topic::where('id', 'like', $key)->orWhere('topic_name', 'like', $key)->get();
//        return  $data;
//    }

}
