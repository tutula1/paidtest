<? /*



  [ 경고 ]

  본 시스템에 대한 (1) 구조를 이해하지 못하거나 (2) 망각한 상태로 작업을 시작하지 마십시오.



  [ 주요 폴더 ]

  최상위 폴더에는 (1) CodeIgniter, (2) Metronic 등의 폴더가 있습니다.



    [ CodeIgniter 폴더 - http://codeigniter.com ]

    이 폴더는 paidtest.net 도메인으로 접근할 수 있습니다.

    이 폴더의 내용은 CodeIgniter 3.0.0 복사 후 서비스 무관 파일을 삭제한 것입니다.

    시스템 설정과 관련한 내용은 (1) CodeIgniter/application 폴더, (2) .htaccess 파일 등의 내용을 허가 없이  변경하지 마십시오.

    일반 개발자는 CodeIgniter/application 폴더 내에 (1) views, (2) controllers, (3) models 등 폴더만을 사용하여 모든 업무를 수행할 수 있음으로 그 외의 내용을 허가 없이 변경하지 마십시오.



    [ Metronic 폴더 - http://keenthemes.com ]

    이 폴더는 metronic.paidtest.net 도메인으로 접근할 수 있습니다.

    이 폴더의 내용은 Metronic 3.9.0 복사 후 서비스 무관 파일을 삭제한 것입니다.

    이 폴더의 내용은 어떠한 경우에도 변경할 필요가 없습니다.

    만약 본 폴더의 특정 내용을 서비스에 활용하고자 한다면 필요 파일을 CodeIgniter/application/view 로 복사하여 변형하십시오.

    해당 폴더에 파일을 복사할 때에 경로와 관련한 이슈가 있으니 아래 구문을 우선 확인하십시오.

    <? $P = $_SERVER['HTTP_HOST'] == 'localhost' ? '../../Metronic' : 'http://metronic.paidtest.net'; ?>

    참고로 해당 구문의 'P'는 'Path'의 이니셜입니다.

    본 내용은 <?= $P ?> 형태로 본문 중 일부 주소를 대신하기 위하여 사용되어야 합니다.



    [ 프레임워크 추가 ]

    만약 특정 프레임워크를 추가해야 한다면 (1) 최상위 폴더 내 해당 프레임워크 명칭으로 폴더를 생성, (2) 해당 프레임워크 원형 폴더 구조를 유지하여 복사, (3) 불필요 파일을 제거 등의 순서를 따르십시오.

    또한 접근 방식에 관하여는 Meronic 폴더의 (1) 도메인 접근 방식, (2) 파일 원형 보존 방식 등을 따르십시오.



*/ ?>
