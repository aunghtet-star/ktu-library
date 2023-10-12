<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $model;

    protected $rView = 'backend.articles.';

    public function __construct(Article $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        return view($this->rView.'index');
    }

    public function ssd()
    {
        $articles = $this->model->query();
        return Datatables::of($articles)
            ->addColumn('action', function ($each) {
                $edit_icon = "";
                $delete_icon = "";

                $edit_icon = '<a href="'.url('/admin/articles/'.$each->id.'/edit').'" class="text-warning"><i class="fas fa-user-edit"></i></a>';

                $delete_icon = '<a href="'.url('/admin/articles/'.$each->id).'" data-id="'.$each->id.'" class="text-danger" id="delete"><i class="fas fa-trash"></i></a>';

                return '<div class="action-icon">'.$edit_icon . $delete_icon.'</div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->rView.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $this->model->create($request->except('proengsoft_jsvalidation'));
        return redirect('admin/articles')->with('create', 'Created Successfully');
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
        $article = $this->model::findOrFail($id);
        return view($this->rView.'edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $this->model->find($id)->update($request->except('proengsoft_jsvalidation'));
        return redirect('admin/articles')->with('update', 'Updated Successfully');
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
