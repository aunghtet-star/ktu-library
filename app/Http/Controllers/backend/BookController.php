<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Article;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class BookController extends Controller
{
    protected $model;

    protected $rView = 'backend.books.';

    public function __construct(Book $model)
    {
        return $this->model = $model;
    }

    public function index()
    {

        return view($this->rView.'index');
    }

    public function ssd()
    {
        $books = $this->model->query();
        return Datatables::of($books)
            ->addColumn('article_id',function ($each){
                return $each->article->name;
            })
            ->addColumn('link',function ($each){
                return '<textarea>'.$each->link.'</textarea>';
            })
            ->addColumn('picture',function ($each){
                return '<img class="rounded img-size" src="'.$each->picture.'">';
            })
            ->addColumn('action', function ($each) {
                $edit_icon = "";
                $delete_icon = "";

                $edit_icon = '<a href="'.url('/admin/books/'.$each->id.'/edit').'" class="text-warning"><i class="fas fa-user-edit"></i></a>';

                $delete_icon = '<a href="'.url('/admin/books/'.$each->id).'" data-id="'.$each->id.'" class="text-danger" id="delete"><i class="fas fa-trash"></i></a>';

                return '<div class="action-icon">'.$edit_icon . $delete_icon.'</div>';
            })
            ->rawColumns(['action','picture','link'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view($this->rView.'create',compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $link_name = null;
        if($request->hasFile('link')){
            $link_file = $request->file('link');
            $link_name = uniqid().'_'. time().'.'.$link_file->getClientOriginalExtension();
            $link_file->move(public_path('book'), $link_name);
        }

        $this->model->create([
            'name' => $request->name,
            'article_id' => $request->article_id,
            'author' => $request->author,
            'picture' => $request->picture,
            'link' => $link_name,
            'description' => $request->description
        ]);

        return redirect('admin/books')->with('create', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = $this->model::findOrFail($id);
        $articles = Article::all();
        return view($this->rView.'edit',compact('book','articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $this->model->find($id)->update($request->except('proengsoft_jsvalidation'));
        return redirect('admin/books')->with('update', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model::findOrFail($id)->delete();

        return 'success';
    }
}
