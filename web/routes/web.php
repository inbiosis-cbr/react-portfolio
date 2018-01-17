<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $academicContents = [
        [
            'title' => 'Incomplete at 2017',
            'htmlContent' => 'PhD in Systems Biology at Institute of Systems Biology (INBIOSIS, UKM)',
        ],

        [
            'title' => 'Graduated (CGPA 3.72) at 2009',
            'htmlContent' => 'Bsc. (Bioinformatics) with honour at Universiti Kebangsaan Malaysia (UKM)',
        ],

        [
            'title' => 'STPM (CGPA 3.67) at 2006',
            'htmlContent' => 'Higher Secondary School at SMK Anderson Ipoh.',
        ],

        [
            'title' => 'SPM (11A) at 2004',
            'htmlContent' => 'Secondary School at SMK Seri Putera Fair Park.',
        ],

        [
            'title' => 'PMR (8A) at 2001',
            'htmlContent' => 'Secondary School at SMK Seri Putera Fair Park.',
        ],

        [
            'title' => 'UPSR (7A) at 1998',
            'htmlContent' => 'Secondary School at SMK Seri Putera Fair Park.',
        ],
    ];

    return view('paperkit2.pages.index')
            ->withAcademicContents($academicContents);
});
