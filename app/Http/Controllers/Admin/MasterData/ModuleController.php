<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Admin\MasterData\Module;
use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\BackupGlobals;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_module'] = Module::all();
        return view('admin.master-data.module.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-data.module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $module = New Module;
        $module->app = request('app');
        $module->name = request('name');
        $module->tag = request('tag');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();
        return redirect('admin/master-data/module');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['module'] = $module;
        return view('admin.master-data.module.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;
        return view('admin.master-data.module.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Module $module)
    {
        $module->app = request('app');
        $module->name = request('name');
        $module->tag = request('tag');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();
        return redirect('admin/master-data/module');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addRole()
    {
        $role = New Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();

        return back();
    }
}
