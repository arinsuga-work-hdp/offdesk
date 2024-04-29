<?php

namespace Arins\Bo\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

use Arins\Http\Controllers\WebController;

use Arins\Bo\Http\Controllers\Bookroom\UpdateStatus;
use Arins\Bo\Http\Controllers\Bookroom\TransformField;
use Arins\Bo\Http\Controllers\Bookroom\FilterField;
use Arins\Bo\Http\Controllers\Bookroom\ValidateOrder;
use Arins\Bo\Http\Controllers\Bookroom\ValidationMessage;

use Arins\Repositories\Orderstatus\OrderstatusRepositoryInterface;
use Arins\Repositories\Room\RoomRepositoryInterface;
use Arins\Repositories\Roomorder\RoomorderRepositoryInterface;

use Arins\Facades\Response;
use Arins\Facades\Timeline;

class ContactController extends WebController
{
    use UpdateStatus, ValidateOrder;
    use TransformField, FilterField;
    //Add custom trait if you want to customize validation error message
    use ValidationMessage;

    protected $dataRoom;
    protected $room_id;

    public function __construct(RoomorderRepositoryInterface $parData)
    {
        if ($this->sViewName == null)
        {
            $this->sViewName = 'contact';
        } //end if

        parent::__construct();

        $this->middleware('check.role:adbook-admin,adbook-viewer');

        $this->data = $parData;

        $this->dataModel = [
        ];

    } //end construction


}
