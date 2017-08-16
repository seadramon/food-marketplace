<?php

namespace marketplace\Http\Controllers\Front;

use Illuminate\Http\Request;

use marketplace\Http\Requests;
use marketplace\Http\Controllers\Controller;

use marketplace\User;
use marketplace\Models\Product;

class ProdukController extends BaseController
{
    public function __construct()
    {
    	parent::__construct();
    }

    public function index()
    {

    }

    public function create($uuid = null)
    {
    	/*if ($uuid!=null) {
    		$auth = $this->cekAuth($uuid);
    	}*/
    	$produk = Product::find($uuid);

    	return view('front.pages.product.main')
    		// ->with('inc', 'front.includes.product.create')
    		->with('produk', $produk);
    }

    private function cekAuth($uuid)
    {
        /*$store = Stores::where('id', $uuid)->first();

        if ($store==null) {
            return abort(404, "Not Found");
        } else {
            if ($this->user->id!=$store->user_id) {
                return abort(403, "Forbidden");
            }
        }*/
    }
}
