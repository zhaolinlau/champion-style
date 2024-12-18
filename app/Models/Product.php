<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }   

    public function addFavorite($id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);

        if (!$user->favoriteProducts->contains($product->id)) {
            $user->favoriteProducts()->attach($product->id);
        }

        return redirect()->back()->with('success', 'Product added to favorites!');
    }

    public function removeFavorite($id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);

        if ($user->favoriteProducts->contains($product->id)) {
            $user->favoriteProducts()->detach($product->id);
        }

        return redirect()->back()->with('success', 'Product removed from favorites!');
    }
}

