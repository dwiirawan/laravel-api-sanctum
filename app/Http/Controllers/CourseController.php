<?php
namespace App\Http\Controllers;

use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        return response()->json($this->courseService->getAllCourses());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id'
        ]);

        return response()->json($this->courseService->createCourse($data));
    }

    public function show($id)
    {
        return response()->json($this->courseService->getCourseById($id));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id'
        ]);

        return response()->json($this->courseService->updateCourse($id, $data));
    }

    public function destroy($id)
    {
        return response()->json(['deleted' => $this->courseService->deleteCourse($id)]);
    }
}

