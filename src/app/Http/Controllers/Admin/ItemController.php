<?php

namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Requests\StoreitemRequest;
use App\Http\Requests\UpdateitemRequest;
use App\Http\Resources\Admin\itemResource;
use App\Models\item;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new itemResource(item::all());
    }

    public function store(StoreitemRequest $request)
    {
        $item = item::create($request->all());

        return (new itemResource($item))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(item $pasien_rumah_sakit)
    {
        abort_if(Gate::denies('items_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BrangResource($pasien_rumah_sakit);
    }

    public function update(UpdateitemRequest $request, PasienRumahSakit $pasien_rumah_sakit)
    {
        $pasien_rumah_sakit->update($request->all());

        return (new itemResource($pasien_rumah_sakit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(item $item)
    {
        abort_if(Gate::denies('item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $item->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}