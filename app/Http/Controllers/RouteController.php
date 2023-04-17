<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Toko;
use App\Models\User;
use App\Models\Admin;
use App\Models\Voucher;
use App\Models\Kategori;
use App\Models\Superadmin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class RouteController extends Controller
{
    public function index()
    {
        $toko = Toko::all();
        $kategori = Kategori::all();
        $user = DB::table('users')->where('level', '=', 'user')->get();
        $voucher = DB::table('vouchers')->where('status', '=', 'Dikonfirmasi')->get();
        $vr = DB::table('kategoris')->count();
        $toko_terlaris = Toko::orderBy('views', 'DESC')->paginate(10);

        //chart
        $diterima = Voucher::where('status', "Dikonfirmasi")->count();
        $ditolak = Voucher::where('status', "Ditolak")->count();
        $pending = Voucher::where('status', "Menunggu")->count();


        return view('index', [
            'title' => 'Dashboard',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('toko', 'kategori', 'voucher', 'user', 'vr', 'diterima', 'ditolak', 'pending', 'toko_terlaris'));
    }

    public function user(Request $request)
    {
        $data = User::where('level', 'user')->get();
        return view('table.tables_user', [
            'title' => 'User',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('data'));
    }
    public function admin(Request $request)
    {
        $admin = User::where('level', 'admin')->get();
        return view('table.tables_admin', [
            'title' => 'Admin',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('admin'));
    }
    public function tambahadmin(Request $request)
    {
        $toko = Toko::all();
        return view('form.tambahadmin', [
            'title' => 'Tambah Data Admin',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ], compact('toko'));
    }
    public function insertadmin(Request $request)
    {
        $validateddata = $request->validate([
            'username' => 'required|min:4|unique:admins,username,except,id',
            'password' => 'required',
            'toko' => 'required|unique:admins,toko,except,id',
            'email' => 'required|email|unique:admins,email,except,id'
        ], [
            'username.required' => 'Username is required',
            'username.unique' => 'Username already in use',
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already use',
            'toko.required' => 'Toko is required',
            'toko.unique' => 'Toko cannot be duplicate',

        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => ($request->email),
            'toko' => ($request->toko),
            'level' => ("admin"),
        ]);

        return redirect()->route('admin');
    }
    public function adminedit(Request $request, $id)
    {
        $data = User::find($id);
        return view('form.tampiladmin', [
            'title' => 'Edit Admin',
            'FAQ' => DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ], compact('data'));
    }
    public function updateadmin(Request $request, $id)
    {
        $validateddata = $request->validate([
            'username' => 'required|min:4|unique:admins,username,' . $request->id . ',id',
            'email' => 'required|unique:admins,email,' . $request->id . ',id'
        ], [
            'username.required' => 'Username is required',
            'username.unique' => 'Username already in use',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already use',
        ]);
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('admin');
    }
    public function deleteadmin(Request $request, $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin');
    }
    public function superadmin(Request $request)
    {
        $user = User::where('level', 'superadmin')->get();
        return view('table.tables_super', [
            'title' => 'SuperAdmin',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('user'));
    }

    public function tambahsuper(Request $request)
    {
        return view('form.tambahsuper', [
            'title' => 'Tambah Data SuperAdmin',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }
    public function insertsuper(Request $request)
    {
        $validateddata = $request->validate([
            'username' => 'required|min:4|unique:superadmins,username,except,id',
            'password' => 'required|min:4',
            'email' => 'required|unique:superadmins,email,' . $request->id . ',id'
        ], [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already use',
            'username.unique' => 'Username already use',

        ]);
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect()->route('superadmin');
    }

    public function editsuper(Request $request, $id)
    {
        $data = User::find($id);
        return view('form.tampilsuper', [
            'title' => 'Edit SuperAdmin',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ], compact('data'));
    }

    public function updatesuper(Request $request, $id)
    {
        $validateddata = $request->validate([
            'username' => 'required|min:4|unique:superadmins,username,' . $request->id . ',id',
            'email' => 'required|min:4|unique:superadmins,email,' . $request->id . ',id'
        ], [
            'username.required' => 'Name is required',
            'email.required' => 'Password is required',
            'email.unique' => 'Email already use',

        ]);
        $data = User::find($id);
        $data->update($request->all());
        return redirect()->route('superadmin');
    }
    public function deletesuper(Request $request, $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('superadmin');
    }

    public function toko(Request $request)
    {
        $toko = Toko::paginate(5);
        return view('table.data_toko', [
            'title' => 'Data Toko',
            'FAQ' => $data = DB::table('faqs')
                ->where('status', 'Menunggu')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('toko'));
    }
    public function tambahtoko(Request $request)
    {
        return view('form.tambahtoko', [
            'title' => 'Tambah Data Toko',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }

    public function inserttoko(Request $request)
    {
        $validateddata = $request->validate([
            'nama_toko' => 'required|unique:tokos,nama_toko,' . $request->id . ',id',
            'link_website' => 'required|url',
            'logo' => 'required|file'
        ], [
            'nama_toko.required' => 'Nama Toko is required',
            'link_website.required' => 'Link Website is required',
            'link_website.url' => 'Link Website should be url',
            'logo.required' => 'Logo is required',
            'logo.file' => 'Logo should be file',
            'email.unique' => 'Email already use',

        ]);

        if ($files = $request->file('logo')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('logotoko', $name);
        }

        $data = Toko::create([
            'nama_toko' => $request->nama_toko,
            'link_website' => $request->link_website,
            'logo' => $name,
        ]);


        return redirect()->route('toko');
    }
    public function edittoko(Request $request, $id)
    {
        $data = Toko::where('id', $id)->first();
        return view('form.tampiltoko', [
            'title' => 'Edit Toko',
            'FAQ' => DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ], compact('data'));
    }
    public function updatetoko(Request $request, $id)
    {
        $validateddata = $request->validate([
            'nama_toko' => 'required|unique:tokos,nama_toko,' . $request->id . ',id',
            'link_website' => 'required|url',
            'logo' => 'file'
        ], [
            'nama_toko.required' => 'Nama Toko is required',
            'link_website.required' => 'Link Website is required',
            'link_website.url' => 'Link Website should be url',
            'logo.required' => 'Logo is required',
            'logo.file' => 'Logo should be file',
            'email.unique' => 'Email already use',

        ]);
        $data = Toko::find($id);
        // if($request->hasFile('logo')){
        //     $request->file('logo')->move('logotoko/',$request->file('logo')->getClientOriginalName());
        //     $data->logo=$request->file('logo')->getClientOriginalName();
        //     $data->update();
        //     return redirect()->route('toko');
        // }

        // $data->update($request->all());

        if ($files = $request->file('logo')) {
            $extension = $files->getClientOriginalExtension();
            $img = hash('sha256', time()) . '.' . $extension;
            $up = $files->move('logotoko', $img);

            if ($up) {
                $image_db = Toko::where('id', $id)->pluck('logo')->first();
                $storage = public_path('logotoko/' . $image_db);

                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $image_db = Toko::where('id', $id)->pluck('logo')->first();
            $img = $image_db;
        }

        Toko::where('id', $id)->update([
            'nama_toko' => $request->nama_toko,
            'logo' => $img,
            'link_website' => $request->link_website
        ]);

        return redirect()->route('toko');
    }
    public function hapustoko(Request $request, $id)
    {
        Toko::find($id)->delete();
        User::where('toko', $id)->delete();

        return redirect()->route('toko');
    }


    public function voucher(Request $request)
    {
        $voucher = Voucher::where('status', 'Dikonfirmasi')->paginate(5);
        $data2 = Voucher::where('status', 'Ditolak')->paginate(5);
        return view('table.data_voucher', [
            'title' => 'Voucher',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('voucher', 'data2'));
    }
    public function deletevoucher(Request $request, $id)
    {
        $data = voucher::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function validasi(Request $request)
    {
        echo "test";
        $voucher = Voucher::where('status', 'menunggu')->get();
        return view('table.validasi', [
            'title' => 'Validasi',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()

        ], compact('voucher'));
    }
    public function tolak($id)
    {
        $data = voucher::find($id);

        return redirect()->route('validasi');
    }
    public function updatetolak(Request $request, $id)
    {
        $data = voucher::find($id);
        $data->update($request->all());
        return redirect()->route('validasi');
    }
    public function konfirmasi(Request $request, $id, $status)
    {
        $data = voucher::find($id);
        $data->update([
            'status' => $status
        ]);
        return redirect()->route('validasi');
    }

    public function kategori(Request $request)
    {
        $kk = Kategori::all();
        return view('table.kategori', [
            'title' => 'Data Kategori',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ], compact('kk'));
    }
    public function tambahkategori()
    {
        return view('form.tambahkategori', [
            'title' => 'Tambah Kategori',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }
    public function editkategori($id)
    {

        $data = Kategori::find($id);
        return view('form.tampilkategori', compact('data'), [
            'title' => 'Edit Kategori',
            'FAQ' => $data = DB::table('faqs')
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }
    public function insertkategori(Request $request)
    {
        $validateddata = $request->validate([
            'kategori' => 'required|unique:kategoris,Kategori,except,id',
        ], [
            'kategori.required' => 'Kategori is required',
            'kategori.unique' => 'Kategori already use',


        ]);
        $data = Kategori::create($request->all());

        return redirect()->route('kategori');
    }
    public function updatekategori(Request $request, $id)
    {
        $validateddata = $request->validate([
            'kategori' => 'required|unique:kategoris,Kategori,' . $request->id . ',id'
        ], [
            'kategori.required' => 'Kategori is required',
            'kategori.unique' => 'Kategori already use',

        ]);
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('kategori');
    }
    public function deletekategori(Request $request, $id)
    {
        $data = Kategori::find($id);

        $data->delete();
        return redirect()->route('kategori');
    }

    public function updateprofil(Request $request, $id)
    {
        $validateddata = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:superadmins,email,' . $request->id . ',id'
        ], [
            'username.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Pleas insert valid email',
            'email.unique' => 'Email already in  use',

        ]);
        $data = Superadmin::find($id);
        $data->update($request->all());
        return redirect()->route('user');
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required|same:new_password',
        ], [
            'current_password.required' => 'Current Password is required',
            'new_password.required' => 'New Pasword is required',
            'new_password_confirmation.required' => 'Password baru required',
            'new_password_confirmation.same' => 'Konfirmasi Password is incorrect',
        ]);

        $user = Superadmin::find($id);
        $current_password = $user->password;
        if (Hash::check($request->current_password, $current_password)) {
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);
            Auth::logout();
            return redirect()->route('login')->with('success', 'Password changed successfully.');
        } else {
            return redirect()->route('profil')->with('status', '');
        }
    }
    public function deleteadminall(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
    public function deletesuperall(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
    public function deletetokoall(Request $request)
    {
        $ids = $request->ids;
        Toko::whereIn('id', $ids)->delete();
        User::whereIn('toko', $ids)->delete();
        Voucher::whereIn('toko', $ids)->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    public function konfirmasiall(Request $request)
    {
        $ids = $request->ids;
        Voucher::whereIn('toko', $ids)->update(['status' => 'Dikonfirmasi']);
        return response()->json(['success' => 'Data berhasil Dikonfirmasi!']);
    }
    public function kategoriall(Request $request)
    {
        $ids = $request->ids;
        Kategori::whereIn('id', $ids)->delete();
        Voucher::whereIn('kategori', $ids)->delete();
        return response()->json(['success' => 'Data berhasil Dihapus!']);
    }

    public function voucherall(Request $request)
    {
        $ids = $request->ids;
        Voucher::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Data berhasil Dihapus!']);
    }
    public function searchfaq(Request $request)
    {
        $output = "";
        $faq = Faq::where('username', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%')->orWhere('pertanyaan', 'like', '%' . $request->search . '%')->get();
        foreach ($faq as $faqs) {
            $output .= '<div class="alert alert-info"
            style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px;overflow:auto" id="faqq' . $faqs->id . ' ">
            <div>
                <h1 style="font-size: 12px; font-weight: bold">From : ' . $faqs->username . ' </h1>
                <h1 style="font-size: 12px; font-weight: bold">Email :  ' . $faqs->email . ' </h1>
                <h1 style="font-size: 12px; font-weight: bold">Pertanyaan : ' . $faqs->pertanyaan . '
                </h1>
                <h1 style="font-size: 12px; font-weight: bold">Jawaban :  ' . $faqs->answer . ' </h1>
            </div>

            <a href="/faqupdates/ ' . $faqs->id . ' " class="alert-link"
                style="font-weight:bold; color: black; margin-left: auto; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right">Update
                <i class="bi bi-pencil-square"></i><a
                    style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right"
                    class="alert-link" href="/faqdelete/ ' . $faqs->id . ' ">
                    <i class="bi bi-x-lg"></i> Hapus
                </a>
                <input style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; font-size: 20px; float: right;" type="checkbox" name="idss" id="checkboxx" class="form-check-input checkbox_idss" value=" ' . $faqs->id . ' ">

        </div>';
        }
        return response($output);
    }
    public function searchfaq2(Request $request)
    {
        $output = "";
        $faq = Faq::where('username', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%')->orWhere('pertanyaan', 'like', '%' . $request->search . '%')->orWhere('answer', 'like', '%' . $request->search . '%')->get();

        foreach ($faq as $faqs) {
            $output .= '<div class="alert alert-info"
            style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px;overflow:auto" id="faqq' . $faqs->id . ' ">
            <div>
                <h1 style="font-size: 12px; font-weight: bold">From : ' . $faqs->username . ' </h1>
                <h1 style="font-size: 12px; font-weight: bold">Email :  ' . $faqs->email . ' </h1>
                <h1 style="font-size: 12px; font-weight: bold">Pertanyaan : ' . $faqs->pertanyaan . '
                </h1>
                <h1 style="font-size: 12px; font-weight: bold">Jawaban :  ' . $faqs->answer . ' </h1>
            </div>

            <a href="/faqupdates/ ' . $faqs->id . ' " class="alert-link"
                style="font-weight:bold; color: black; margin-left: auto; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right">Update
                <i class="bi bi-pencil-square"></i><a
                    style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right"
                    class="alert-link" href="/faqdelete/ ' . $faqs->id . ' ">
                    <i class="bi bi-x-lg"></i> Hapus
                </a>
                <input style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; font-size: 20px; float: right;" type="checkbox" name="ids" id="checkbox" class="form-check-input checkbox_ids" value=" ' . $faqs->id . ' ">

        </div>';
        }
        return response($output);
    }
}
