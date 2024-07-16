<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 5%;">Status</th>
            <th style="width: 5%;">Tanggal</th>
            <th style="width: 5%;">Mulai</th>
            <th style="width: 5%;">Selesai</th>
            <th style="width: 10%;">Nama Pemesan</th>
            <th style="width: 15%;">Subject</th>
            <th style="width: 20%;">Keterangan</th>
            <th style="width: 30%;">Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr>
                <td>
                    <nav class="navbar navbar-expand" style="padding: 0rem !important;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a style="padding: 0 1rem 0 1rem !important;" class="nav-link" href="{{ route($gotodetail . '.show', [$gotodetail => $item->id]) }}">
                                    <i class="fas fa-sm fa-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a onclick="event.preventDefault(); print('{{ route($gotodetail . '.print', [$gotodetail => $item->id]) }}');" style="padding: 0 !important;" class="nav-link">
                                    <i class="fas fa-sm fa-print"></i>
                                </a>
                            </li>
                        </ul>

                    </nav>
                </td>
                <td>{{ $item->orderStatus->name }}</td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::date($item->meetingdt) }}</div>
                </td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::time($item->startdt) }}</div>
                </td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::time($item->enddt) }}</div>
                </td>
                <td>
                    <div>{{ $item->name }}</div>
                </td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->subject)) !!}</div>
                </td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->description)) !!}</div>
                </td>
                <td>
                    <div>{{ isset($item->enduser) ? $item->enduser->resolution : null }}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>