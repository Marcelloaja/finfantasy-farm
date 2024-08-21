<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    public function index()
    {
        $packages['packages'] = DB::select("
            SELECT
                *
            FROM
                package
        ");

        return
            view('admin/header', $packages) .
            view('admin/sidebar', $packages) .
            view('admin/main_page/package', $packages) .
            view('admin/footer');
    }

    public function save_package(Request $req)
    {
        try {
            $packages = [
                'ID_PACKAGE' => strip_tags($req->input('id_package')),
                'TYPE_PACKAGE' => strip_tags($req->input('type_package')),
                'PRICE_PACKAGE' => strip_tags($req->input('price_package')),
                'FIRST_ITEM' => strip_tags($req->input('first_item')),
                'SECOND_ITEM' => strip_tags($req->input('second_item')),
                'THIRD_ITEM' => strip_tags($req->input('third_item')),
                'BUY_NOW' => strip_tags($req->input('buy_now')),
            ];

            DB::table('package')->insert($packages);

            return redirect('admin/package')->with('success', 'Berhasil menambah data package');
        } catch (Exception $err) {
            return redirect('admin/package')->with('error', 'Gagal menambah data package, error : ' . $err->getMessage());
        }
    }

    public function edit_package(Request $req)
    {
        try {
            $packages = [
                'TYPE_PACKAGE' => $req->input('type_package'),
                'PRICE_PACKAGE' => $req->input('price_package'),
                'FIRST_ITEM' => $req->input('first_item'),
                'SECOND_ITEM' => $req->input('second_item'),
                'THIRD_ITEM' => $req->input('third_item'),
                'BUY_NOW' => $req->input('buy_now'),
            ];

            DB::table('package')->where(['ID_PACKAGE' => $req->input('id_package')])->update($packages);
            return redirect('admin/package')->with('success', 'Berhasil merubah data package');
        } catch (Exception $err) {
            return redirect('admin/package')->with('error', 'Gagal merubah data package, error : ' . $err);
        }
    }

    public function delete_package($idPackage)
    {
        try {
            DB::table('package')->where(['ID_PACKAGE' => $idPackage])->delete();
            return redirect('admin/package')->with('success', 'Berhasil menghapus data package');
        } catch (Exception $err) {
            return redirect('admin/package')->with('error', 'Gagal menghapus data package, error : ' . $err);
        }
    }

    public function GenerateUniqID($var)
    {
        $string = preg_replace('/[^a-z]/i', '', $var);
        $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
        $scrap  = str_replace($vocal, "", $string);
        $begin  = substr($scrap, 0, 4);
        $uniqid = strtoupper($begin);
        return "PKG_" . $uniqid . substr(md5(time()), 0, 3);
    }
}
