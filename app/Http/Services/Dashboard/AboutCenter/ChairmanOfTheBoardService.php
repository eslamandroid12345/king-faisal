<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\ChairmanOfTheBoard\ChairmanOfTheBoardStoreRequest;
use App\Http\Requests\Dashboard\ChairmanOfTheBoard\ChairmanOfTheBoardUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\ChairmanOfTheBoardRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class ChairmanOfTheBoardService
{
    public function __construct(
        private readonly  ChairmanOfTheBoardRepositoryInterface $chairmanOfTheBoardRepository,
        private readonly FileManagerService                     $fileManagerService
    )
    {
    }


    public function index(){

        $chairman_of_the_boards = $this->chairmanOfTheBoardRepository->paginate();
        return view('dashboard.about_center.chairman_of_the_board.index',compact('chairman_of_the_boards'));
    }


    public function create(){

        return view('dashboard.about_center.chairman_of_the_board.create');
    }

    public function store(ChairmanOfTheBoardStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('background_image');

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","about_center/chairman_of_the_board/images");
                $inputs['background_image'] = $image;

            }
            $chairman_of_the_board = $this->chairmanOfTheBoardRepository->create($inputs);
            $this->chairmanOfTheBoardRepository->multipleLanguages($chairman_of_the_board,$request,['title','description']);
            return redirect()->route('chairman_of_the_boards.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $chairman_of_the_board = $this->chairmanOfTheBoardRepository->getById($id);

        return view('dashboard.about_center.chairman_of_the_board.edit',compact('chairman_of_the_board'));
    }


    public function update(ChairmanOfTheBoardUpdateRequest $request,$id): RedirectResponse
    {

        try {
            $chairman_of_the_board = $this->chairmanOfTheBoardRepository->getById($id);

            $inputs = $request->only('background_image');

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","about_center/chairman_of_the_board/images",$chairman_of_the_board->background_image);
                $inputs['background_image'] = $image;

            }

            $this->chairmanOfTheBoardRepository->update($chairman_of_the_board->id,$inputs);
            $this->chairmanOfTheBoardRepository->multipleLanguages($chairman_of_the_board,$request,['title','description']);

            return redirect()->route('chairman_of_the_boards.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {
        try {
            $this->chairmanOfTheBoardRepository->delete($id);
            return redirect()->route('chairman_of_the_boards.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }

}
