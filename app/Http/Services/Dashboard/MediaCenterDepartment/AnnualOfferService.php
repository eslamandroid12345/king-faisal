<?php

namespace App\Http\Services\Dashboard\MediaCenterDepartment;

use App\Http\Requests\Dashboard\AnnualOffer\AnnualOfferStoreRequest;
use App\Http\Requests\Dashboard\AnnualOffer\AnnualOfferUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\AnnualOfferRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class AnnualOfferService
{

    public function __construct(
        private readonly  AnnualOfferRepositoryInterface $annualOfferRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }


    public function index(){

        $annual_offers = $this->annualOfferRepository->get('type','annual_offer');
        return view('dashboard.annual_offers.index',compact('annual_offers'));
    }


    public function create(){

        return view('dashboard.annual_offers.create');
    }

    public function store(AnnualOfferStoreRequest $request)
    {

        try {
            $inputs = $request->only('image_url','type','pdf_url','published_date');

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/annual_offers");
                $inputs['image_url'] = $image;

            }

            if($request->hasFile('pdf_url')){

                $pdf = $this->fileManagerService->handle("pdf_url","media_center_departments/pdf");
                $inputs['pdf_url'] = $pdf;

            }
            $new = $this->annualOfferRepository->create($inputs);
            $this->annualOfferRepository->multipleLanguages($new,$request,['title','description']);

            return redirect()->route('annual_offers.index')->with(['success' => __('dashboard.create')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $annual_offer = $this->annualOfferRepository->getById($id);

        return view('dashboard.annual_offers.edit',compact('annual_offer'));
    }


    public function update(AnnualOfferUpdateRequest $request,$id)
    {


        try {

            $annual_offer = $this->annualOfferRepository->getById($id);

            $inputs = $request->only('image_url','pdf_url', 'published_year');

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/annual_offers",$annual_offer->image_url);
                $inputs['image_url'] = $image;

            }

            if($request->hasFile('pdf_url')){

                $pdf = $this->fileManagerService->handle("pdf_url","media_center_departments/pdf",$annual_offer->pdf_url);
                $inputs['pdf_url'] = $pdf;
            }

            $this->annualOfferRepository->update($annual_offer->id,$inputs);
            $this->annualOfferRepository->multipleLanguages($annual_offer,$request,['title','description']);

            return redirect()->route('annual_offers.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }

    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->annualOfferRepository->delete($id);
            return redirect()->route('annual_offers.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
