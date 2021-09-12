<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Products\ProductsRepositoryInterface;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $proRepo;

    public function __construct(ProductsRepositoryInterface $proRepo)
    {
        $this->proRepo = $proRepo;
    }

    public function index()
    {
        $products = $this->proRepo->getAll();

        return view('theme_admin.products.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_admin.products.form_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

        $data = $request->all();
        dd($data);

        $ext_allow = ["png","jpg","jpeg","gif","svg"];
        if ($request->hasFile('thumbnail')){

               $file = $request->file("thumbnail");
                $file_name = time()."_".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if(in_array($ext,$ext_allow)){
                    $file->move("uploads/products/",$file_name);
                    $image = "uploads/products/".$file_name;
                }
                $data['thumbnail'] = $image;
            }
            $products = $this->proRepo->create($data);

            return redirect('admin/products/list');
             }catch (\Exception $e){
                return redirect()->back();
            }
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = $this->proRepo->find($id);

        return view('theme_admin.products.detail', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $products = $this->proRepo->find($id);
        return view("theme_admin.products.form_edit",['products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            $ext_allow = ["png","jpg","jpeg","gif","svg"];
        if ($request->hasFile('thumbnail')){

               $file = $request->file("thumbnail");
                $file_name = time()."_".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if(in_array($ext,$ext_allow)){
                    $file->move("uploads/products/",$file_name);
                    $image = "uploads/products/".$file_name;
                }
            }
            $data['thumbnail'] = $image;
            $products = $this->proRepo->update($id, $data);

        }catch (\Exception $e){
            return redirect()->back();
        }

        return redirect('admin/products/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->proRepo->delete($id);

        return redirect('admin/products/list');
    }
}
