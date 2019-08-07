<?php
namespace Bin\JunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;
class TestController extends Controller
{
	public function index(){
		return 'This is a test Controller';
	}
}