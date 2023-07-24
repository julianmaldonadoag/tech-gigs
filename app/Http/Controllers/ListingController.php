<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
        // $listing = Listing::find($id);

        // if ($listing) {
        //     return view('listing', [
        //         'listing' => $listing
        //     ]);
        // } else {
        //     abort('404');
        // }
    }
}
