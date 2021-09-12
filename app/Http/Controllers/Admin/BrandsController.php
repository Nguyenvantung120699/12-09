<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Brands\BrandsRepositoryInterface;
use Illuminate\Support\Facades\File;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $brandRepo;

    public function __construct(BrandsRepositoryInterface $brandRepo)
    {
        $this->brandRepo = $brandRepo;
    }

    public function index()
    {
        $brands = $this->brandRepo->getAll();

        return view('theme_admin.brand.list', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme_admin.brand.form_create');
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

        $ext_allow = ["png","jpg","jpeg","gif","svg"];
        if ($request->hasFile('logo')){

               $file = $request->file("logo");
                $file_name = time()."_".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if(in_array($ext,$ext_allow)){
                    $file->move("uploads/brands/",$file_name);
                    $image = "uploads/brands/".$file_name;
                }
                $data['logo'] = $image;
            }
            $brands = $this->brandRepo->create($data);

            return redirect('admin/brand/list');
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
        $brands = $this->brandRepo->find($id);

        return view('theme_admin.brand.detail', ['brands' => $brands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $brands = $this->brandRepo->find($id);
        return view("theme_admin.brand.form_edit",['brands'=>$brands]);
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
        if ($request->hasFile('logo')){

               $file = $request->file("logo");
                $file_name = time()."_".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if(in_array($ext,$ext_allow)){
                    $file->move("uploads/brands/",$file_name);
                    $image = "uploads/brands/".$file_name;
                }
            }
            $data['logo'] = $image;
            $brands = $this->brandRepo->update($id, $data);

        }catch (\Exception $e){
            return redirect()->back();
        }

        return redirect('admin/brand/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->brandRepo->delete($id);

        return redirect('admin/brand/list');
    }
}
