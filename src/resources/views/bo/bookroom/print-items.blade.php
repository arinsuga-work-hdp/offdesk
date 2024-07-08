<table class="label">
    <thead>
        <tr class="title">
            <td colspan="2">PEMAKAIAN RUANG RAPAT</td>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td colspan="2"><strong>RUANG</strong></td>
        </tr>

        <tr>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 2 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Founder
            </td>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 3 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Interior
            </td>

        </tr>
        <tr>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 1 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Postmo
            </td>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 7 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Support
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 4 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Bulat
            </td>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 6 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Arsitektur
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 8 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting Andrawina
            </td>
            <td>
                <i class="fa-regular {{ $viewModel->data->room_id == 5 ? 'fa-square-check' : 'fa-square' }}"></i> R.Meeting MF
            </td>
        </tr>

        <tr class="label-desc label-desc-first">
            <td>JUDUL RAPAT</td>
            <td>: {{ $viewModel->data->subject != null ? $viewModel->data->subject : str_repeat('.', 45) }}</td>
        </tr>
        <tr class="label-desc">
            <td>HARI, TANGGAL</td>
            <td>: {{ str_repeat('.', 300) }}</td>
        </tr>
        <tr class="label-desc">
            <td>JAM</td>
            <td>: {{ str_repeat('.', 45) }}</td>
        </tr>
        <tr class="label-desc">
            <td>PEMESAN</td>
            <td>: {{ str_repeat('.', 45) }}</td>
        </tr>

    </tbody>
</table>

<div class="no-print">

    <button style="margin-left: 10px;" onClick="window.print();">Print Label</button>

</div>
