<?php

namespace App\Http\Services\Dashboard\Antique;

use App\Http\Requests\AntiqueStoreRequest;
use App\Http\Requests\AntiqueUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\AntiqueImageRepositoryInterface;
use App\Repository\AntiqueRepositoryInterface;

class AntiqueService
{

    public function __construct(
       private readonly  AntiqueRepositoryInterface $antiqueRepository,
       private readonly  AntiqueImageRepositoryInterface $antiqueImageRepository,
       private readonly  FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $antiques = $this->antiqueRepository->paginate();
        return view('admin.antiques.index',compact('antiques'));
    }


    public function create(){

        return view('admin.antiques.create');
    }

    public function store(AntiqueStoreRequest $request)
    {

        $inputs = $request->only('price');

        $antique = $this->antiqueRepository->create($inputs);
        $this->antiqueRepository->multipleLanguages($antique,$request,['name','period','material','origin','category','description']);


        if ($request->hasFile('images'))
        {
            foreach ($request->images as $index => $image)
            {
                $newImage = $this->fileManagerService->handle("images.$index", "antiques/images");
                $this->antiqueImageRepository->create(['image' => $newImage, 'antique_id' => $antique->id]);
            }
        }
        toastr()->success(__('dashboard.store'));

        return redirect()->route('antiques.index');
    }


    public function edit($id)
    {
        $antique = $this->antiqueRepository->getById($id);

        return view('admin.antiques.edit',compact('antique'));
    }


    public function update(AntiqueUpdateRequest $request,$id)
    {

        $antique = $this->antiqueRepository->getById($id);
        $inputs = $request->only('price');

        $this->antiqueRepository->update($antique->id,$inputs);
        $this->antiqueRepository->multipleLanguages($antique,$request,['name','period','material','origin','category','description']);

        $this->updateImages($request, $antique);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('antiques.index');
    }


    protected function deleteExistingImages($antique): void
    {
        foreach ($antique->images as $image)
        {
            $this->fileManagerService->deleteFile($image->image);
            $image->delete();
        }
    }

    protected function updateImages(AntiqueUpdateRequest $request, $antique): void
    {
        if ($request->hasFile('images'))
        {
            $this->deleteExistingImages($antique);
                foreach ($request->images as $index => $image)
                {
                    $newImage = $this->fileManagerService->handle("images.$index", "antiques/images");
                    $this->antiqueImageRepository->create(['image' => $newImage, 'antique_id' => $antique->id]);

                }

        }
    }

    protected function deleteImageAndRecord($image): void
    {
        $this->fileManagerService->deleteFile($image->image);
        $this->antiqueImageRepository->delete($image->id);
    }

    protected function deleteAntiqueImages($antique): void
    {
        foreach ($antique->images as $image)
        {
            $this->deleteImageAndRecord($image);
        }
    }

    public function delete($id)
    {
        $antique = $this->antiqueRepository->getById($id);
        $this->deleteAntiqueImages($antique);
        $this->antiqueRepository->delete($antique->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('antiques.index');
    }


}
