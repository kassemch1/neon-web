<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class BlogController extends Controller
{
    public function showBlogForm(Request $request)
{
    $query = $request->input('search');
    $query2 = Slider::query(); // Initialize query object

    // If there's a search query, filter the results
    if ($query) {
        $query2->where('name', 'LIKE', "%{$query}%");
    }

    // Paginate the results (with 3 items per page)
    $perPage = 12;
    $Blogs = $query2->paginate($perPage);

    if($Blogs->total() > 0) {
        $startIndex = ($Blogs->currentPage() - 1) * $perPage + 1;
        $endIndex = min($Blogs->currentPage() * $perPage, $Blogs->total());
    } else {
        $startIndex = 0;
        $endIndex = 0;
    }

    $pagination = view('partials.blog_pagination', ['blog' => $Blogs])->render();


    if ($request->ajax()) {
            $blogList = view('partials.blog_list', ['sliders' => $Blogs])->render();
            $pagination = view('partials.blog_pagination', ['blog' => $Blogs])->render();
           
            return response()->json([
                'blogList' => $blogList,
                'paginatee' => $pagination,
                
            ]);
        }

    return view('blog', [
        'blog' => $Blogs,
        'sliders' => $query2->get(), // This will give you the entire sliders list if needed
        'searchQuery' => $query,
        'paginatee' => $pagination,
        'startIndex' => $startIndex,
        'endIndex' => $endIndex,
    ]);
}
}
