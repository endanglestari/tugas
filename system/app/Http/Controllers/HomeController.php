<?php 

namespace App\Http\Controllers;


class HomeController extends Controller {

	function showBeranda(){
		return view('beranda');
	}
	
	function showProduk(){
		return view('produk');
	}
	
	function showWishlist(){
		return view('wishlist');
	}

	function showRegister(){
		return view('register');
	}

	function showUser(){
		return view('user');
	}

	function showKontak(){
		return view('kontak');
	}
	function showAbout(){
		return view('about');
	}

	function showBlog(){
		return view('blog');
	}


	function showDetailProduk(){
		return view('detail_produk');
	}

}
