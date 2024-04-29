<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 5%;">NIK</th>
            <th style="width: 5%;">No.Absen</th>
            <th style="width: 35%;">Nama</th>
            <th style="width: 15%;">Departemen</th>
            <th style="width: 15%;">Jabatan</th>
            <th style="width: 20%;">Keterangan</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('employee.show', ['employee' => $item->id]) }}');">
                <td>
                    <div class="image-table-cell">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
