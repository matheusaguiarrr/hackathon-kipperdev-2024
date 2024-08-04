<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


/*
<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Services\CategoryServices;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{

    public function __construct(protected CategoryServices $categoryServices) {
    }

    public function index(): JsonResponse
    {
        $data = $this->categoryServices->list();

        return response()->json($data);
    }

    public function store(CategoryStoreRequest $request): JsonResponse
    {
        $data = $this->categoryServices->create($request);

        return response()->json($data, 201);
    }

    public function update(CategoryUpdateRequest $request, string $id): JsonResponse
    {
        $data = $this->categoryServices->update($request, $id);

        return response()->json($data);
    }

    public function show(string $id): JsonResponse
    {
        $data = $this->categoryServices->findById($id);

        return response()->json($data);
    }

    public function destroy(string $id)
    {
        $this->categoryServices->delete($id);

        return response()->json(null, 204);
    }

}
*/
