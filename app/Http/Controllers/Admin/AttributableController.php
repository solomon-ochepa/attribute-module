<?php

namespace Modules\Attribute\app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Modules\Attribute\app\Models\Attributable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AttributableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Attributable $attributable): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attributable $attributable): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attributable $attributable): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attributable $attributable): RedirectResponse
    {
        //
    }
}
