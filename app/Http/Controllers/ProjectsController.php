<?php

namespace App\Http\Controllers;

use App\Models\Projects;
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
    public function create(Request $request)
    {
        $Projects = Projects::with('tasks')->create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'New Data created',
            'data' => [
                'Projects' => $Projects
            ]
        ]);
    }

    public function getAll()
    {
        $Projects = Projects::with('tasks')->get();
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

    public function getid($id_proj)
    {
        $Projects = Projects::with('tasks')->find($id_proj);

        if (!$Projects) {
            return response()->json([
                'success' => false,
                'message' => 'storage not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'Projects' => $Projects
            ]
        ]);
    }

    public function update(Request $request, $id_proj)
    {
        $Projects = Projects::with('tasks')->find($id_proj);

        if (!$Projects) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found',
                'data' => null
            ], 404);
        }

        $Projects->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data updated',
            'data' => [
                'Projects' => $Projects
            ]
        ]);
    }

    public function delete(Request $request)
    {
        $Projects = Projects::find($request->id_proj);

        if (!$Projects) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found',
            ], 404);
        }

        $Projects->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data deleted successfully',
        ]);
    }
}
