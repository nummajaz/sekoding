<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        
        // insert biasa 
        // $blog = new Blog;
        // $blog->title = 'Andai gunung bisa berkata';
        // $blog->description = 'gunung bukan makhluk hidup jadi tidak bisa berkata' ;
        // $blog->save();

        // insert mass assignment
        // Blog::create([
        //     'title' => 'Hikayat sang Pendobrak',
        //     'description' => 'Rerumputan yg selalu layu menunggunya'
        // ]);
        // dd($blogs);

        // update
        // $blog = Blog::where('title', 'halo bosque')->first();
        // // dd($blog);
        // $blog->title = 'halo karyawan';
        // $blog->save();

        // update mas assigment
        // Blog::find(9)->update([
        //     'title' => 'Tertutupnya gerbang kesembilan',
        //     'description' => 'Dikala siang lalu tertutuplah gerbang yang mengantarkan beberapa orang yang tersesat'

        // ]);

        // delete
        // $blog = Blog::find(10);
        // $blog->delete();

        $blogs = Blog::all();
        $paginate = Blog::where('id', '>', 1)->paginate(5);
        return view('blog/home', ['blogs'=> $blogs, 'paginate' => $paginate]);
    }
    public function show($id){
        $id = (int) $id;
        $sahur = 5 + $id;
        $nilai = ' ini adalah nilai yang harus dimasukkan '.$sahur;
        // $cache = Cache();
        // $data = $cache->tags(['comic'])->key('user_id:3')->forever(function(){
        //     return $query->get();
        // });
        // $users = ['maman', 'wirasan', 'komang'];

        // insert
        // DB::table('users')->insert([ ['username'=> 'sisri', 'password'=>'buyam123'] ]);

        // update
        // DB::table('users')
        //     ->where('id', 1)
        //     ->update(['username'=>'mira']);

        // delete
        // DB::table('users')->where('password', 'buyam123')->delete();


        // $users = DB::table('users')->get();
        $blog = Blog::find($id);
        if(!$blog){
            abort(404);
        }
        // dd($blog);
        return view('blog/single', ['blog' => $blog]);
    }

    public function create()
    {


      return view('blog/create');
      
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'title' =>  'required | min:5',
            'description'   =>  'required | min:5 | max:10'
        ]);
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return redirect('/blog');

    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        // dd($blog);
        if(!$blog){
            abort(404);
        }
        return view('blog/edit', ['blog'=>$blog]);
    }
 
    public function update(Request $request, $id)
    {
        // dd($request);
        $blog = Blog::find($id);
        $blog->title        = $request->title;
        $blog->description  = $request->description;
        $blog->save();

        return redirect('blog/'. $id);
    }

    public function destroy($id)
    {
        // dd($request);
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('blog');
    }
}
