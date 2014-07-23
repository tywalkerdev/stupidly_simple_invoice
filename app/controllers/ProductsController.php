<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();

		return View::make('products.index', compact('products'));
	}

	public function store()
	{
		$product = new Product;

		$product->title = Input::get('title');
		$product->description = Input::get('description');
		$product->price = Input::get('price');
		$product->save();

		return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}
	public function order($id)
	{
		$product = Product::whereId($id)->first();

		return View::make('products.order', compact('product'));
	}

	public function invoice($id) 
	{
		$product = Product::whereId($id)->first();
		
		Mail::send('emails.test', 
			['title'=>$product->title,
			'description'=>$product->description,
			'price' => $product->price], 
			function($message) {
		    $message->to('walkerje1988@yahoo.com')->subject('Order Confirm');
		});

		return View::make('products.confirm', compact('data'));
	}

}
