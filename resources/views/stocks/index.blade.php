@extends('adminpanelcomponents.main')
@section('main')
<main class="row justify-content-center">
    <a href="{{ route('addStock') }}" type="button">Tambah Baru</a>
    <div class="table-responsive">
        <table class="table table-striped-columns table-hover">
            <thead class="table-secondary">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Detail</th>
                    <th colspan="2">Ubah/Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Indomie</td>
                    <td>ada</td>
                    <td><a href="/stock/indomie"><i class="fa-solid fa-circle-info"></i></a></td>
                    <td><a href="/stock/edit/indomie"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><form action="/stock/delete/indomie" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form></td>
                </tr>
            <?php $i = 1 ?>
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{ $i++ }}.</td>
                    <td>{{ $stock->nama }}</td>
                    <td>{{ $stock->persediaan }}</td>
                    <td><a href="{{ route('showStock', $stock->slug) }}"><i class="fa-regular fa-circle-info"></i></a></td>
                    <td><a href="{{ route('editStock', $stock->slug) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><form action="{{ route('deleteStock', $stock->slug) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"><i class="fa-solid fa-trash-xmark"></i></button>
                    </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
