<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="ms-5">
        @foreach($blog as $blog)
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                <a href="/jurusan_pesat/{{$blog['id']}}">
                    <h2 class="mb-1 text-3xl font-bold text-gray-900">
                        {{$blog['nama'] ?? "Judul Anda Salah"}}
                    </h2>
                </a>
                <p class="my-4 font-light">{{Str::limit($blog['keterangan'] ?? "Tidak Ada Konten"), 200}}</p>
                <a href="/jurusan_pesat/{{$blog['id']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
            </article>
        @endforeach
    </div>
</x-layout>

