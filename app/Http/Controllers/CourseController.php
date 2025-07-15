<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($slug)
    {
        $courses = [
            'web-design' => [
                'slug' => 'web-design',
                'title' => 'Web Design',
                'description' => 'Belajar membuat tampilan website dengan HTML, CSS, dan Figma.',
                'price' => 250000
            ],
            'graphic' => [
                'slug' => 'graphic',
                'title' => 'Graphic Design',
                'description' => 'Pelajari cara membuat desain visual dengan Photoshop & Illustrator.',
                'price' => 300000
            ],
            'uiux-design' => [
                'slug' => 'uiux-design',
                'title' => 'UI/UX Design',
                'description' => 'Desain logo kreatif untuk brand profesional.',
                'price' => 150000
            ],
            'affiliate' => [
                'slug' => 'affiliate',
                'title' => 'Affiliate Marketing',
                'description' => 'Dapatkan penghasilan dari promosi produk orang lain',
                'price' => 200000
            ],
            'sosmed' => [
                'slug' => 'sosmed',
                'title' => 'Social Media Marketing',
                'description' => 'Optimalkan Instagram, Facebook, TikTok untuk bisnis.',
                'price' => 275000
            ],
            'digital' => [
                'slug' => 'digital',
                'title' => 'Digital Marketing',
                'description' => 'Strategi pemasaran online menggunakan iklan, SEO, dan content.',
                'price' => 350000
            ],
            'finansial' => [
                'slug' => 'finansial',
                'title' => 'Financial Planning',
                'description' => 'Merencanakan keuangan pribadi untuk masa depan.',
                'price' => 225000
            ],
            'inves' => [
                'slug' => 'inves',
                'title' => 'Investasi Saham',
                'description' => 'Dasar-dasar membeli saham untuk pemula.',
                'price' => 270000
            ],
            'laravel' => [
                'slug' => 'laravel',
                'title' => 'Laravel PHP Framework',
                'description' => 'Membangun aplikasi web menggunakan Laravel.',
                'price' => 350000
            ],
            'mobile' => [
                'slug' => 'mobile',
                'title' => 'Mobile Development Flutter',
                'description' => 'Buat aplikasi Android/iOS dalam 1 codebase.',
                'price' => 375000
            ],
            'cyber' => [
                'slug' => 'cyber',
                'title' => 'Cyber Security Basic',
                'description' => 'Mengenal ancaman, perlindungan data, dan privasi online.',
                'price' => 275000
            ],
        ];

        if (!array_key_exists($slug, $courses)) {
            abort(404);
        }

        return view('courses.show', [
            'course' => $courses[$slug]
        ]);
    }

}
