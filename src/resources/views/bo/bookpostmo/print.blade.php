@extends('layouts.print_area')


@section('content')
    <table class="label">
        <thead>
            <tr class="title">
                <td colspan="2">PEMAKAIAN RUANG RAPAT</td>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td colspan="2">RUANG</td>
            </tr>

            <tr>
                <td><i class="fa-regular fa-square"></i> R.Meeting Founder</td>
                <td><i class="fa-regular fa-square"></i> R.Meeting Interior</td>
            </tr>
            <tr>
                <td><i class="fa-regular fa-square-check"></i> R.Meeting Postmo</td>
                <td><i class="fa-regular fa-square"></i> R.Meeting Support</td>
            </tr>
            <tr>
                <td><i class="fa-regular fa-square"></i> R.Meeting Bulat</td>
                <td><i class="fa-regular fa-square"></i> R.Meeting Arsitektur</td>
            </tr>
            <tr>
                <td><i class="fa-regular fa-square"></i> Ruang Andrawina</td>
                <td><i class="fa-regular fa-square"></i> R.Meeting MF</td>
            </tr>

            <tr class="label-desc">
                <td>JUDUL RAPAT</td>
                <td>: .............................................</td>
            </tr>
            <tr>
                <td>HARI, TANGGAL</td>
                <td>: .............................................</td>
            </tr>
            <tr>
                <td>JAM</td>
                <td>: .............................................</td>
            </tr>
            <tr>
                <td>PEMESAN</td>
                <td>: .............................................</td>
            </tr>

        </tbody>
    </table>

    <div class="no-print">

        <button style="margin-left: 10px;" onClick="window.print();">Print Label</button>

    </div>
@endsection
