<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EzraController extends Controller
{
    const BOOK_NAME = 'Ezra';
    const BIBLE_VERSION = 'King James Version';
    const CHAPTERS = 10;

    public function index()
    {
        return view('index', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }
    public function readByChapter($chapter_number)
    {
        return view('read-chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }
    public function readAllChapter()
    {
        return view('all-chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'number_of_chapters' => static::CHAPTERS
        ]);
    }
}
