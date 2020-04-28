<?php

namespace App\Http\Actions;

use App\DB\DB;
use App\DB\Repositories\StudentRepository;
use App\Http\Requests\StudentInfoRequest;
use App\Http\Response\Factory\ResponseFactory;

class GetStudentInfoAction
{
    /**
     * @return mixed
     */
    public static function initAction()
    {
        $request = new StudentInfoRequest();
        $requestError = $request->getError();
        if ($requestError) {
            return ResponseFactory::createResponse('JSON', $requestError)->response();
        };

        $studentRepository = new StudentRepository(new DB());
        $studentInfo = $studentRepository->getStudentInfoForCsmAndCsmbById($request->get('student'));
        return ResponseFactory::createResponse($studentInfo['format'], $studentInfo)->response();
    }
}