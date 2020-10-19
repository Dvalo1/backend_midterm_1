<?php

namespace App\Http\Controllers;

use App\Movies;
use App\Genres;
use App\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function userindex() {
        $movies=Movies::get();
        return view("index",["movies"=>$movies]);
    }

    public function usershow($id) {
        $movies = Movies::where("id",$id)->firstOrFail();
        return view("single",["movies" => $movies]);
    }

    public function usershowByCategory($id) {
        $movies = Movies::get();
        return view("genresort",["movies" => $movies, "genreID" => $id]);
    }

    public function index() {
    	$movies = Movies::get();
    	return view("products.index",["movies" => $movies]);
    }


    // Create view form
    public function create() {
    	return view("products.create");
    }

    public function createGenre() {
        return view("products.createGenre");
    }

    // Store movies in the DB
    public function store(Request $request) {
    	Movies::create([
            "IMDB"=>$request->input("rating"),
            "image"=>$request->input("cover"),
    		"title"=>$request->input("title"),
    		"description"=>$request->input("text"),
            "genre_id"=>$request->input("genre_id")
    	]);
    	return redirect()->route("adminindex");
    }

    public function storeGenre(Request $request) {
        Genres::create([
            "genre_name"=>$request->input("genre_name")
        ]);
        return redirect()->route("adminindex");
    }

    // Show specific movie (Admin side)
    public function show($id) {
    	$product = Movies::where("id",$id)->firstOrFail();
    	return view("products.show",["product"=>$product]);
    }

    // Return edit form
    public function edit($id){
    	$product = Movies::where("id",$id)->firstOrFail();
    	return view("products.edit",["product"=>$product]);
    }

    // Update movie details
    public function update(Request $request) {
    	Movies::where("id",$request->input("id"))->update([
            "IMDB"=>$request->input("rating"),
            "image"=>$request->input("cover"),
            "title"=>$request->input("title"),
            "description"=>$request->input("text"),
            "genre_id"=>$request->input("genre_id")
    	]);
    }

    // Delete movie
    public function delete(Request $request) {
    	Movies::where("id",$request->input("id"))->delete();
    	return redirect()->back();
    }
}


