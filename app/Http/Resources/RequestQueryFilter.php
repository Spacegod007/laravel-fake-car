<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;

class RequestQueryFilter
{
    public function attach($resource, Request $request = null)
    {
        $request = $request ?? request();

        return tap($resource, function ($resource) use($request) {
            $this->getRequestIncludes($request)->each(function ($include) use ($resource) {
                $resource->load($include);
            });
        });
    }

    protected function getRequestIncludes(Request $request)
    {
        return collect(data_get($request->input(), "include", []));
    }
}
