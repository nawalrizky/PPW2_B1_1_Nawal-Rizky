@extends('barang.index')

@section('content')
<table class="w-full border-collapse border bg-white shadow-md">
    <thead class="bg-green-700 text-white">
        <tr>
            <th class="px-4 py-2 border border-gray-300">Id</th>
            <th class="px-4 py-2 border border-gray-300">Nama Barang</th>
            <th class="px-4 py-2 border border-gray-300">Harga</th>
            <th class="px-4 py-2 border border-gray-300">Stok</th>
            <th class="px-4 py-2 border border-gray-300">Id Supplier</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 0;
        @endphp
        @foreach ($data_gudang as $gudang)
        <tr>
            <td class="px-4 py-2 border border-gray-300">{{ ++$no }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $gudang->nama_barang }}</td>
            <td class="px-4 py-2 border border-gray-300">Rp {{ number_format($gudang->harga, 2) }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $gudang->stok }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $gudang->id_supplier }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
