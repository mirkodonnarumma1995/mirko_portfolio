<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MarkdownController extends HomeController
{

    public function show(Request $request)
    {
        $markdownFile = storage_path('app/ohi.md');
        $content = File::exists($markdownFile) ? File::get($markdownFile) : '';

        // Splitting content into sections by day
        $days = preg_split('/\n(?=# )/', $content);
        $days = array_filter($days); // remove empty elements

        // Get the current page from the query string or default to 1
        $currentPage = $request->input('page', 1);
        $perPage = 4; // Number of days per page

        // Calculate the offset
        $offset = ($currentPage - 1) * $perPage;

        // Slice the array of days to get the current page items
        $pagedDays = array_slice($days, $offset, $perPage);

        // Calculate total pages
        $totalPages = ceil(count($days) / $perPage);

        return view('ohi', [
            'days' => $pagedDays,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
        ]);
    }
}
