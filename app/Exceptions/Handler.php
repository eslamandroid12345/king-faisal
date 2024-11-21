<?php

namespace App\Exceptions;

use App\Http\Traits\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Illuminate\Validation\ValidationException;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{

    use Response;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {

//        if ($exception instanceof ModelNotFoundException) {
//            return response()->view('admin.errors.404', [], 404);
//        }

        // Handle NotFoundHttpException (route not found)
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('admin.errors.404', [], 404);
        }

        return parent::render($request, $exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->expectsJson()) {
                return $this->responseFail(status: $e->getStatusCode(), message: __('user.data_not_found'));
            }
        });
    }


    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors = $e->validator->errors()->all();

        if($this->isFrontend($request))
        {
            return $request->ajax() ? response()->json($errors , 422) : redirect()->back()->withInput($request->input())->withErrors($errors);
        }
        return $this->responseFail(status: 422,message: 'Validation error', data: $errors);
    }


    private function isFrontend($request)
    {
        return $request->acceptsHtml() && collect($request->route()->middleware())->contains('web');
    }
}
