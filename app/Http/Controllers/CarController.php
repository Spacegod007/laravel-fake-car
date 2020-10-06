<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($userId)
    {
        $cars = Car::all();
        return view("cars.index", ["userId" => $userId, "car" => $cars]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create($userId)
    {
        return view("cars.create", ["userId" => $userId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($userId, Request $request)
    {
//        $brand = $request->get("brand");
//        $type = $request->get("type");
//        Car::create(["brand" => $brand, "type" => $type, "user_id" => $userId]);

        Car::create($request->all());

        return redirect()->route("users.show", $userId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($userId, $id)
    {
        $car = Car::findOrFail($id);
        return view("cars.show", ["userId" => $userId, "car" => $car]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($userId, $id)
    {
        $car = Car::findOrFail($id);
        return view("cars.edit", ["userId" => $userId, "car" => $car]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($userId, Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return redirect()->route("cars.show", [$userId, $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($userId, $id)
    {
        Car::findOrFail($id)->delete();
        return redirect()->route("users.show", $userId);
    }

    public function getOwner($id)
    {
        $car = Car::findOrFail($id);
        return $car->owner;
    }
}
