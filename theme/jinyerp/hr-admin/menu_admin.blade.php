<div class="sidebar-brand" >
    <span class="sidebar-brand-text align-middle">
        <a class="text-white" style="text-decoration:none;" href="/hr/user">
            HR 인사관리
        </a>
    </span>
    <x-badge-primary>
        <a href="/hr/admin">
            Admin
        </a>
    </x-badge-primary>
</div>


<ul class="sidebar-nav">
    <li class="sidebar-header">
        Time and Attendance
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#hr-work1"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">근태 관리</span>
        </a>
        <ul id="hr-work1" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/work/status">
                    근태 모니터링
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/work/time">
                    출퇴근 기록 관리
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/work/overtime">
                    초과 근무 관리
                </a>
            </li>


        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-work"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">업무형태</span>
        </a>
        <ul id="hr-work" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/work/type">
                    근무유형
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/work/assign">
                    근무지정
                </a>
            </li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-report"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">보고서 및 분석</span>
        </a>

        <ul id="hr-report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    일일 보고서
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    주간보고서
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    월간보고서
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    HR 데이터 분석
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    HR 관련 보고서 생성
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    주요 HR 지표 관리
                </a>
            </li>
        </ul>
    </li>



    <li class="sidebar-header">
        사원관리
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#hr-empolyee"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">직원 관리</span>
        </a>
        <ul id="hr-empolyee" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/employee">
                    사원목록
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/family">
                    부양가족
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/license">
                    보유자격
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/bank">
                    급여계좌
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 정보 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 파일 및 기록
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    입사 및 퇴사 절차 관리
                </a>
            </li>

        </ul>
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#hr-issue"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">직원 상담 및 지원</span>
        </a>
        <ul id="hr-issue" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/faq">
                    Hr-FAQ
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/qna">
                    Hr-QNA
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 상담 및 갈등 해결
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    근로자 지원 프로그램
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 만족도 조사 및 피드백
                </a>
            </li>
        </ul>
    </li>



    <li class="sidebar-item">
        <a data-bs-target="#hr-onboard"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">인사 이동 관리</span>
        </a>
        <ul id="hr-onboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/onboard">
                    Onboarding
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/position">
                    직급
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/position/move">
                    인사이동
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/division">
                    부서
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/division/move">
                    부서발령
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    승진 및 직급 변경 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    부서 이동 및 직무 변경
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    조직 구조 관리
                </a>
            </li>
        </ul>
    </li>


    <li class="sidebar-header">
        Performance
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-edu"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">교육 및 개발</span>
        </a>
        <ul id="hr-edu" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 교육 프로그램 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    교육 이력 및 인증 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직무 개발 계획 및 실행
                </a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#hr-edu2"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">평가 및 성과 관리</span>
        </a>
        <ul id="hr-edu2" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 성과 평가
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    목표 설정 및 피드백 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    성과 개선 계획
                </a>
            </li>
        </ul>
    </li>



    <li class="sidebar-header">
        복지(Welfare)
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-vacation"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">휴가관리</span>
        </a>
        <ul id="hr-vacation" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/vacation">
                    휴가
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/leave/type">
                    휴가목록
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/leave/request">
                    휴가신청
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    연차/병가 신청 및 승인
                </a>
            </li>
        </ul>
    </li>






    <li class="sidebar-item">
        <a data-bs-target="#hr-edu2"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">복리후생 관리</span>
        </a>
        <ul id="hr-edu2" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    보험 및 연금 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 혜택 및 복지 프로그램
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    건강 관리 프로그램
                </a>
            </li>
        </ul>
    </li>





    <li class="sidebar-header">
        요청/신청
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#hr-credentials"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">
                발급
            </span>
        </a>
        <ul id="hr-credentials" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/jiny/hr/credentials">
                    재직증명서
                </a>
            </li>
        </ul>
    </li>


    <li class="sidebar-item">
        <a data-bs-target="#hr-credentials"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">
                정책 및 규정 관리
            </span>
        </a>
        <ul id="hr-credentials" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    회사 정책 및 규정 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    HR 관련 법률 준수
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    직원 핸드북 관리
                </a>
            </li>
        </ul>
    </li>


    <li class="sidebar-header">
        Payroll
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-payroll"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">급여 및 보상 관리</span>
        </a>
        <ul id="hr-payroll" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/payroll/wage">
                    최저시급
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/payroll/salary">
                    계약조건
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    급여명세서
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    공제항목
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    상여금
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    급여 산정 및 지급
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    보너스 및 인센티브 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    세금 공제 및 급여 관련 문제 처리
                </a>
            </li>


        </ul>
    </li>

    <li class="sidebar-header">
        Recruit
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#hr-recruit"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-layout align-middle">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            <span class="align-middle">채용 관리</span>
        </a>
        <ul id="hr-recruit" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/hr/admin/recruit/plan">
                    충원요청
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    채용계획
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="">
                    채용공고
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    채용확정
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    채용 공고 및 지원자 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    면접 일정 조율 및 관리
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    채용 절차 및 합격자 통보
                </a>
            </li>


        </ul>
    </li>

    <li class="sidebar-header">
        HR Setting
    </li>

    <!-- Submenu -->
    <li class="sidebar-item">
        <a data-bs-target="#admin-admin" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            <span class="align-middle">Base</span>
        </a>
        <ul id="admin-admin" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link" href="/jiny/hr">
                    Introduce
                </a>
            </li>
        </ul>
    </li>

</ul>
