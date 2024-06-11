<?php

namespace Arins\Bo\Http\Controllers\Bookroom;

use Illuminate\Http\Request;
use Auth;
use Arins\Facades\Response;

trait IndexType
{
    //GET Request overrided method
    public function index()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byRoomOrderByIdDesc($this->room_id);
        $this->aResponseData = ['viewModel' => $this->viewModel];

        $this->aResponseData['gotodetail'] = $this->gotoDetail;
        return view($this->sViewRoot.'.index', $this->aResponseData);
    }

    /** get */
    public function indexToday()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byRoomTodayOrderByStartdt($this->room_id);

        $this->aResponseData = ['viewModel' => $this->viewModel];

        for ($i=0; $i < count($this->viewModel->data); $i++) { 
            
            $startdt = $this->viewModel->data[$i]['startdt'];
            $enddt = $this->viewModel->data[$i]['enddt'];
            $todayStartTime = Timeline::todayStartTime($startdt);
            $progressStart = Timeline::progressStart($todayStartTime, $startdt);
            $progressRun = Timeline::progressRun($startdt, $enddt);

            $this->viewModel->data[$i]['progressStart'] = $progressStart;
            $this->viewModel->data[$i]['progressRun'] = $progressRun;

        } //end loop

        $this->aResponseData['gotodetail'] = $this->gotoDetail;
        return view($this->sViewRoot.'.index-today', $this->aResponseData);
    }

    /** get */
    public function indexOpen()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byRoomStatusOpenOrderByIdAndStartdtDesc($this->room_id);
        $this->aResponseData = ['viewModel' => $this->viewModel];


        $this->aResponseData['gotodetail'] = $this->gotoDetail;
        return view($this->sViewRoot.'.index-open', $this->aResponseData);
    }

    /** get */
    public function indexCancel()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byRoomStatusCancelOrderByIdAndStartdtDesc($this->room_id);
        $this->aResponseData = ['viewModel' => $this->viewModel];


        $this->aResponseData['gotodetail'] = $this->gotoDetail;
        return view($this->sViewRoot.'.index-cancel', $this->aResponseData);
    }

}

