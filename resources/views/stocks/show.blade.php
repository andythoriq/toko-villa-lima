@extends('adminpanelcomponents.main')
@section('main')

<div class="container">
<div class="row d-flex justify-content-center">
    <h2 class="text-center contoh-tampilan-di-beranda">contoh tampilan di beranda</h2>
    @include('components.card')
</div>

<hr>

    <h1 class="contoh-tampilan-di-beranda">detail</h1>
    <div class="responsive-table">
        <table class="table">
            <tr>
                <td>nama : </td>
                <td>{{ $stock->nama }}</td>
            </tr>
            <tr>
                <td>persediaan : </td>
                <td>{{ $stock->persediaan }}</td>
            </tr>
            <tr>
                <td>deskripsi : </td>
                <td>{{ $stock->deskripsi }}</td>
            </tr>
            <tr>
                <td>dibuat pada : </td>
                <td>{{ $stock->created_at }}</td>
            </tr>
            <tr>
                <td>diubah pada : </td>
                <td>{{ $stock->updated_at }}</td>
            </tr>
        </table>
    </div>
</div>


@endsection
