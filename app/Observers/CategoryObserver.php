<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    
    public function created(Category $category)
    {
        //
    }

    
    public function updated(Category $category)
    {
        //
    }

    public function deleted(Category $category)
    {
        // viet ham xoa product trong day
        $category->products()->delete();
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
