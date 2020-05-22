<?php

namespace App\Http\Controllers;

use App\DataTables\RegKeyDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRegKeyRequest;
use App\Http\Requests\UpdateRegKeyRequest;
use App\Repositories\RegKeyRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RegKeyController extends AppBaseController
{
    /** @var  RegKeyRepository */
    private $regKeyRepository;

    public function __construct(RegKeyRepository $regKeyRepo)
    {
        $this->regKeyRepository = $regKeyRepo;
    }

    /**
     * Display a listing of the RegKey.
     *
     * @param RegKeyDataTable $regKeyDataTable
     * @return Response
     */
    public function index(RegKeyDataTable $regKeyDataTable)
    {
        return $regKeyDataTable->render('reg_keys.index');
    }

    /**
     * Show the form for creating a new RegKey.
     *
     * @return Response
     */
    public function create()
    {
        return view('reg_keys.create');
    }

    /**
     * Store a newly created RegKey in storage.
     *
     * @param CreateRegKeyRequest $request
     *
     * @return Response
     */
    public function store(CreateRegKeyRequest $request)
    {
        $input = $request->all();

        $regKey = $this->regKeyRepository->create($input);

        Flash::success('Reg Key saved successfully.');

        return redirect(route('regKeys.index'));
    }

    /**
     * Display the specified RegKey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regKey = $this->regKeyRepository->find($id);

        if (empty($regKey)) {
            Flash::error('Reg Key not found');

            return redirect(route('regKeys.index'));
        }

        return view('reg_keys.show')->with('regKey', $regKey);
    }

    /**
     * Show the form for editing the specified RegKey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regKey = $this->regKeyRepository->find($id);

        if (empty($regKey)) {
            Flash::error('Reg Key not found');

            return redirect(route('regKeys.index'));
        }

        return view('reg_keys.edit')->with('regKey', $regKey);
    }

    /**
     * Update the specified RegKey in storage.
     *
     * @param  int              $id
     * @param UpdateRegKeyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegKeyRequest $request)
    {
        $regKey = $this->regKeyRepository->find($id);

        if (empty($regKey)) {
            Flash::error('Reg Key not found');

            return redirect(route('regKeys.index'));
        }

        $regKey = $this->regKeyRepository->update($request->all(), $id);

        Flash::success('Reg Key updated successfully.');

        return redirect(route('regKeys.index'));
    }

    /**
     * Remove the specified RegKey from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regKey = $this->regKeyRepository->find($id);

        if (empty($regKey)) {
            Flash::error('Reg Key not found');

            return redirect(route('regKeys.index'));
        }

        $this->regKeyRepository->delete($id);

        Flash::success('Reg Key deleted successfully.');

        return redirect(route('regKeys.index'));
    }
}
