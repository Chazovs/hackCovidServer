<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;

class XMLAPIController extends AppBaseController
{
    /**
     * @SWG\Post(
     *      path="/handler/xml",
     *      summary="Обрабатывает и загружает XML файлы, написанные согласно формату  HackCovid",
     *      tags={"Отправить XML"},
     *      description="Обрабатывает и загружает XML файлы, написанные согласно формату  HackCovid",
     *      produces={"multipart/form-data"},
     * 		@SWG\Parameter(
     * 			name="body",
     * 			in="body",
     * 			required=true,
     * 			@SWG\Schema(
     *      @SWG\Property(
     *          property="secret",
     *          description="secret",
     *          type="string"
     *      ),
     *      @SWG\Property(
     *          property="link",
     *          description="link",
     *          type="string"
     *      ),
     * ),
     *		),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *
     *      )
     * )
     */

    public function getXML(){
        return 'мы обработали ваш файл... наверное...';
    }
}
