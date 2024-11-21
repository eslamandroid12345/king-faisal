<?php

namespace App\Http\Services\Dashboard\FaisalHomePage;

use App\Http\Requests\StoreFaisalHomePageDocumentRequest;
use App\Http\Requests\UpdateFaisalHomePageDocumentRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\FaisalHomePageDocumentRepositoryInterface;

class FaisalHomePageDocumentService
{

    public function __construct(
        private readonly FaisalHomePageDocumentRepositoryInterface $faisalHomePageDocumentRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $documents = $this->faisalHomePageDocumentRepository->get('type','document');
        return view('admin.faisal_home_pages.documents.index',compact('documents'));
    }


    public function create(){

        return view('admin.faisal_home_pages.documents.create');
    }

    public function store(StoreFaisalHomePageDocumentRequest $request)
    {

        $inputs = $request->only('image','type');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/document_images");
            $inputs['image'] = $image;

        }

         $document =  $this->faisalHomePageDocumentRepository->create($inputs);
         $this->faisalHomePageDocumentRepository->multipleLanguages($document,$request,['description']);

        toastr()->success(__('dashboard.store'));

        return redirect()->route('documents.index');
    }


    public function edit($id)
    {
        $document = $this->faisalHomePageDocumentRepository->getById($id);

        return view('admin.faisal_home_pages.documents.edit',compact('document'));
    }


    public function update($id,UpdateFaisalHomePageDocumentRequest $request)
    {
        $document = $this->faisalHomePageDocumentRepository->getById($id);

        $inputs = $request->only('image');

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","faisal_home_pages/document_images",$document->image);
            $inputs['image'] = $image;

        }

        $this->faisalHomePageDocumentRepository->update($document->id,$inputs);

        $this->faisalHomePageDocumentRepository->multipleLanguages($document,$request,['description']);

        toastr()->success(__('dashboard.update'));

        return redirect()->route('documents.index');
    }


    public function delete($id)
    {
        $document = $this->faisalHomePageDocumentRepository->getById($id);
        $this->faisalHomePageDocumentRepository->delete($document->id);
        toastr()->error(__('dashboard.delete'));

        return redirect()->route('documents.index');
    }



}
