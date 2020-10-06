<?php

namespace App\Http\Controllers;

use App\Services\CarService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    private $service;

    public function __construct(CarService $service)
    {
        $this->service = $service;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create($userId)
    {
        return view("cars.create", ["userId" => $userId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store($userId, Request $request)
    {
        $this->service->create($request->only(["brand", "type", "user_id"]));
        return redirect()->route("users.show", $userId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function show($userId, $id)
    {
        $car = $this->service->get($id);
        return view("cars.show", ["userId" => $userId, "car" => $car]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit($userId, $id)
    {
        $car = $this->service->get($id);
        return view("cars.edit", ["userId" => $userId, "car" => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update($userId, Request $request, $id)
    {
        $this->service->update($id, $request->only(["brand", "type", "user_id"]));

        return redirect()->route("cars.show", [$userId, $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($userId, $id)
    {
        $this->service->delete($id);
        return redirect()->route("users.show", $userId);
    }
}
