<?php

namespace Arins\Bo\Http\Controllers\Bookinterior;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

use Arins\Http\Controllers\WebController;

use Arins\Bo\Http\Controllers\Bookroom\UpdateStatus;
use Arins\Bo\Http\Controllers\Bookroom\ValidateOrder;
use Arins\Bo\Http\Controllers\Bookroom\TransformField;
use Arins\Bo\Http\Controllers\Bookroom\FilterField;
use Arins\Bo\Http\Controllers\Bookroom\ValidationMessage;
use Arins\Bo\Http\Controllers\Bookroom\IndexType;

use Arins\Repositories\Orderstatus\OrderstatusRepositoryInterface;
use Arins\Repositories\Room\RoomRepositoryInterface;
use Arins\Repositories\Roomorder\RoomorderRepositoryInterface;

use Arins\Facades\Response;
use Arins\Facades\Timeline;

class BookinteriorController extends WebController
{
    use UpdateStatus, ValidateOrder;
    use TransformField, FilterField;
    use IndexType;
    //Add custom trait if you want to customize validation error message
    use ValidationMessage;

    protected $dataRoom;
    protected $room_id;

    public function __construct(RoomorderRepositoryInterface $parData,
                                RoomRepositoryInterface $parRoom,
                                OrderstatusRepositoryInterface $parOrderstatus)
    {
        if ($this->sViewName == null)
        {
            $this->sViewName = 'bookinterior';
            $this->room_id = 3; //Interior
        } //end if

        if ($this->gotodetail == null) {
            $this->gotoDetail = 'bookinterior';
        }

        parent::__construct();

        $this->data = $parData;
        $this->dataRoom = $parRoom;
        $this->dataOrderstatus = $parOrderstatus;

        $this->dataModel = [
            'room' => $this->dataRoom->all(),
            'orderstatus' => $this->dataOrderstatus->all()
        ];

    } //end construction
}
