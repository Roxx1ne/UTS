<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreitemRequest;
use App\Http\Requests\UpdateitemRequest;
use App\Http\Resources\Admin\itemResource;
use App\Models\item;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class itemApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pasien_rumah_sakit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new itemResource(item::all());
    }

    public function store(StoreitemRequest $request)
    {
        $pasien_rumah_sakit = item::create($request->all());

        return (new itemResource($pasien_rumah_sakit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(item $pasien_rumah_sakit)
    {
        abort_if(Gate::denies('pasien_rumah_sakit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new itemResource($pasien_rumah_sakit);
    }

    public function update(UpdateitemRequest $request, item $pasien_rumah_sakit)
    {
        $pasien_rumah_sakit->update($request->all());

        return (new itemResource($pasien_rumah_sakit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(item $pasien_rumah_sakit)
    {
        abort_if(Gate::denies('pasien_rumah_sakit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pasien_rumah_sakit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}