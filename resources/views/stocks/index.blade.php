@extends('adminpanelcomponents.main')
@section('main')
<main class="container">
    <a href="{{ route('addStock') }}" class="btn btn-success rounded-0 d-flex p-3 a-paling-atas-stocks"><i class="fa-solid fa-plus pe-1"></i>tambah data baru</a>
    @include('components.alert')
    @if ($stocks->count() <= 0)
        <div class="alert alert-warning rounded-0">stok belum tersedia</div>
    @else
        <div class="table-responsive">
            <table class="table table-striped-columns table-hover">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th colspan="3">-</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $i++ }}.</td>
                        <td>{{ $stock->nama }}</td>
                        <td>{{ $stock->persediaan }}</td>
                        <td><a href="{{ route('showStock', $stock->slug) }}"><i class="fa-solid fa-info"></i> detail</a></td>
                        <td><a href="{{ route('editStock', $stock->slug) }}"><i class="fa-solid fa-pen-to-square"></i> ubah</a></td>
                        <td><form action="{{ route('deleteStock', $stock->slug) }}" method="POST" class="form-di-index-stocks d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-dark p-0" onclick="return confirm('yakin ingin menhapus data?')"><i class="fa-solid fa-square-minus"></i> hapus</button>
                        </form></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
</main>
@endsection
