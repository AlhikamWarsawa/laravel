<x-layout>
    <x-slot:title>{{$blog['judul']}}</x-slot:title>
    <div class="ms-5">
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                    <h2 class="mb-1 text-3xl font-bold text-gray-900">
                        {{$blog['judul'] ?? "Judul Anda Salah"}}
                    </h2>
                <div class="text-base text-gray-500">Oleh: {{$blog['author'] ?? "Author Tidak Diketahui"}}<br>32 Agustus 2069</div>
                <p class="my-4 font-light">{{($blog['isi'] ?? "Tidak Ada Konten"), 200}}</p>
                <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back To Blog</a>
            </article>
    </div>
</x-layout>

