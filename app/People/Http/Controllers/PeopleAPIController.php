<?php

namespace App\People\Http\Controllers;

use App\Http\Controllers\Controller;
use App\People\Http\Requests\PeopleStoreRequest;
use App\People\Http\Requests\PeopleUpdateRequest;
use App\People\Models\PeopleRepositoryInterface;
use App\Base\Services\ValidateCepService;
use App\Base\Services\ValidateCpfService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PeopleAPIController extends Controller
{
    /**
     * @var PeopleRepositoryInterface
     */
    private $peopleRepository;

    /**
     * @var ValidateCepService
     */
    private $validadeCepService;

    /**
     * @var ValidateCpfService
     */
    private $validadeCpfService;

    public function __construct(
        PeopleRepositoryInterface $peopleRepository,
        ValidateCepService $validadeCepService,
        ValidateCpfService $validadeCpfService
    ) {
        $this->peopleRepository = $peopleRepository;
        $this->validadeCepService = $validadeCepService;
        $this->validadeCpfService = $validadeCpfService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = $this->peopleRepository->all();
        if ($peoples) {
            return response()->json($peoples, Response::HTTP_OK);
        }
        return response()->json($peoples, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PeopleStoreRequest $request)
    {
        $cpf = $this->validadeCpfService->validateCpf($request->cpf);
        $cep = $this->validadeCepService->validateCep($request->cep);
        if ($cep && $cpf) {
            $people = $this->peopleRepository->create($request->all());
            if ($people) {
                return response()->json($people, Response::HTTP_OK);
            }
            return response()->json($people, Response::HTTP_BAD_REQUEST);
        }
        return response()->json('cep ou cpf invalido', Response::HTTP_OK);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $people = $this->peopleRepository->find($id);
        if ($people) {
            return response()->json($people, Response::HTTP_OK);
        }
        return response()->json($people, Response::HTTP_BAD_REQUEST);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleUpdateRequest $request, $id)
    {
        $cpf = $this->validadeCpfService->validateCpf($request->cpf);
        $cep = $this->validadeCepService->validateCep($request->cep);
        if ($cep && $cpf) {
            $people = $this->peopleRepository->update($request->all(), $id);
            if ($people) {
                return response()->json($people, Response::HTTP_OK);
            }
            return response()->json($people, Response::HTTP_BAD_REQUEST);
        }
        return response()->json('cep ou cpf invalido', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->peopleRepository->delete($id);
    }
}
