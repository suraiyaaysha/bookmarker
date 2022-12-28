<?php

declare(strict_types=1);
namespace App\Http\Controllers\Bookmarks;
use App\Actions\Bookmarks\CreateBookmarkAndTags;
use App\Http\Requests\Bookmarks\StoreRequest;
use Illuminate\Http\RedirectResponse;
class StoreController
{
    public function __construct(
        protected CreateBookmarkAndTags $action,
    ) {}
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $this->action->handle(
            request: $request->all(),
            id: auth()->id(),
        );
        return redirect()->route('dashboard');
    }
}
