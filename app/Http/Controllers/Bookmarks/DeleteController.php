<?php

declare(strict_types=1);

namespace App\Http\Controllers\Bookmarks;
use App\Models\Bookmark;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteController
{
    public function __invoke(Request $request, Bookmark $bookmark): RedirectResponse
    {
        $bookmark->delete();
        return redirect()->route('dashboard');
    }
}
