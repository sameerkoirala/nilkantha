<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Department;
use App\Models\Member;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function PHPUnit\Framework\isNull;

class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['display','displayMember']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $members = Member::where('first_name', 'LIKE', "%$keyword%")
                ->orWhere('middle_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('designation', 'LIKE', "%$keyword%")
                ->orWhere('education', 'LIKE', "%$keyword%")
                ->orWhere('department', 'LIKE', "%$keyword%")
                ->latest()->simplePaginate($perPage);
        } else {
            $members = Member::latest()->simplePaginate($perPage);
        }
        return view('members.index', compact('members',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $departments = Department::pluck('name','id');

        return view('members.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();
        if ($request->hasFile('image_path')) {
            $requestData['image_path'] = 'storage/' . $request->file('image_path')
                ->store('uploads', 'public');
        }

        Member::create($requestData);

        return redirect('members')->with('flash_message', 'Member added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);

        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        $departments = Department::pluck('name','id');
        $selectedID = $member->department_id;
        return view('members.edit', compact('member','departments', 'selectedID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
        $member = Member::findOrFail($id);


        if ($request->hasFile('image_path')) {
            $requestData['image_path'] = 'storage/' . $request->file('image_path')
                ->store('uploads', 'public');
            $oldImagePath = $member->image_path;
            $oldImagePath = str_replace("storage/",storage_path('') . '/app/public/' , $oldImagePath);
        }



        $member->update($requestData);

        if (isset($oldImagePath)) {
            if(File::exists($oldImagePath)){
                File::delete($oldImagePath);
            }
        }

        return redirect('members')->with('flash_message', 'Member updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $faculty = Member::findOrFail($id);
        $oldImagePath = '';

        if ($faculty) {
            $oldImagePath = $faculty->image_path;
        }

        Member::destroy($id);

        if ($oldImagePath){
            $oldImagePath = str_replace("storage/",storage_path('') . '/app/public/' , $oldImagePath);
        }

        if(File::exists($oldImagePath)){
            File::delete($oldImagePath);
        }

        return redirect('members')->with('flash_message', 'Member deleted!');
    }

    public function display($type) {
        $perPage = 10;
        $recentPosts = $this->getRecentPosts('about_us');
        $posts = [$recentPosts[0]->id];
        switch ($type){
            case 'departments':
                $type = 'departments';
                $departments = Department::select('id','name')->simplePaginate($perPage);
                $members = [];
                return view('display.members', compact('members','recentPosts', 'posts', 'departments',  'departments', 'type'));
            case 'managements':
                $keyword = 'management';
                $type = 'managements';
                $perPage = 9;
                break;
            case 'others':
                $keyword = 'other';
                $type = 'others';
                break;
            default:
                $keyword = '';
                abort(404);
        }

        $members = Member::where('type', "$keyword")
            ->latest()->simplePaginate($perPage);

        return view('display.members', compact('members', 'recentPosts', 'posts', 'type'));
    }

    public function getRecentPosts($type)
    {
        $keyword = $type;
        return Post::where('category', "$keyword")->get();
    }

    public function displayMember($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }
}
