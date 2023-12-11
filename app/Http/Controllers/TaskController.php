<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //
    public function create($id)
    {
        $karyawans = $this->getData("karyawan")->karyawan;
        return view('tasks.create', [
            'karyawans'=>$karyawans,
            'page'=>$id
        ]);
    }

    public function store(Request $request, $id)
    {
        $this->storeData('task', [
            'id_project'=>$id,
            'karyawan_nip'=>$request->karyawan_nip,
            'nama_task'=>$request->nama,
            'desc_task'=>$request->desc,
            'status_task'=>'incomplete'
        ]);

        return redirect()->route('projects.show', $id); 
    }

    public function edit($id_project, $id_task)
    {
        $karyawans = $this->getData("karyawan")->karyawan;
        $task = $this->getData("task/$id_task")->tasks;
        
        return view('tasks.edit', [
            'karyawans'=>$karyawans,
            'task'=>$task
        ]);
    }

    public function update(Request $request, $id_project, $id_task)
    {
        $status = 'completed';
        
        if (!isset($request->status) || $request->status == 'incomplete') {
            $status = 'incomplete';
        }

        $this->updateData("task/$id_task", [
            'karyawan_nip'=>$request->karyawan_nip,
            'nama_task'=>$request->nama_task,
            'desc_task'=>$request->desc_task,
            'status_task'=>$status
        ]);

        return redirect()->route('projects.show',$id_project);
    }

    public function destroy($id_project, $id_task)
    {
        $this->deleteData("task/$id_task");
        return redirect()->route('projects.show', $id_project);
    }
}
