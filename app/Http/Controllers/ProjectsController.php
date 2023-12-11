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

        $projects = $this->getData('project')->Projects;
        $projectId = $projects[count($projects)-1]->id;

        return redirect()->route('projects.show', $projectId);   
    }
    public function create()
    {
        $tasks = $this->getData('task')->tasks;
        return view('project.create', [
            'tasks'=>$tasks
        ]);
    }

    public function index()
    {
        $projects = $this->getData('project')->Projects;
        $allTask = $this->getData('task')->tasks;

        $relationalTasks = [];

        foreach ($projects as $project) {
            $projectTask = [];
            foreach ($allTask as $task) {
                if ($task->id_project == $project->id) {
                    array_push($projectTask, $task);
                }
            }
            array_push($relationalTasks, $projectTask);
        }
        
        $projects['tasks'] = $relationalTasks;

        $projectStatuses = [];
        $projectKaryawansId = [];
        foreach ($projects['tasks'] as $project) {
            $status = true;
            $karyawansId = [];
            foreach ($project as $task) {
                if ($task->status_task != 'completed' && $status) {
                    $status = false;
                }
                array_push($karyawansId, $task->karyawan_nip);
            }
            if (count($project) == 0) {
                $status = false;
            }
            array_push($projectStatuses, $status);
            array_push($projectKaryawansId, array_unique($karyawansId));
        }

        $projects['status'] = $projectStatuses;
        
        $projectKaryawans = [];
        foreach ($projectKaryawansId as $project) {
            $karyawans = [];
            foreach ($project as $karyawanId) {
                array_push($karyawans, $this->getData("karyawan/$karyawanId")->karyawan);
            }
            array_push($projectKaryawans, $karyawans);
        }

        $projects['karyawan'] = $projectKaryawans;

        return view('project.project', [
            'projects'=>$projects,
            'index' => 0,
        ]);
    }

    public function show(string $id)
    {
        $projects = $this->getData('project')->Projects;
        $allTask = $this->getData('task')->tasks;

        $relationalTasks = [];
        $index = 0;

        for ($i=0; $i < count($projects); $i++) { 
            if ($projects[$i]->id == $id) {
                $index = $i;
            }
            
            $projectTask = [];
            foreach ($allTask as $task) {
                if ($task->id_project == $projects[$i]->id) {
                    array_push($projectTask, $task);
                }
            }
            array_push($relationalTasks, $projectTask);
        }
        
        $projects['tasks'] = $relationalTasks;

        $projectStatuses = [];
        $projectKaryawansId = [];
        foreach ($projects['tasks'] as $project) {
            $status = true;
            $karyawansId = [];
            foreach ($project as $task) {
                if ($task->status_task != 'completed' && $status) {
                    $status = false;
                }
                array_push($karyawansId, $task->karyawan_nip);
            }
            if (count($project) == 0) {
                $status = false;
            }
            array_push($projectStatuses, $status);
            array_push($projectKaryawansId, array_unique($karyawansId));
        }

        $projects['status'] = $projectStatuses;
        
        $projectKaryawans = [];
        foreach ($projectKaryawansId as $project) {
            $karyawans = [];
            foreach ($project as $karyawanId) {
                array_push($karyawans, $this->getData("karyawan/$karyawanId")->karyawan);
            }
            array_push($projectKaryawans, $karyawans);
        }

        $projects['karyawan'] = $projectKaryawans;

        return view('project.project', [
            'projects'=>$projects,
            'index' => $index,
        ]);
    }

    public function edit(string $id) {
        $project = $this->getData("project/$id")->Projects;
        return view('project.edit', [
            'project'=>$project,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->updateData("project/$id", [
            'nama_proj'=>$request->nama,
            'desc_proj'=>$request->desc,
        ]);

        return redirect()->route('projects.show',$id);
    }

    public function destroy(string $id)
    {
        $this->deleteData("project/$id");
        return redirect()->route('projects.index');
    }
}
