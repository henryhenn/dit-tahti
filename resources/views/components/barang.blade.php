<div class="container mx-auto">
    <div class="w-full">
        <div class="grid grid-cols-4 gap-4 p-4">
            @foreach($barang as $barang)
                <div class="border border-blue-400 rounded-md h-64 p-1">
                    <img class="w-full h-44 object-cover rounded-md"
                         src="{{asset('storage/' . $barang->gambar1)}}"
                         alt="">
                    <div class="w-full">
                        <label class="font-bold text-gray-600" for="">{{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</label>
                    </div>
                    <div class="w-full">
                        <p class="text-xs text-gray-400" for="">{{$barang->category->katgori}}</p>
                    </div>
                    <button type="button"
                            class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                        Detail Barang
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</div>
