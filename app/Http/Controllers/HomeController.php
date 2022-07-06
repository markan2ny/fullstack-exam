<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function crud()
    {
        $students = DB::table('students')->get();
        return view('crud', compact('students'));
    }

    public function insert(Request $request)
    {
        $data = [
            'name' => $request->name,
            'contact' => $request->contact,
            'region' => $request->region,
            'section' => $request->section,
            'course' => $request->course,
        ];

        DB::table('students')->insert($data);

        return response()->json(['status' => 'success']);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        DB::table('students')->where('id', $id)->delete();

        return response()->json(['status' => 'success']);
    }

    public function get(Request $request)
    {
        $id = $request->id;
        $data = DB::table('students')->where('id', $id)->get();

        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {

        $id = $request->h_id;

        $data = [
            'name' => $request->name_1,
            'contact' => $request->contact_1,
            'region' => $request->region_1,
            'course' => $request->course_1,
            'section' => $request->section_1,
        ];

        DB::table('students')->where('id', $id)->update($data);

        return response()->json(['status' => 'success']);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
