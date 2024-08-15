<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContributorController extends Controller
{
    public function index()
    {
        // GitHub API 요청 (올바른 저장소 경로로 수정)
        $response = Http::withOptions(['verify' => false])
                        ->get('https://api.github.com/repos/jinyphp/jinyui2/contributors');

        // 상태 코드와 응답 확인
        $status = $response->status();
        $contributors = $response->json();

        // // 디버그용 출력 (필요에 따라 주석 처리)
        // dd($status, $contributors);

        // 뷰에 데이터를 전달
        return view()->file(resource_path('www/docs1/index.blade.php'), ['contributors' => $contributors]);

    }
}