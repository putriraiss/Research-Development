<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class ProjectsController extends Controller
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
        $this->storeData('project', [
            'tasks_RND_id_task'=>$request->task_id,
            'nama_proj'=>$request->nama,
            'desc_proj'=>$request->desc,
        ]);

        return redirect()->route('projects.show', 1);   
    }
    public function create()
    {
        $tasks = $this->getData('task')->tasks;
        return view('project.create', [
            'tasks'=>$tasks
        ]);
    }

    public function getAll()
    {
        $Projects = Project::with('tasks')->get();
        if (!$Projects) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found',
                'data' => null
            ], 404);
        }

        return response()->json(
            [
                'success' => true,
                'message' => 'All Data grabbed',
                'data' => [
                    'Projects' => $Projects
                ]
            ]
        );
    }

    public function show(string $id)
    {
        $projects = $this->getData('project')->Projects;
        $projectDetail = $this->getData("project/$id")->Projects;
        $idKaryawan = $projectDetail->tasks->karyawan_nip;
        $karyawan = $this->getData("karyawan/$idKaryawan")->karyawan
        ;

        return view('project.project', [
            'projects'=>$projects,
            'projectDetail'=>$projectDetail,
            'karyawan'=>$karyawan,
        ]);
    }

    public function edit(string $id) {
        $project = $this->getData("project/$id")->Projects;
        $tasks = $this->getData('task')->tasks;
        return view('project.edit', [
            'project'=>$project,
            'tasks'=>$tasks
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->updateData("project/$id", [
            'tasks_RND_id_task'=>$request->task_id,
            'nama_proj'=>$request->nama,
            'desc_proj'=>$request->desc,
        ]);
        return redirect()->route('projects.show',1);
    }

    public function destroy(string $id)
    {
        $this->deleteData("project/$id");
        return redirect()->route('projects.show', 1);
    }
}