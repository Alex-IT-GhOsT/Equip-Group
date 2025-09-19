<?php

namespace App\Http\Controllers;

use App\Contracts\ServicesInterface\GroupServiceInterface;
use App\Models\Group;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function __construct(
        private readonly GroupServiceInterface $service
    ){}
    public function index()
    {
        $groups = $this->service->getGroupWithChildrenCount();


        return view('groups.index', ['groups' => $groups]);
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
