<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function landing_page()
    {
        // Fetch aggregated data from the 'banner' table
        $banners = DB::table('banner')->select(
            DB::raw('SUM(ALL_KINDS) as all_kinds'),
            DB::raw('SUM(TOTAL_BUYERS) as total_buyers'),
            DB::raw('SUM(FISH_PACKAGE) as fish_package'),
            DB::raw('SUM(DELIVERY) as delivery')
        )->first();

        // Fetch all data from the 'package' table
        $packages = DB::table('package')->select(
            'id_package',
            'type_package',
            'price_package',
            'first_item',
            'second_item',
            'third_item',
            'buy_now'
        )->get();

        // Send both data sets to the view
        return view('page_user', compact('banners', 'packages'));
    }

    public function dashboard_admin()
    {        
        // Fetch aggregated data from the 'user' table
        $userCount = DB::table('user')->where('id_role', '2')->count();

        // Fetch aggregated data from the 'admin' table
        $adminCount = DB::table('user')->where('id_role', '1')->count();

        // Fetch aggregated data from the 'user' table
        $totalPackage = DB::table('package')->count();

        return
            view('admin/header') .
            view('admin/sidebar') .
            view('admin/main_page/dashboard', [
                'userCount' => $userCount, 
                'totalPackage' => $totalPackage,
                'adminCount' => $adminCount
                ]) .
            view('admin/footer');
    }
}