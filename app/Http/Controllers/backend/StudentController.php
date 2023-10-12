<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    protected $model;

    protected $rView = 'backend.students.';

    public function __construct(User $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
        return view($this->rView.'index');
    }

    public function ssd()
    {
        $students = $this->model->query();
        return Datatables::of($students)
            ->addColumn('action', function ($each) {
                $edit_icon = "";
                $delete_icon = "";

                $edit_icon = '<a href="'.url('/admin/students/'.$each->id.'/edit').'" class="text-warning"><i class="fas fa-user-edit"></i></a>';

                $delete_icon = '<a href="'.url('/admin/students/'.$each->id).'" data-id="'.$each->id.'" class="text-danger" id="delete"><i class="fas fa-trash"></i></a>';

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
    public function store(UserRequest $request)
    {
        $this->model->create($request->except('proengsoft_jsvalidation'));
        return redirect('admin/students')->with('create', 'Created Successfully');
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
        $student = $this->model::findOrFail($id);
        return view($this->rView.'edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $this->model->find($id)->update($request->except('proengsoft_jsvalidation'));
        return redirect('admin/students')->with('update', 'Updated Successfully');
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
