<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = program::all();
       
        return view ('admin.donasi.program.indexProgram', [
            'data' => $program
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = new program;
        return view('admin.program.tambah', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nama_program' => 'required',
            'dns_butuh' => 'required',
        ]);

        $program = new program;
        $program->nama_program = $request->name;
        $program->dns_butuh = $request->dns_butuh;
        $program->dns_terkumpul = $request->dns_terkumpul;
        $program->save();

        return redirect()->route('program.index')->with('success', 'Data Program Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(program $program)
    {
        $program = Program::find($id);
        return view('admin.donasi.program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, program $program)
    {
        $proram = program::find($id);

        $program->nama_program = $request->name;
        $program->dns_butuh = $request->dns_butuh;
        $program->dns_terkumpul = $request->dns_terkumpul;
        $program->save();

        return redirect()->route('program.index')->with('success', 'Data Program Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(program $program)
    {
        $program = program::find($id);
        $program->delete();
        return redirect()->route('program.index')->with('success', 'Data Program Berhasil Dihapus');
    }
}
