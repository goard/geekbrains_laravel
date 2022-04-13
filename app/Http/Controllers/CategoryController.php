<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = $this->getCategoryNews();

        // dump($category);
        return view('category.index', [
            'categoryList' => $category
        ]);
    }

    public function show(int $id)
    {
        return view('category.show', [
            'category' => $this->getCategoryNews($id)
        ]);
    }
}
