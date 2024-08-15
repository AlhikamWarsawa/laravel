<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/jurusan', function () {
    return view('jurusan', ['title' => 'Jurusan', 'blog' => [
        [
            'id' => 1,
            'nama' => 'Rekayasa PHP Laravel',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
        ], [
            'id' => 2,
            'nama' => 'Tenaga Kerja Jaringan',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
        ],
        [
            'id' => 3,
            'nama' => 'Desain Kertas Vensil',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
        ]]]);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'blog' => [
        [
        'id' => 1,
        'judul' => 'Perayaan Pembukaan Rusdi BarberShop di Ngawi Selatan',
        'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
        'author' => 'Mas Rusdi',
    ], [
            'id' => 2,
            'judul' => 'VIRALLLL!! Penemuan Ikan Ambatufish di Selat Ngawi Tengah, Nomor 5 Bikin Kaget!!',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
            'author' => 'Mas Ironi',
        ]]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/berita_satuan/{id}', function ($id) {
$blogs =  [
    [
    'id' => 1,
    'judul' => 'Perayaan Pembukaan Rusdi BarberShop di Ngawi Selatan',
    'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
    'author' => 'Mas Rusdi',
], [
        'id' => 2,
        'judul' => 'VIRALLLL!! Penemuan Ikan Ambatufish di Selat Ngawi Tengah, Nomor 5 Bikin Kaget!!',
        'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consequatur consequuntur, dicta dolore, ducimus ea esse et excepturi explicabo fuga fugit iure maxime molestiae nam neque nesciunt nihil optio porro quia quibusdam quos repellendus tempora ullam ut vel vero voluptatem. Accusantium aliquam consectetur cumque cupiditate deleniti distinctio doloribus eaque eos exercitationem explicabo in inventore ipsum laborum libero magni maxime minima modi molestias nemo nihil nobis non odio perferendis perspiciatis, placeat, provident quis ratione recusandae repudiandae sapiente sed sequi sint suscipit totam ullam velit voluptate! Accusamus assumenda dignissimos, eveniet maiores molestiae mollitia optio placeat provident rerum soluta temporibus ut vitae.',
        'author' => 'Mas Ironi',
    ]];

$blog = Arr::first($blogs,function($blog) use($id){
    return $blog['id'] == $id;
});

return view('berita_satuan', ['title' => 'berita_satuan', 'blog'=>$blog]);
});

