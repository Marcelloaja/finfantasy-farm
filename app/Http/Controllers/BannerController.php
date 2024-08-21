<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index()
    {        
        $banners['banners'] = DB::select("
            SELECT
                *
            FROM
                banner
        ");        

        return
            view('admin/header', $banners) .
            view('admin/sidebar', $banners) .
            view('admin/main_page/banner', $banners) . 
            view('admin/footer');
    }

    // public function save_banner(Request $req)
    // {
    //     try {
    //         $banners = [
    //             'ID_BANNER' => $this->GenerateUniqID(strip_tags($req->input('all_kinds'))),
    //             'ALL_KINDS' => strip_tags($req->input('all_kinds')),
    //             'TOTAL_BUYERS' => strip_tags($req->input('total_buyers')),
    //             'FISH_PACKAGE' => strip_tags($req->input('fish_package')),
    //             'DELIVERY' => strip_tags($req->input('delivery')),
    //         ];

    //         DB::table('banner')->insert($banners);

    //         return redirect('admin/banner')->with('success', 'Berhasil menambah data banner');
    //     } catch (Exception $err) {
    //         return redirect('admin/banner')->with('error', 'Gagal menambah data banner, error : ' . $err);
    //     }
    // }

    public function edit_banner(Request $req)
    {
        try {
            $banners = [
                "ALL_KINDS" => $req->input('all_kinds'),
                "TOTAL_BUYERS" => $req->input('total_buyers'),
                "FISH_PACKAGE" => $req->input('fish_package'),
                "DELIVERY" => $req->input('delivery'),
            ];

            DB::table('banner')->where(['ID_BANNER' => $req->input('id_banner')])->update($banners);
            return redirect('admin/banner')->with('success', 'Berhasil merubah data banner');
        } catch (Exception $err) {
            return redirect('admin/banner')->with('error', 'Gagal merubah data banner, error : ' . $err);
        }
    }

    // public function delete_banner($idBanner)
    // {
    //     try {
    //         DB::table('banner')->where(['ID_BANNER' => $idBanner])->delete();
    //         return redirect('admin/banner')->with('success', 'Berhasil menghapus data banner');
    //     } catch (Exception $err) {
    //         return redirect('admin/banner')->with('error', 'Gagal menghapus data banner, error : ' . $err);
    //     }
    // }

    // public function GenerateUniqID($var)
    // {
    //     $string = preg_replace('/[^a-z]/i', '', $var);
    //     $vocal  = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
    //     $scrap  = str_replace($vocal, "", $string);
    //     $begin  = substr($scrap, 0, 4);
    //     $uniqid = strtoupper($begin);
    //     return "BNR_" . $uniqid . substr(md5(time()), 0, 3);
    // }

}
