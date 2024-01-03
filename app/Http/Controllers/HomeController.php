<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class HomeController extends Controller
{
    public $i, $result, $products, $mobile, $fridges, $tvs, $categories ;

  public function index(){
      return view('home');
  }
  public function contact(){
      return view('contact');
  }
  public function category(){
      $this->categories = CategoriesModel::getAllCategories();
      return view('category', ['categories' => $this->categories]);
  }

  public function detail($id){
      $this->products = ProductModel:: getProductById($id);
      return view('detail', ['product' => $this->products ]);
  }

  //===================Product ===========================
  public function products(){
      $this->mobile =ProductModel::getAllProductByCategory(1);
      $this->fridges =ProductModel::getAllProductByCategory(3);
      $this->tvs =ProductModel::getAllProductByCategory(2);
      return view('products', [
          'mobile' =>$this->mobile,
          'fridges' =>$this->fridges,
          'tvs' =>$this->tvs
      ]);
  }
  //=======================End Product==============================================
  //=========================Make Odd Even Number====================

  public function makeOddEven(Request $request)
    {
        $result = '';
        $firstNumber = $request->first_number;
        $lastNumber = $request->last_number;

        if ($firstNumber < $lastNumber)
        {
            for ($i = $firstNumber; $i <= $lastNumber; $i++)
            {
                if ($request->choice === 'Odd' && $i % 2 !== 0)
                {
                    $result .= $i . " ";
                } elseif ($request->choice === 'Even' && $i % 2 === 0) {
                    $result .= $i . " ";
                }
            }
        }
        else
            {
                for ($i = $firstNumber; $i >= $lastNumber; $i--)
                {
                    if ($request->choice === 'Odd' && $i % 2 !== 0)
                    {
                        $result .= $i . " ";
                    } elseif ($request->choice === 'Even' && $i % 2 === 0) {
                        $result .= $i . " ";
                    }
                }
            // Handle the case where first_number is greater than last_number
            }

        return redirect('/contact')
            ->with('first_number', $firstNumber)
            ->with('last_number', $lastNumber)
            ->with('result', $result);
    }
}
//==================================end even odd number
